@extends('layouts.app')

@section('content')



     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white; ">
    <h1>Create new store </h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      @if(isset($error))
        {{$error}}
      @endif

      <form method="post" action="{{ url('stores/create') }}">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="project-name">Product<span class="required">*</span></label>
                <input placeholder="Enter product" name="pro_id" class="form-control" />
            </div>

            <div class="form-group">
                <label for="project-name">Quantity<span class="required">*</span></label>
                <input placeholder="Enter quantity" name="quantity" class="form-control" />
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit"/>
            </div>
        </form>
      </div>
</div>

@endsection