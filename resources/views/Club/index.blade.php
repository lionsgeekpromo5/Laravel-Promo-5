@extends('layouts.index')

@section('content')
    <div class="min-h-screen bg-gray-100 py-10">

        <div class="p-2 flex flex-col gap-y-4">

            <!-- Create Club-->
            <div class="bg-white shadow-md rounded-xl p-6">
                <h2 class="text-xl font-bold text-gray-800 mb-4">
                    Create Club
                </h2>

                <form action="{{ route('clubs.store') }}" method="POST" class="flex gap-x-2">
                    @csrf
                    <div>
                        <input type="text" name="club_name" placeholder="Enter Club Name"
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>

                    <div>
                        <input type="text" name="club_address" placeholder="Club Address "
                            class="w-full border rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:outline-none"
                            required>
                    </div>

                    <button type="submit" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                        Add Club
                    </button>
                </form>
            </div>

            {{-- Clubs List --}}


                <table class="min-w-full bg-white rounded-md ">
                    <thead class="border-b">
                        <tr>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">#</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Club Name</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Club Address</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Total Subscribers</th>
                            <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clubs as $club)
                        <tr class="border-b">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $club->id }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $club->club_name }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $club->club_address }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">{{ $club->subscribers->count() }}</td>
                            <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('subsciber.create' , $club->id) }}">
                                    <button class="px-2 py-1 rounded-md bg-blue-300 text-white font-bold">Join</button>

                                </a>
                            </td>
                        </tr>                        @endforeach

                    
                    </tbody>
                </table>

        </div>
    </div>
</div>

        

        </div>

    </div>
@endsection