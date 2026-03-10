@extends('layouts.index')
@section('content')
    <div class="min-h-screen bg-gray-100 py-10">

        <div class="max-w-2xl mx-auto space-y-8">

            <!-- Create Post -->
            <div class="bg-white shadow-md rounded-xl p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                    Create Post
                </h2>

                <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <input type="text" name="post_owner" placeholder="Your name"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div>
                        <input type="text" name="post_title" placeholder="Post title"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div>
                        <textarea name="post_description" rows="3" placeholder="What's on your mind?"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none" required></textarea>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Post
                    </button>
                </form>
            </div>

            <!-- Feed -->
            <div class="space-y-6">

                @foreach ($posts as $post)
                    <div class="bg-white rounded-xl shadow-md p-5">

                        <!-- Header -->
                        <div class="flex items-center justify-between mb-3">

                            <div class="flex items-center space-x-3">

                                <!-- Avatar -->
                                <div
                                    class="w-10 h-10 rounded-full bg-blue-500 flex items-center justify-center text-white font-bold">
                                    {{ strtoupper(substr($post->post_owner, 0, 1)) }}
                                </div>

                                <div>
                                    <p class="font-semibold text-gray-800">
                                        {{ $post->post_owner }}
                                    </p>
                                    <p class="text-xs text-gray-500">
                                        {{ $post->created_at->diffForHumans() }}
                                    </p>
                                </div>

                            </div>

                        </div>

                        <!-- Post Title -->
                        <h3 class="font-semibold text-lg text-gray-800 mb-2">
                            {{ $post->post_title }}
                        </h3>

                        <!-- Post Content -->
                        <p class="text-gray-600 mb-4">
                            {{ $post->post_description }}
                        </p>

                        <!-- Actions -->
                        <div class="flex justify-between text-gray-500 border-t pt-3">

                            <button class="hover:text-blue-600">
                                👍 Like
                            </button>

                            <button class="hover:text-blue-600">
                                💬 Comment
                            </button>

                            <button class="hover:text-blue-600">
                                🔗 Share
                            </button>

                        </div>

                        {{-- comment Section --}}

                        <div class="w-full border p-2 rounded-md border-gray-500">

                            @forelse ($post->comments as $comment)
                                <div class="px-2 py-1.5 border border-blue-300 rounded-md mb-2 ">
                                {{ $comment->comment_content }}</div> @empty
                                <div>No comments yet ..</div>
                            @endforelse


                            <form action="{{ route('comments.store') }}" method="POST">
                                @csrf
                                <input type="text" name="post_id" value="{{ $post->id }}" hidden>
                                <textarea name="comment_content" id="" cols="80" placeholder="Enter your comment"
                                    class="p-2 border border-gray-300" required></textarea>
                                <button type="submit"
                                    class="bg-blue-400 rounded-md px-2 py-1.5 text-white">AddComment</button>
                            </form>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>

    </div>
@endsection
