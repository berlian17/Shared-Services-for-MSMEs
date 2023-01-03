@extends('layouts.app')

@section('title')
    Add Customer
@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add New Customer</h1>
        </div>
        <!-- Card -->
        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('customer.add') }}">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-12">
                            <label for="inputName">Name</label>
                            <input type="text" class="form-control" name="name" id="inputName" value="{{ old('name') }}" required>
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="inputEmail">email</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">@</div>
                                </div>
                                <input type="email" class="form-control" name="email" id="inputEmail" value="{{ old('email') }}" min="0" required>
                            </div>
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="inputPassword">Password</label>
                            <input type="password" class="form-control" name="password" id="inputPassword" required>
                        </div>
                        <div class="form-group col-12 col-md-4">
                            <label for="inputPhone">Phone</label>
                            <input type="text" class="form-control" name="phone" id="inputPhone" value="{{ old('phone') }}" required>
                        </div>
                        <div class="form-group col-12">
                            <label for="inputAddress">Address</label>
                            <textarea class="form-control" name="address" id="inputAddress" cols="30" rows="5">{{ old('address') }}</textarea>
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
