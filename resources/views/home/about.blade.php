@extends('layouts.master')
@section('content')
<p>About Page</p>
<p> {{ $title }} </p>
<h1>About Details</h1>
<ul>
<ul>
<?php
  foreach($names as $name){
      echo "<li>".$name. "</li>";
  }
?>
</ul>

</ul>

@endsection
