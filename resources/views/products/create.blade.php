@extends('layouts.admin')

@section('content')

<form action="{{route('store_product')}}" method="POST">
@csrf
    <div class="form-group">
        <label for="name"> Product Name</label>
        <input type="text"name="name" class="form-control">
    </div>
    <div class="form-group">
        <label for="name"> Product Color</label>
        <input type="text"name="color" class="form-control">
    </div>
    <div class="form-group">
        <label for="name"> Product Price</label>
        <input type="text"name="price" class="form-control">
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
        <button type="submit" class="btn btn-outline-primary"> Add Category</button>
    </div>
</form>


@endsection