$(function() {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'http://127.0.0.1:8000/income/data-table', // memanggil route yang menampilkan data json
        columns: [{ // mengambil & menampilkan kolom sesuai tabel database
                data: 'id',
            },
            {
                data: 'category',
            },
            {
                data: 'total',
            },
            {
                data: 'created_at',
            },
            {
                data: 'action',
            }
        ]
    });
});
