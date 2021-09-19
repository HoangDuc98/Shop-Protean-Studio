@extends('products.layouts.app')
<title>Category Description</title>
@section('content')
<div class="row" style="margin-bottom: 20px;">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h3>Show Category</h3>
        </div>
        <div class="pull-right">
            <a class="btn btn-info" href="/category">Back Category</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $category->name }}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Status:</strong>
            {{ $category->status }}
        </div>
    </div>
</div>
@endsection