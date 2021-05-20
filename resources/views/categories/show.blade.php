@extends('layouts.admin')

@section('content')


<div class="row">
    <div class="md-col-12">
        <br>
        <h3> {{ $category->name }}</h3>
       
        <a href="{{ route('edit_category' , ['id' => $category->id])}}" class="btn btn-outline-info"> Edit </a>
        <form action=" {{ route('delete_category' , [ 'id' => $category->id ] ) }} " method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-outline-danger" value="Delete">
        </form>
    </div>
    <br>

</div>




@endsection