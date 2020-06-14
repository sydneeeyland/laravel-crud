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
                    <form method="POST" action="/delete/{{$deleteProd[0]->id}}">
                        @csrf

                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">Product ID</label>

                            <div class="col-md-6">
                                <input 
                                id="product_name" 
                                type="text" 
                                class="form-control @error('Product_name') is-invalid @enderror" 
                                name="product_name" 
                                value="{{ old('product_name') ?? $deleteProd[0]->id }}" 
                                required autocomplete="product_name" autofocus disabled>

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">Product Name</label>

                            <div class="col-md-6">
                                <input 
                                id="product_name" 
                                type="text" 
                                class="form-control @error('Product_name') is-invalid @enderror" 
                                name="product_name" 
                                value="{{ old('product_name') ?? $deleteProd[0]->product_name }}" 
                                required autocomplete="product_name" autofocus disabled>

                                @error('product_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-danger">
                                    Delete
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
