@extends('layouts.app')

@section('title', 'Show Products')

@section('contents')

<h1 class="mb-0">Details</h1>
    <hr />

    <div class="row mb-3">
        <div class="col">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-control" value="{{ $product->title }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Price</label>
            <input type="text" name="price" class="form-control" value="{{ $product->price }}" readonly>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col">
            <label class="form-label">product_code</label>
            <input type="text" name="product_code" class="form-control" value="{{ $product->product_code }}" readonly>
        </div>
        <div class="col">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-control" value="{{ $product->description }}" readonly>
        </div>
        
    </div>

    <div class="row">
        <div class="col-mb-3">
            <label class="form-label">Create At</label>
           <input type="text" name="created_at" class="form-control" placeholder="Create At" value="{{ $product->created_at}}" readonly>
        </div>
        <div class="col-mb-3">
            <label class="form-label">Update at</label>
            <input type="text" name="Updated_at" class="form-control" placeholder="Update At" value="{{ $product->updated_at}}" readonly>
         </div>
    </div>

@endsection