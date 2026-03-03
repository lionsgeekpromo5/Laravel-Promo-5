@extends('layouts.index')

@section('content')
    <div class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

  <div class="bg-white shadow-xl rounded-2xl w-full max-w-2xl p-8">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Registration Form</h2>

    <form action="/participanst/store" method="POST" class="space-y-6">
        @csrf
      <!-- Name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Name</label>
        <input required type="text" name="name"
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
               placeholder="Enter your name">
      </div>

      <!-- Age -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Age</label>
        <input required type="number" name="age" 
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
               placeholder="Enter your age" >
      </div>

      <!-- Email -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Email</label>
        <input required type="email" name="email"
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
               placeholder="Enter your email">
      </div>

      <!-- Phone -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
        <input required type="text"  name="phone"
               class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none"
               placeholder="Enter your phone number">
      </div>

      <!-- School (Checkboxes) -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">School</label>
        <div class="flex items-center gap-6">
          <label class="flex items-center gap-2">
            <input  type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" name="school[]" value="coding" >
            Coding
          </label>
          <laschool="flex items-center gap-2">
            <input type="checkbox" class="w-4 h-4 text-blue-600 border-gray-300 rounded focus:ring-blue-500" name="school[]" value="media">
            Media
          </laschool=>
        </div>
      </div>

      <!-- Gender (Radio) -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Gender</label>
        <div class="flex items-center gap-6">
          <label class="flex items-center gap-2">
            <input required type="radio" name="gender" value="male" class="w-4 h-4 text-blue-600 focus:ring-blue-500">
            Male
          </label>
          <label class="flex items-center gap-2">
            <input required type="radio" name="gender" value="female" class="w-4 h-4 text-blue-600 focus:ring-blue-500">
            Female
          </label>
        </div>
      </div>

      <!-- English Level (Range) -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">
          English Level (0–100)
        </label>
        <input required type="range" min="0" max="100" value="0" name="english_level" id="rangeInput"
               class="w-full accent-blue-600">
        <span id="rangeValue">0</span>%
      </div>

      <!-- Campus (Select) -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Campus</label>
        <select class="w-full px-4 py-2 border rounded-lg focus:ring-2 focus:ring-blue-500 focus:outline-none" required name="campus">
          <option value="casablanca">Casablanca</option>
          <option value="fes">Fes</option>
          <option value="tanger">Tanger</option>
        </select>
      </div>

      <!-- Terms (Radio Yes=1 No=0) -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Accept Terms</label>
        <div class="flex items-center gap-6">
          <label class="flex items-center gap-2">
            <input required type="radio" name="terms" value="1"
                   class="w-4 h-4 text-blue-600 focus:ring-blue-500">
            Yes
          </label>
          <label class="flex items-center gap-2">
            <input required type="radio" name="terms" value="0"
                   class="w-4 h-4 text-blue-600 focus:ring-blue-500">
            No
          </label>
        </div>
      </div>

      <!-- Submit -->
      <div>
        <button type="submit"
                class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 transition duration-200">
          Submit
        </button>
      </div>

    </form>
  </div>

</div>
@endsection