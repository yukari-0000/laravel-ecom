@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">New Product</div>

    <div class="card-body">
        @if(count($errors) >0)
            <ul class="list-group">
                @foreach($errors->all() as $error)
                    <li class="list-group-item text-danger">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label>Description</label>
                <textarea name="desc" id="content" rows="10" cols="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control" name="image">
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="number" class="form-control" name="price">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Store Product</button>
            </div>

        </form>
    </div>
</div>
@endsection