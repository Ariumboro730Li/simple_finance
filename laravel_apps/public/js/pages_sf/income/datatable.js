$(function() {
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: `${configView.url}/income/data-table`, // memanggil route yang menampilkan data json
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
                data: 'updated_at',
            },
            {
                data: 'action',
            }
        ]
    });
});
