@extends('layouts.admin')

@section('content')

<div class="row">
            <div class="col-md-6">
              <div class="main-card mb-3 card">
                  <div class="card-body"><h5 class="card-title">Edit Category Name</h5>
          
                    <form action="{{ route('update_category' , ['id' => $category->id])}}" method="POST">
                    
@csrf
@method('PUT')
                    <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Name</label>
                    <input name="name" id="exampleEmail" value="{{$category->name}}" type="text" class="form-control"></div>
                    </div>


                      
                            <button type="submit" class="mt-1 btn btn-primary"> Edit Category</button>
          
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
@endsection
