@extends('layouts.app')

@section('content')
    <div class="col-md-12">
        
        <div class="panel panel-primary ">
            <div class="panel-heading clearfix">
                <span class="pull-left">Admin</span>
            </div>
            <div class="panel-body">
                
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($users as $key => $user)

                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                
                                <td>
                                    <a href="{{url('/users/'.$user->id.'/delete')}}">
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