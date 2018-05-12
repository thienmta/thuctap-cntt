@extends('layouts.app')

@section('content')



     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white; ">
    <h1>Create new product </h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      @if(isset($error))
        {{$error}}
      @endif

      <form method="post" action="{{ url('products/create') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="project-name">Name<span class="required">*</span></label>
                <input placeholder="Enter name" name="name" class="form-control" />
            </div>

            <div class="form-group">
                <label for="project-name">Category<span class="required"></span></label>
                <input placeholder="Enter category" name="category" class="form-control" />
            </div>

            <div class="form-group">
                <label for="project-name">Price<span class="required"></span></label>
                <input placeholder="Enter price"  name="price" class="form-control" />
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"/>
            </div>
        </form>
      </div>
</div>

@endsection