@extends('users.layout.main')
@section('title')
    Tìm kiêm
@endsection
@push('css')
    <link rel="stylesheet" type="text/css"
        href="https://cdn.datatables.net/v/bs5/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.4/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sl-1.4.0/datatables.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">

    <style>
        .search:focus {
            outline: none;
        }

        .search {
            width: 400px !important;
            height: 32px !important;
            border-radius: 7px !important;
        }

        .select {
            width: 60px !important;
            height: 32px !important;
            border-radius: 7px !important;
        }
    </style>
@endpush
@section('contents')
    <div class="wrapper">
        <div class="main">
            <div class="section">
                <div class="form-group">
                    <center>
                        <select name=" " id="select-name" style="width: 40%; ;" class="form-group"></select>
                    </center>
                    
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success">

                        {{ session()->get('success') }}

                    </div>
                @endif
                <table id="table-name" class="table table-shopping responsive" style="padding: 20px">
                    <thead>
                        <tr>

                            <th>id</th>
                            <th>Ảnh</th>
                            <th>Họ và tên</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Tuổi tác</th>
                            <th>Giới tính</th>
                            <th>Chi tiết</th>

                        </tr>

                    </thead>


                </table>
            </div>
        </div>
    </div>
    <img src=""  alt="">
    @push('js')
        <!-- DataTables -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript"
            src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.4/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sl-1.4.0/datatables.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script>
            function formatState(state) {
                
               
                if (!state.id) {
                    
                    return state.text;
                }
                
                var baseUrl = "{{ asset('storage/users-avatar') }}";
                
                var $state = $(

                        '<div class="d-flex"><span><img style="width: 70px;height: 70px;" class="img-container" /> <span></span></span>'
                        +'<div class="name" style="padding: 20px">'+state.name+'</div></div>'
                );
                $state.find("img").attr("src", baseUrl + "/" + ((state.avatar) ?? 'avatar.png') );
               
                
                return $state;
            };
            // function formatRepo(repo) {
            //     if (repo.loading) {
            //         console.log(repo);
            //         return repo.text;
            //     }

            //     var $container = $(
            //         "<div class='select2-result-repository__title'></div>" 
            //     );

            //     $container.find(".select2-result-repository__title").text(repo.name);
                
            //     return $container;
            // }

            // function formatRepoSelection(repo) {
            //     return repo.name || repo.text;
            // }
            $("#select-name").select2({
                
                ajax: {
                    url: "{{ route('apiname') }}",
                    dataType: 'json',
                    async: true,
                    // delay: 100,
                    data: function(params) {
                        return {
                            q: params.term, // search term

                        };
                    },
                    processResults: function(data, params) {
                        // console.log(data);

                        return {
                            results: $.map(data, function(item) {
                                return {
                                    name: item.name,
                                    id: item.id,
                                    avatar:item.avatar
                                }
                            })

                        };
                    },
                    // cache: true
                },
                // escapeMarkup: function (markup) { return markup; },
                placeholder: 'Tìm kiếm theo tên',
                // minimumInputLength: 1,
                templateResult: formatState
                // templateResult: formatRepo,
                // templateSelection: formatRepoSelection
            });


            $('#select-name').change(function() {
                table.column(0).search(this.value).draw();
            });
            let table = $('#table-name').DataTable({
                dom: 'lrtip',
                processing: true,
                serverSide: true,
                ajax: "{{ route('api') }}",
                columns: [{
                        data: 'id',
                        name: 'id',
                        visible: false

                    },
                    {
                        data: 'avatar',
                        name: 'avatar',
                        render: function(data) {
                            if (data == null) {
                                data = 'avatar.png';
                            }

                            return ` <div class="img-container">
                            <img src="{{ asset('storage/users-avatar/${data}') }}" >
                                    </div>`;


                        }
                    },
                    {
                        data: 'name',
                        name: 'name',


                    },
                    {
                        data: 'email',
                        name: 'email',

                    },
                    {
                        data: 'address',
                        name: 'address',
                        render: function(data) {
                            if (data == null) {
                                return `<span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>`;
                            }
                            return data;
                        }
                    },
                    {
                        data: 'birthday',
                        name: 'birthday',
                        render: function(data) {
                            if (data == null) {
                                return `<span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>`;
                            }
                            const getAge = birthDate => Math.floor((new Date() - new Date(birthDate)
                                .getTime()) / 3.15576e+10)
                            data = getAge(data);
                            return data;
                        }
                    },
                    {
                        data: 'gender',
                        name: 'gender',
                        render: function(data) {
                            if (data == null) {
                                return `<span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>`;
                            }
                            if (data == 1) {
                                data = 'Nam';
                            } else if (data == 0) {
                                data = 'Nữ';
                            }

                            return data;
                        }
                    },
                    {
                        data: 'detail',
                        name: 'detail',
                        render: function(data) {

                            return `<a class='btn btn-primary' href="${data}" >  Xem thêm </a>`;
                        }
                    }

                ]
            });
            $(document).ready(function() {

                $('.dataTables_filter label input').addClass('search');
                $('.dataTables_length select').addClass('select');
                // $('.dataTables_paginate').addClass('pagination');
                // $('.dataTables_paginate span').addClass('page-item');
                // $('.dataTables_paginate span a').addClass('page-link');

            });
        </script>
    @endpush
@endsection
