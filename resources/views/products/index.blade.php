@extends('layouts.admin')

@section('content')



<div class="col-lg-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body"><h5 class="card-title">{{__('Producs Table')}}</h5>
                                    <div class="d-inline-block"> </div>
                                        <table class="mb-0 table table-hover">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>{{__('Name')}}</th>
                                                <th>{{__('Color')}}</th>
                                                <th>{{__('Price')}}</th>
                                                <th>{{__('Category')}}</th>
                                                <th>{{__('action')}}</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($product as $pro)   

                                            <tr>
                                               
                                                <td>  {{ $pro->id }}</td>
                                                <td>  {{ $pro->name }}</td>
                                                <td>    {{ $pro->color }}</td>
                                                <td>    {{ $pro->price }}</td>
                                                <td>     --- </td>
                                                <td>
                                                <!--    <td>       $pro->category->name </td>-->


                                                <ul class="list-inline m-0">
                                                    <li class="list-inline-item">
                                                    <a href="{{ route('product', ['id' => $pro->id]) }}" class="btn btn-primary rounded-circle btn-sm mx-1"> <i class="fas fa-plus"></i> </a>
                                                    </li>

                                                    <li class="list-inline-item">
                                                    <a href="{{ route('edit_product' , ['id' => $pro->id])}}" class="btn btn-success rounded-circle btn-sm mx-1"> <i class="fas fa-edit"></i> </a>
                                                    </li>
                                                    <li class="list-inline-item">
                                                    <form action=" {{ route('delete_product' , [ 'id' => $pro->id ] ) }} " method="POST">
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





@endsection