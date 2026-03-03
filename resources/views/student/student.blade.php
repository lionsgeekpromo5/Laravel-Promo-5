@extends('layouts.index')

@section('content')

        <div class="mx-14 mt-10 border-2 border-blue-400 rounded-lg">
  <div class="mt-10 text-center font-bold">Students Form</div>
  <div class="mt-3 text-center text-4xl font-bold">Enter your informations</div>
  {{-- form --}}
  <form action="/students/store" method="Post" class="p-8">
    @csrf
    <div class="flex gap-4">
      <input type="text" name="name" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Full Name *" required/>
      <input type="email" name="email" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Email *" required/>
    </div>
      <div class="flex gap-4">
      <input type="phone" name="phone" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="+212 611223344" required/>
      <input type="number" name="age" min="18" max="30" class="mt-1 block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 placeholder-slate-400 shadow-sm placeholder:font-semibold placeholder:text-gray-500 focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm" placeholder="Enter Your Age" required/>
    </div>

    <div class="my-6 flex gap-4">
      <select name="class" id="select" class="block w-1/2 rounded-md border border-slate-300 bg-white px-3 py-4 font-semibold text-gray-500 shadow-sm focus:border-sky-500 focus:outline-none focus:ring-1 focus:ring-sky-500 sm:text-sm">
        <option  class="font-semibold text-slate-300" disabled selected>Please Select Your Class</option>
        <option  class="font-semibold text-slate-300" value='coding'>Coding</option>
        <option  class="font-semibold text-slate-300" value='media'>Media</option>
      </select>
    </div>
    <div class="text-center">
      <button type="submit" class="cursor-pointer rounded-lg bg-blue-700 px-8 py-5 text-sm font-semibold text-white">Submit Form</button>
    </div>
  </form>
</div>

@endsection