@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <span class="pull-left">Product</span>
                <a class="pull-right btn btn-primary btn-sm" href="{{url('/categorys/create')}}">Create new</a>
            </div>
            <div class="panel-body">
                
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($categorys as $key => $category)

                            <tr>
                                <td>{{ $category->id }}</td>
                                <td><a href="{{url('/categorys/'.$category->id.'/edit')}}">{{ $category->name }}</a></td>
                                <td>
                                    <a href="{{url('/categorys/'.$category->id.'/delete')}}">
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