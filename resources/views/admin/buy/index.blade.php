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
                            <th>Name</th>
                            <th>Product</th>
                            <th>History</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>no</td>
                            <td>name</td>
                            <td>product</td>
                            <td>date</td>
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
                ajax: '{{ route('admin.buy.data') }}',
                columns: [
                    { data: 'DT_RowIndex', orderable:false, searchable:false},
                    { data: 'user'},
                    { data: 'product'},
                    { data: 'created_at'},
                ]
            });
        });
    </script>
@endpush