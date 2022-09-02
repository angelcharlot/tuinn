window.onload = function () {


    Livewire.on('block_eliminar', x => {

        $('.borrarr').attr('disabled', true);

    });


    Livewire.on('delete', x => {

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {


                Livewire.emitTo('personal', 'destroy', x);
                Swal.fire(
                    'Deleted!',
                    'Your file has been deleted.',
                    'success'
                )

            }
        })


    });



};
