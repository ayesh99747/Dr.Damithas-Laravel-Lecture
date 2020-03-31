
 @extends("layouts.index")
 @section("content")
        <h2>Student Data </h2>
        <table>
         @foreach($students as $student)
         <tr>
            <td>{{$student->id}}</td>
            <td><a href="/students/{{$student->id}}">
                       {{$student->lastname}}</a></td>
            <td>{{$student->initials}}</td>
         </tr>
         @endforeach
         </table>
         <a href="/students/create">New Student</a>
@endsection
    