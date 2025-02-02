@extends('layouts.app')

@section('content')
    <h1>This is detail of product with id: {{ $id }}</h1>
    <a href="{{ route('products.index') }}">Back to list of products</a>
@endsection