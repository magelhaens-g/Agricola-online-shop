<a href="{{ route('admin.product.edit', $model) }}" class="btn btn-warning" style="margin-bottom:10px">Edit</a>
<button href="{{ route('admin.product.destroy', $model) }}" class="btn btn-danger" id="delete">Delete</button>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script>
    $('button#delete').on('click', function (e){
        e.preventDefault();

        var href = $(this).attr('href');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
        })


    })
</script>