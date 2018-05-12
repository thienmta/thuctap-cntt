@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <span class="pull-left">Product</span>
                <a class="pull-right btn btn-primary btn-sm" href="{{url('/products/create')}}">Create new</a>
            </div>
            <div class="panel-body">
                
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($products as $key => $product)

                            <tr>
                                <td>{{ $product->id }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->cat_id }}</td>
                                <td>{{ $product->price }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-delete">
                                        Delete <span class="glyphicon glyphicon-trash deleteRow"></span>
                                    </button>


                                </td>
                            </tr>

                    @endforeach
                    </tbody>

                </table>

                
            </div>
        </div>
    </div>
@endsection