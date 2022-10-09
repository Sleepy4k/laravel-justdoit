// Success
$(document).ready(function() {
    $(document).on('click', '.success', function (e) {
        e.preventDefault();
        swal({
            title: 'Berhasil',
            text: "Aksi berhasil dilakukan",
            icon: 'success',
        })
    });
});

// Information
$(document).ready(function() {
    $(document).on('click', '.information', function (e) {
        e.preventDefault();
        swal({
            title: 'Information',
            text: "Aksi berhasil dilakukan",
            icon: 'info',
        })
    });
});

// Confirm Delete
$(document).ready(function() {
    $(document).on('click', '.confirm-delete', function (e) {
        e.preventDefault();
        const form = $(this).parents('form');
        swal({
            title: 'Apakah Kamu Yakin?',
            text: "Kamu akan menghapus data ini secara permanen!",
            icon: 'warning',
            buttons: ["Cancel", "Yakin"],
        }).then((result) => {
            if (result) {
                swal({
                    title: 'Berhasil',
                    text: "Data berhasil terhapus",
                    icon: 'success',
                }).then((result) => {
                    if (result) {
                        form.submit();
                    }
                })
            }
        })
    });
});

// Confirm Edit
$(document).ready(function() {
    $(document).on('click', '.confirm-edit', function (e) {
        e.preventDefault();
        const form = $(this).parents('form');
        swal({
            title: 'Apakah Kamu Yakin?',
            text: "Kamu akan mengubah data ini secara permanen!",
            icon: 'info',
            buttons: ["Cancel", "Yakin"],
        }).then((result) => {
            if (result) {
                swal({
                    title: 'Berhasil',
                    text: "Data berhasil terhapus",
                    icon: 'success',
                }).then((result) => {
                    if (result) {
                        form.submit();
                    }
                })
            }
        })
    });
});