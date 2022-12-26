$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$('.show_confirm_lamar').click(function (event) {
    event.preventDefault();

    // swal({
    //         title: `Apakah yakin ingin lamar lowongan ini?`,
    //         text: "Jika iya, data akan dikirimkan.",
    //         icon: "info",
    //         buttons: true,
    //         successMode: true,
    //     })

    Swal.fire({
        title: 'Apakah yakin ingin lamar lowongan ini?',
        text: "Jika iya, data akan dikirimkan.",
        icon: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Lamar sekarang!'
    }).then((result) => {
        if (result.isConfirmed) {
            // form.submit();
            console.log('success')
        }
    });
})

$('.show_confirm_delete').click(function (event) {
    var form = $(this).closest("form");
    var name = $(this).data("name");
    event.preventDefault();
    Swal.fire({
            title: "Apakah yakin ingin hapus data?",
            text: "Jika dihapus, data tidak dapat dikembalikan.",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Hapus'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
})
// $('.show_confirm_delete').click(function (event) {
//     var form = $(this).closest("form");
//     var name = $(this).data("name");
//     event.preventDefault();
//     swal({
//             title: `Apakah yakin ingin hapus data?`,
//             text: "Jika dihapus, data tidak dapat dikembalikan.",
//             icon: "warning",
//             buttons: true,
//             dangerMode: true,
//         })
//         .then((willDelete) => {
//             if (willDelete) {
//                 form.submit();
//             }
//         });
// })
