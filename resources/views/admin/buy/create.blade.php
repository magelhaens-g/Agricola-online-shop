@extends('admin/templates/default')

@section('content')
    <div class="content" style="padding-left:20px; padding-right:20px">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Add Product</h3>
            </div>
            <div class="box-body">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
    
                    <div class="form-group @error('title') has-error @enderror">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter product title" value="{{ old('title') }}">
                        @error('title')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('pict1') has-error @enderror">
                        <label for="">Picture 1</label>
                        <input type="file" name="pict1" class="form-control">
                        @error('pict1')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('pict2') has-error @enderror">
                        <label for="">Picture 2</label>
                        <input type="file" name="pict2" class="form-control">
                        @error('pict2')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('pict3') has-error @enderror">
                        <label for="">Picture 3</label>
                        <input type="file" name="pict3" class="form-control">
                        @error('pict3')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('category') has-error @enderror">
                        <label for="">Category</label>
                        <select name="category" id="" class="form-control">
                            <option value="Seed">Seed</option>
                            <option value="Fertilizer">Fertilizer</option>
                            <option value="Tool">Tool</option>
                        </select>
                        @error('category')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('desc') has-error @enderror">
                        <label for="">Description</label>
                        <textarea rows="3" name="desc" class="form-control" placeholder="Enter product description">{{ old('desc') }}</textarea>
                        @error('desc')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('price') has-error @enderror">
                        <label for="">Price</label>
                        <input type="number" name="price" class="form-control" placeholder="Enter price" value="{{ old('price') }}">
                        @error('price')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group @error('stock') has-error @enderror">
                        <label for="">Stock</label>
                        <input type="number" name="stock" class="form-control" placeholder="Enter stock" value="{{ old('stock') }}">
                        @error('stock')
                        <span class="help-block">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Add" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection