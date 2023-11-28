@extends('layouts.app')

@section('title', 'Edit Product')


@section('contents')

<h2>Edit List</h2>
<hr />

<form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" placeholder="Title" value="{{$product->title}}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" placeholder="Price" value="{{$product->price}}">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Product_code</label>
            <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{$product->product_code}}">
        </div>
        <div class="col mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" placeholder="Description" value="{{$product->description}}">
        </div>
        
    </div>

    <div class="row">
        <div class="d-grid">
            <button class="btn btn-primary">Update</button>
        </div>
    </div>
</form>
    
@endsection