@extends('layouts.app')

@section('content')
    <h3>Hi, {{ $name??'' }}</h3>
    <h1>List of Products</h1>
@endsection