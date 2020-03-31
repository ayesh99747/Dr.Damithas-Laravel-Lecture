@extends("layouts.index")
@section("content")
    <form action="/students/{{ $id }}" method="POST">
        @method('PATCH')

        <h2>Add Student </h2>
            @include("student.student_form")
                
                    <button type="submit">Edit Student</button>
            @csrf
    </form>
    {{ session()->get('success') }}  
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection

