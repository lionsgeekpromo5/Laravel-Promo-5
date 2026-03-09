@extends('layouts.index')
@section('content')
<div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
       Update Gallery
    </div>
    <form class="py-4 px-6" action="{{ route('gallery.update', $gallery->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Name
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" name="photographer" value="{{ old('photographer', $gallery->photographer) }}" type="text" placeholder="Enter photographer name">

        </div>

        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Category
            </label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="service" name="category">
                <option selected disabled>Select a category</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->name }}" @selected($category->name == $gallery->category)>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2">
                image
            </label>
            <img src="{{ asset('storage/' . $gallery->image) }}" alt="" width="100" height='100' class="mb-2">
            <input 
            name="image"
            type="file"
            accept="image/*"
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                 />
        </div>
        <div class="flex items-center justify-center mb-4">
            <button
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit">
                Update Gallery
            </button>
        </div>

    </form>
</div>
@endsection