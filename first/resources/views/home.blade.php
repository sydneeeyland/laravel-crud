@extends('layouts.app')

@section('content')
<div class="container">
@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">Dashboard</div>
    
                <div class="card-body">
                    <div class="row d-flex" align = "center">
                        <div class="col-4">
                            <a class = "btn btn-primary" href = "/add">Add new Product</a>
                        </div>
                        <div class="col-4">
                            <a class = "btn btn-primary" href="/list">Manage Products</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
