@extends('layouts.app')

@section('content')



     <div class="row col-md-9 col-lg-9 col-sm-9 pull-left " style="background: white; ">
    <h1>Edit product </h1>

      <!-- Example row of columns -->
      <div class="row  col-md-12 col-lg-12 col-sm-12" >

      @if(isset($error))
        {{$error}}
      @endif

      @foreach($products as $key => $product)
      <form method="post" action="{{url('/products/edit')}}">
            {{ csrf_field() }}
              <div class="form-group">
                  <label for="project-name">Id</label>
                  <input  name="id" class="form-control" value="{{$product->id}}" />
              </div>

              <div class="form-group">
                  <label for="project-name">Name<span class="required">*</span></label>
                  <input placeholder="Enter name" name="name" class="form-control" value="{{$product->name}}" />
              </div>

              <div class="form-group">
                  <label for="project-name">Category</label>
                  <input placeholder="Enter category" name="category" class="form-control" value="{{$product->cat_id}}" />
              </div>

              <div class="form-group">
                  <label for="project-name">Price</label>
                  <input placeholder="Enter price"  name="price" class="form-control" value="{{$product->price}}" />
              </div>

              <div class="form-group">
                  <input type="submit" class="btn btn-primary" value="Submit"/>
              </div>
        </form>
        @endforeach
      </div>
</div>

@endsection