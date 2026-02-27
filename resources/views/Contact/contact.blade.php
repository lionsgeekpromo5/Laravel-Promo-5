@extends('layouts.index')

@section('content')
    <div class="grid grid-cols-[1fr_1fr] grid-rows-[20vw]">
        @include('Contact.partials.form')
        @include('Contact.partials.map')
    </div>
@endsection
