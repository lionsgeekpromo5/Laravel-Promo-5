@extends('layouts.index')

@section('content')
    <div class="grid grid-cols-[35%_1fr] p-10 gap-x-10 ">
        @include('Contact.partials.form')
        {{-- @include('Contact.partials.map') --}}
        @include('Contact.email_list')
    </div>


@endsection
