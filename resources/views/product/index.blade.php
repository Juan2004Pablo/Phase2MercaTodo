@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
@if (Auth::check())
<?php
    $user=Auth::user();
?>
@if($user->IsAdmin())
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Product') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Product Id</th>
										<th>Name Product</th>
										<th>Price</th>
										<th>Product Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $product->product_id }}</td>
											<td>{{ $product->name_product }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->product_image }}</td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->product_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->product_id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->product_id) }}"><i class="fa fa-fw fa-edit"></i> Update</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->product_id) }}"><i class="fa fa-fw fa-eye"></i> Enable</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->product_id) }}"><i class="fa fa-fw fa-eye"></i> Disable</a>
                                                   <!--
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    -->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
@endif

@if($user->IsClient())
<div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Product') }}
                            </span>

                             <!--<div class="float-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div> -->
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Product Id</th>
										<th>Name Product</th>
										<th>Price</th>
										<th>Product Image</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $product->product_id }}</td>
											<td>{{ $product->name_product }}</td>
											<td>{{ $product->price }}</td>
											<td>{{ $product->product_image }}</td>

                                            <td>
                                                <form action="{{ route('products.destroy',$product->product_id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->product_id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                   <!-- <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->product_id) }}"><i class="fa fa-fw fa-edit"></i> Update</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->product_id) }}"><i class="fa fa-fw fa-eye"></i> Enable</a>
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->product_id) }}"><i class="fa fa-fw fa-eye"></i> Disable</a>
                                                   
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                    -->
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection

@endif

@endif

