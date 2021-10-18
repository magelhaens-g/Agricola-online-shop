@extends('admin/templates/default')

@section('content')
    <div class="content" style="padding-left:20px; padding-right:20px">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Product</h3>
                <a href="{{ route('admin.product.create') }}" class="btn btn-primary" style="float:right">Add Product</a>
            </div>
            <div class="box-body">
                <table id="dataTable" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Picture</th>
                            <th>Title</th>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>no</td>
                            <td>picture</td>
                            <td>title</td>
                            <td>category</td>
                            <td>description</td>
                            <td>price</td>
                            <td>stock</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <form action="" method="POST" id="deleteForm">
            @csrf
            @method("DELETE")
            <input type="submit" value="Delete" style="display:none">
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('#dataTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{{ route('admin.product.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable:false, searchable:false},
                    { data: 'pict1'},
                    { data: 'title'},
                    { data: 'category'},
                    { data: 'desc'},
                    { data: 'price'},
                    { data: 'stock'},
                    { data: 'action'},
                ]
            });
        });
    </script>
@endpush