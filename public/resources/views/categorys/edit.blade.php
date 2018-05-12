@extends('layouts.app')

@section('content')



     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white; ">
    <h1>Edit category </h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      @if(isset($error))
        {{$error}}
      @endif

      @foreach($categorys as $key => $category)
      <form method="post" action="{{url('/categorys/edit')}}">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="project-name">Id</label>
                  <input  name="id" class="form-control" value="{{$category->id}}" />
              </div>

              <div class="form-group">
                  <label for="project-name">Name<span class="required">*</span></label>
                  <input placeholder="Enter name" name="name" class="form-control" value="{{$category->name}}" />
              </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Submit"/>
              </div>
        </form>
        @endforeach
      </div>
</div>

@endsection