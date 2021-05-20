@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-6">
              <div class="main-card mb-3 card">
                  <div class="card-body"><h5 class="card-title">Edit Category Name</h5>
          
<form action="{{ route('update_product' , ['id' => $product->id])}}" method="POST" >

@csrf
@method('PUT')

    <div class="form-group">
        <label for="title"> Name</label>
        <input type="text"name="name" class="form-control" value="{{$product->name}}">
    </div>

    <div class="form-group">
        <label for="title"> Color</label>
        <input type="text"name="color" class="form-control" value="{{$product->color}}">
    </div>

    <div class="form-group">
        <label for="title"> Price</label>
        <input type="text"name="price" class="form-control" value="{{$product->color}}">
    </div>

    <div class="form-group">
                            <label for="category"> {{ __('Select Category:') }} </label>
                            <select name="category" class=" form-control mr-sm-2 " >
                                    <option value="0" disable selected>{{ __('Choose a Category') }}</option>
                                    @foreach(App\Models\Category::all() as  $category)
                                    <option value="{{$category->id}}" >{{ucfirst($category->name)}}</option>
                                    @endforeach 
                        </select> 
                            @error('category')
                            <div class="alert alert-danger"> {{$message }}</div>
                            @enderror
                        </div>
    <div class="form-group">
        <button type="submit" class="btn btn-outline-primary"> Edit product</button>
    </div>
</form>
</div>
</div>
</div>
</div>
@endsection