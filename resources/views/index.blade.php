@extends('layouts.app')

@section('content')
<h1>Welcome</h1>
<img src="{{ asset('storage/car.jpg') }}" alt="My car"/>
{{
    $age = 20;
}}
@if($age >= 18)
    <p>You are eligible to vote</p>
@elseif ($age < 18)
    <p>You are not eligible to vote</p>
@endif

@empty($ls)
    <p>No data found</p>
@else
    <ul>
        @foreach($ls as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
@endempty
@isset($name)
    <p>{{ $name }}</p>
@else
    <p>No name found</p>    
@endisset
@switch($role)
    @case('admin')
        <p>Hello Admin</p>
        @break

    @default
        <p>Hello User</p>
        @break
@endswitch
@endsection