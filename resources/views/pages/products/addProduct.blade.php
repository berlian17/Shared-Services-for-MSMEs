@extends('layouts.app')

@section('title')
    Add Product
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Product</h1>
        </div>
        <!-- Card -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('product.add') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-12 col-md-7">
                            <label for="inputProduct">Product Name</label>
                            <input type="text" class="form-control" name="product" id="inputProduct" value="{{ old('product') }}" required>
                        </div>
                        <div class="form-group col-12 col-md-3">
                            <label for="inputPrice">Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Rp</div>
                                </div>
                                <input type="number" class="form-control" name="price" id="inputPrice" value="{{ old('price') }}" min="0" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-2">
                            <label for="inputQty">Quantity</label>
                            <input type="number" class="form-control" name="qty" id="inputQty" value="{{ old('qty') }}" min="0" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputDesc">Description</label>
                            <textarea class="form-control" name="desc" id="inputDesc" cols="30" rows="5">{{ old('desc') }}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
