@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <span class="pull-left">Sale</span>
                <a class="pull-right btn btn-primary btn-sm" href="{{url('/sales/create')}}">Create new</a>
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
                    @foreach($sales as $key => $sale)

                            <tr>
                                <td><a href="{{url('/sales/'.$sale->id.'/edit')}}">{{ $sale->id }}</a></td>
                                <td><a href="{{url('/sales/'.$sale->id.'/edit')}}">{{ $sale->pro_id }}</a></td>
                                <td><a href="{{url('/sales/'.$sale->id.'/edit')}}">{{ $sale->quantity }}</a></td>
                                <td>
                                    <a href="{{url('/sales/'.$sale->id.'/delete')}}">
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