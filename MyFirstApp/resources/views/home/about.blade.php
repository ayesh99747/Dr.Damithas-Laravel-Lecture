@extends('layouts.master')
@section('content')
<p>About Page</p>
<h1>About Details</h1>
<ul>
@foreach($contacts as $name)
    <li> {{ $name }} </li>
@endforeach
</ul>

@endsection
