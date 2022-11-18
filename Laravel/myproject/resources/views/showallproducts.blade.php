@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

    <div class="form-group">
<label for="bank_name">Bank Name</label>
{{ Form::selectBank("bank_name", null,["class"=>"form-control"]) }}
</div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-10">
                            All Products
                        </div>
                        <div class="col-md-2"><a class="btn btn-sm btn-info text-light" href="addnewproduct">Add New</a></div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr</th>
                                <th>Title</th>
                                <th style="width:100px ;">Description</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($ProductsData as $data) 
                            <tr>
                                <td>1</td>  
                                <td>{{ $data->title }}</td>  
                                <td>{{ $data->description }}</td>  
                                <td>{{ $data->price }}</td>  
                                <td>{{ $data->quantity }}</td>  
                                <td> 
                                    <a href="editprod/{{ $data->id }}">Edit</a> 
                                    <a href="deleteprod/{{ $data->id }}">Delete</a> 
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
