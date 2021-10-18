$(function() {
    $('#dataTable').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{{ url("product/data") }}',
        columns: [
            { data: 'id'},
            { data: 'title'},
            { data: 'category'},
            { data: 'price'},
            { data: 'stock'},
        ]
    });
});