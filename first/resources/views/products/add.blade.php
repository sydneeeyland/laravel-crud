@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                  <a class="btn btn-info" href="/home">Home</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="/create">
                        @csrf

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-6">
                                <input 
                                id="product_name" 
                                type="text" 
                                class="form-control @error('Product_name') is-invalid @enderror" 
                                name="product_name" 
                                value="{{ old('product_name') }}" 
                                required autocomplete="product_name" autofocus>

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_quantity" class="col-md-4 col-form-label text-md-right">Product Quantity</label>

                            <div class="col-md-6">
                                <input 
                                id="product_quantity" 
                                type="text" 
                                class="form-control @error('product_quantity') is-invalid @enderror" 
                                name="product_quantity" 
                                value="{{ old('product_quantity') }}" 
                                required autocomplete="product_quantity" autofocus>

                                @error('product_quantity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="product_code" class="col-md-4 col-form-label text-md-right">Product Code</label>

                            <div class="col-md-6">
                                <input 
                                id="product_code" 
                                type="text" 
                                class="form-control @error('product_code') is-invalid @enderror" 
                                name="product_code" 
                                value="{{ old('product_code') }}" 
                                required autocomplete="product_code" autofocus>

                                @error('product_code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
