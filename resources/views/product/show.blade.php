@extends('layouts.app')

@section('content')
            <div class="card">
                <div class="card-header">Show Details: {{ $product->title }}</div>

                <div class="card-body">
                    <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->title }}" width="100%" height="250px">
                    <p class="card-text my-2">{!! $product->content !!}</p>
{{-- \                    <a href="{{ route('post.edit',[$post->id]) }}" class="btn btn-sm btn-info"><i class="fas fa-edit"></i></a> --}}
                </div>
            </div>

@endsection
