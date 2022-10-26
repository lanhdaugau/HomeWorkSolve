@push('link')
<!-- DataTables -->
<link rel="stylesheet" href="{{ asset('asset/admin') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet"
  href="{{ asset('asset/admin') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('asset/admin') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endpush

@push('script')
<!-- DataTables  & Plugins -->
<script src="{{ asset('asset/admin') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('asset/admin') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- Page specific script -->
<script>
  function renderData(url, columns){
    var table = $("#dataTable").DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "orderable": false,
        "info": true,
        "autoWidth": false,
        "responsive": false,
        "processing": true,
        "serverSide": true,
        "bDestroy": true,
        "order": [[1, 'desc']],
        "scrollX": true,
        "columnDefs": [
            { "searchable": false, "targets": [0] }  // Disable search on first and last columns
          ],
        ajax: url,
        columns: columns,
      });
    table.on('order.dt search.dt', function () {
        table.column(0, { search: 'applied', order: 'applied' }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
        });
    }).draw();
    
}
</script>
@endpush