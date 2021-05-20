@extends('layouts.admin')

@section('content')



<div class="col-lg-6">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">{{__('Categories')}}</h5>
                                    <a href="{{ route('add_category')}}" class="btn btn-primary rounded-circle btn-sm mx-1"> <i class="fas fa-plus"></i> </a>
                                       

                                        <table class="mb-0 table table-hover"> <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Name')}}</th>   
                                                <th>{{__('Actions')}}</th>   
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($category as $cat)   
                                             <tr>
                                                <td>  {{ $cat->id }}</td>
                                                <td>      {{ $cat->name }}</td>
                                                <td>
                                                  <ul class="list-inline m-0">
                                                    <li class="list-inline-item">
                                                    <a href="{{ route('edit_category' , ['id' => $cat->id])}}" class="btn btn-success rounded-circle btn-sm mx-1"> <i class="fas fa-edit"></i> </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                    <form action=" {{ route('delete_category' , [ 'id' => $cat->id ] ) }} " method="POST">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button type="submit" onclick="return confirm('{{__('Are you sure')}}')" class="btn btn-danger rounded-circle btn-sm mx-1"><i class="fas fa-trash"></i></button>
                                                  </form>
                                                    </li>
                                                  </ul>
                                          
                                               </td>
                                            </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mb-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


@endsection