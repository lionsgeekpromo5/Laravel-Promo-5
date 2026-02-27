@extends('layouts.index')


@section('content')
        <div>
   <h1>welcome back {{ $name }}</h1>
   @foreach ($studentsList as $student)
        <h1><span class="text-bold">Student Name: </span> {{ $student->name }}</h1>
        <h1><span class="text-bold">Student Name: </span> {{ $student->age }}</h1>
   @endforeach
</div>
@endsection

