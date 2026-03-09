@extends('layouts.index')
@section('content')
    <!-- Photo Gallery Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-6">
            <div class="text-center mb-16">
                <span class="text-rose-600 font-semibold">OUR GALLERY</span>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mt-4">Captured Moments</h2>
                <p class="max-w-2xl mx-auto text-gray-600 mt-6 text-lg">A visual journey through our most memorable events
                    and projects</p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                <!-- Gallery Items-->
                @foreach ($galleries as $gallery)
                    <div class="group relative overflow-hidden rounded-lg aspect-square">
                        <img src="{{ asset('storage/' . $gallery->image) }}" alt="Concert crowd"
                            class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-500">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                            <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="text-white text-xl font-bold">{{ $gallery->photographer }}l</h3>
                                <p class="text-white/80 mt-1">{{ $gallery->category }}</p>
                                <form action="{{ route('gallery.destroy', $gallery->id) }}" method="POST">
                                  @csrf
                                  @method('DELETE')
                                    <button
                                        class="px-8 py-3 bg-rose-600 text-white font-medium rounded-lg hover:bg-rose-700 transition-colors shadow-lg">
                                        Delete
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                @endforeach


                <div class="text-center mt-16">
                    <button
                        class="px-8 py-3 bg-rose-600 text-white font-medium rounded-lg hover:bg-rose-700 transition-colors shadow-lg">
                        Load More Photos
                    </button>
                </div>
            </div>
    </section>
@endsection
