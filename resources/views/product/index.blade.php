@extends('layouts.app')
@section('content')

<div class="card">
    <div class="card-header">All Products</div>

    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                @if($products->count() !=0)
                    @foreach($products as $product)
                    <tr>
                        <td>
                            <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}" style="width: 70px; height: 70px; border-radius: 50px;">
                        </td>
                        <td>
                            {{ $product->title }}
                        </td>
                        <td>
                            {{ $product->price}}
                        </td>
                        <td>
                            <form action="{{ route('product.destroy',[$product->id])}} " method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('product.show',[$product->id])}}" class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                    @endforeach
                @else
                <tr>
                    <td><p class="text-center">No Posts found yet.</p></td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>











@endsection