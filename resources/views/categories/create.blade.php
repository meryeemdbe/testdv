@extends('layouts.admin')

@section('content')
<div class="row">
            <div class="col-md-6">
              <div class="main-card mb-3 card">
                  <div class="card-body"><h5 class="card-title">Add a Category</h5>
          
                    <form action="{{route('store_cat')}}" method="POST">
                    @csrf
                    <div class="position-relative form-group">
                    <label for="exampleEmail" class="">Name</label>
                    <input name="name" id="exampleEmail" placeholder="Add a new Category" type="text" class="form-control"></div>
                    </div>


                      
                            <button type="submit" class="mt-1 btn btn-primary"> Add Category</button>
          
                    </form>
                    </div>
                    </div>
                    </div>
                    </div>
      
                    


@endsection