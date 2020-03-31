<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<div class="links">
<a href="/">Home</a>
<a href="/students">Student</a>
@if(session()->has('message'))
<div class="alert alert-success">
    {{session()->get('message')}}
</div>
@endif
</div>
    @yield('content')
    @if ($errors->any)())
    <div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    </div>
    @endif
</body>
</html>
