@extends('products.layouts.app')
<title>List Product</title>
@section('content')

<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h3>Products</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('products.create') }}">Add Product</a>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="{{ route('home.shop') }}">Back Home</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Image</th>
        <th>Status</th>
        <th width="280px">Actions</th>
    </tr>
    @foreach ($products as $product)
    @if ($product->category->status ==1)
    <tr>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->category->name }}</td>
        <td>{{number_format($product->price, 2)  }}$</td>
        <td>{{ $product->amount }}</td>
        <td>
            @if($product->image =='' )
            <img src="{{asset('images/default.png')}}" height="75" width="75" alt="">
            @else
            <img src="{{asset('images/' . $product->image)}}" height="75" width="75" alt="" />
            @endif
        </td>
        @if ($product->status == 1)
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" checked disabled>
                <label class="form-check-label" for="defaultCheck1">
                    Actived
                </label>
            </div>
        </td>
        @else
        <td>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" disabled>
                <label class="form-check-label" for="defaultCheck1">
                    Inactived
                </label>
            </div>
        </td>
        @endif
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this Product?')">Delete
                </button>
            </form>
        </td>
    </tr>
    @endif
    @endforeach
</table>

{!! $products->links('pagination::bootstrap-4') !!}

@endsection