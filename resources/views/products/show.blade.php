@extends('layouts.admin')

@section('content')

<div class="row">
            <div class="col-md-6">
              <div class="main-card mb-3 card">
                  <div class="card-body"><h5 class="card-title">Product Details</h5>
          <form action="">
          <div class="position-relative form-group"><label for="exampleEmail" class="">Name</label>
            <input  id="exampleEmail"  type="text" class="form-control" value="{{ $product->name }}">
          </div>
          
          <div class="position-relative form-group"><label for="exampleEmail" class="">Price</label>
            <input  id="exampleEmail"  type="text" class="form-control" value="{{ $product->price }}">
          </div>

          <div class="position-relative form-group"><label for="exampleEmail" class="">Color</label>
            <input  id="exampleEmail"  type="text" class="form-control" value="{{ $product->color }}">
          </div>

          <div class="position-relative form-group"><label for="exampleEmail" class="">Category</label>
            <input  id="exampleEmail"  type="text" class="form-control" value="{{ $product->category->name}}">
          </div> 

          </form>
       
        </form>
    </div>
    </div>
    </div>

</div>




@endsection