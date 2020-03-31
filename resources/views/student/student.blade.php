@extends("layouts.index")
@section("content")
        <form action="/students", method="POST">
            <h2> Student Data</h2>
                <a href="/students/{{$student->id}}/edit">Edit</a>
                </br>
                @include("student.student_form")
                @if (in_array($action,["Add","Edit"]))
                     <button type="submit">{{ $action }} Student</button>
                @endif
            @csrf
        </form>
        {{ session()->get('success') }}  
@endsection("content")