@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                  <a class="btn btn-info" href="/home">Home</a>
                </div>

                <div class="card-body">
                <table class="table">
                    <caption>List of products</caption>
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Code</th>
                        <th scope="col"></th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($products as $table)
                      <tr>
                        <td>{{ $table->id }}</td>
                        <td>{{ $table->product_name }}</td>
                        <td>{{ $table->product_quantity }}</td>
                        <td>{{ $table->product_code }}</td>
                        <td>
                        <td>
                          <a class="btn btn-primary" href = 'edit/{{ $table->id }}'>Edit</a>
                          <a class="btn btn-danger" href="delete/{{ $table->id }}">Delete</a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
