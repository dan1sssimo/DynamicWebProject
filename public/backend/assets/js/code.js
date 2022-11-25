$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        let link = $(this).attr("href");

        Swal.fire({
            title: 'Are you sure?',
            text: "Delete This Image?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Deleted!',
                    'Your image has been deleted.',
                    'success'
                )
            }
        })


    });

});
