@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <span class="pull-left">Store</span>
                <a class="pull-right btn btn-primary btn-sm" href="{{url('/stores/create')}}">Create new</a>
            </div>
            <div class="panel-body">
                
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Product</th>
                        <th>Quantity</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($stores as $key => $store)

                            <tr>
                                <td><a href="{{url('/stores/'.$store->id.'/edit')}}">{{ $store->id }}</a></td>
                                <td>{{ $store->pro_id }}</td>
                                <td>{{ $store->quantity }} (c)</td>
                                <td>
                                    <a href="{{url('/stores/'.$store->id.'/delete')}}">
                                        <button type="button" class="btn btn-danger btn-delete">
                                            Delete <span class="glyphicon glyphicon-trash deleteRow"></span>
                                        </button>
                                    </a>

                                </td>
                            </tr>

                    @endforeach
                    </tbody>

                </table>

                
            </div>
        </div>
    </div>
@endsection