@extends("layouts.index")
@section("content")
        <form action="/students", method="POST">
            <h2> Student Data</h2>
                <a href="/students/{{$student->id}}/edit">Add</a>
                </br>
                @include("student.student_form")

                <button type="submit">Add Student</button>

            @csrf
        </form>
@endsection("content")
