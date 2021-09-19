@extends('products.layouts.app')
<title>Category</title>
@section('content')
<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Category</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('category.create') }}">Add Category</a>
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
        <th>Status</th>
        <th width="280px">Actions</th>
    </tr>
    @foreach ($categories as $key => $category)
    <tr>
        <td>{{ $category->id }}</td>
        <td>{{ $category->name }}</td>
        @if ($category->status == 1)
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
            <form action="{{ route('category.destroy',$category->id) }}" method="POST">

                <a class="btn btn-info" href="{{ route('category.show',$category->id) }}">Show</a>

                <a class="btn btn-primary" href="{{ route('category.edit',$category->id) }}">Edit</a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this Category? ' +
                                 'When you delete, all the products of this category deleted too.')">Delete
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $categories->links('pagination::bootstrap-4') !!}

@endsection