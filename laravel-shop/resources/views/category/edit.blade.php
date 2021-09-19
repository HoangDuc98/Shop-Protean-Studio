@extends('products.layouts.app')
<title>Edit Category</title>
@section('content')
<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">
    <div class="pull-right">
            <a class="btn btn-info" href="/category">Back Category</a>
        </div>
        <div class="pull-left">
            <h3>Edit Category</h3>
        </div>   
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('category.update',$category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $category->name }}" class="form-control">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios1" value="1" checked>
                    <label class="form-check-label" for="exampleRadios1">
                        Active
                    </label>
                    <input class="form-check-input" type="radio" name="status" id="exampleRadios2" value="0">
                    <label class="form-check-label" for="exampleRadios2">
                        Inactive
                    </label>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </div>

</form>
@endsection