@extends('layouts.index')

@section('content')
    <div class="p-10 h-screen">
        <div class="overflow-x-auto">
            <table class="w-full bg-white shadow-md rounded-lg border border-gray-200">
                <thead>
                    <tr class="border-b">
                        <th class="px-6 py-4 text-left text-gray-600 font-medium flex gap-x-2 items-center">Product Name <a
                                href="{{ route('products.create') }}"
                                class="px-2 py-1 rounded-md bg-blue-600 text-white">Create Product</a></th>
                        <th class="px-6 py-4 text-left text-gray-600 font-medium">Unit Price</th>
                        <th class="px-6 py-4 text-left text-gray-600 font-medium">Qty</th>
                        <th class="px-6 py-4 text-left text-gray-600 font-medium">Size</th>
                        <th class="px-6 py-4 text-left text-gray-600 font-medium">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="border-b">
                            <td class="px-6 py-4 flex items-center gap-4">
                                <img src="{{ asset('storage/' . $product->image) }}"
                                    alt="Product" class="w-12 h-12 rounded-md">
                                <div>
                                    <p class="text-gray-800 font-medium">{{ $product->name }}</p>
                                    <span class="text-green-500 text-sm">Id: {{ $product->id }}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4">{{ $product->price }}</td>
                            <td class="px-6 py-4">x{{ $product->stock }}</td>
                            <td class="px-6 py-4 font-semibold text-gray-900">{{ $product->size }}</td>
                            <td class="px-6 py-4 whitespace-nowrap flex gap-x-2 items-center">
                                <a href="{{ route('products.show', $product->id) }}" class="text-blue-700 underline ">View Details</a>
                                <a href="{{ route('products.edit', $product->id) }}">
                                     <button
                                    class="px-4 py-2 font-medium text-white bg-blue-600 rounded-md hover:bg-blue-500 focus:outline-none focus:shadow-outline-blue active:bg-blue-600 transition duration-150 ease-in-out">Edit</button>
                                </a>
                               
                                <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button
                                    class="ml-2 px-4 py-2 font-medium text-white bg-red-600 rounded-md hover:bg-red-500 focus:outline-none focus:shadow-outline-red active:bg-red-600 transition duration-150 ease-in-out">Delete</button>
                                </form>
                                    
                            </td>
                        </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
@endsection
