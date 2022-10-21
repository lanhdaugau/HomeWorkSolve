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
        .search:focus{
            outline: none;
        }
        .search{
            width: 400px !important;
            height: 32px !important;
            border-radius: 7px !important;
        }
        .select{
            width: 60px !important;
            height: 32px !important;
            border-radius: 7px  !important;
        }
    </style>
@endpush
@section('contents')
    <div class="wrapper">
        <div class="main">

        </div>
    </div>
    <div class="wrapper">
        <div class="main">
            <div class="section">
                {{-- <div class="form-group">
                    <select name=" " id="select-name" style="width: 500px"></select>
                </div> --}}
                @if (session()->has('success'))
                    <div class="alert alert-success">

                        {{ session()->get('success') }}

                    </div>
                @endif
                <table  id="table-name" class="table table-shopping responsive" style="padding: 20px">
                    <thead>
                        <tr>

                            
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
    @push('js')
        <!-- DataTables -->
        <script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script>
            $('#table-name').DataTable({

                processing: true,
                serverSide: true,
                ajax: "{{ route('api') }}",
                columns: [
                    {
                        data:'avatar',
                        name:'avatar',
                        render: function(data) {
                            if(data == null){
                                data=  'avatar.png';
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
                        data:'address',
                        name:'address',
                        render:function(data){
                            if(data==null){
                                return `<span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>`;
                            }
                            return data ;
                        }
                    },
                    {
                        data:'birthday',
                        name:'birthday',
                        render:function(data){
                            if(data==null){
                                return `<span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>`;
                            }
                            const getAge = birthDate => Math.floor((new Date() - new Date(birthDate)
                                .getTime()) / 3.15576e+10)
                            data = getAge(data);
                            return data;
                        }
                    },
                    {
                        data:'gender',
                        name:'gender',
                        render:function(data){
                            if(data==null){
                                return `<span class="label label-default"><i class="fa fa-unlock-alt" aria-hidden="true"></i></span>`;
                            }
                            if(data==1){
                                data='Nam';
                            }
                            else if(data==0){
                                data='Nữ';
                            }
                            
                            return data;
                        }
                    },
                    {
                        data:'detail',
                        name:'detail',
                        render: function(data){
                            return `<a class='btn btn-primary' href="${data}"> Xem thêm </a>`;
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript"
            src="https://cdn.datatables.net/v/dt/jszip-2.5.0/dt-1.12.1/b-2.2.3/b-colvis-2.2.3/b-html5-2.2.3/b-print-2.2.3/date-1.1.2/fc-4.1.0/fh-3.2.4/r-2.3.0/rg-1.2.0/sc-2.0.7/sb-1.3.4/sl-1.4.0/datatables.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    @endpush
@endsection
