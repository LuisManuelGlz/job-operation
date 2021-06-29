@extends('layouts.app')

@section('title') Create education @endsection

@section('content')

<h2 class="font-bold text-5xl text-blue-400 mb-10">Create education</h2>

<form class="w-1/2" action="{{ route('education.store') }}" method="post">
  @csrf()

  <div class="mt-5">
    <label class="block text-2xl" for="school">School</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="school" type="text" placeholder="Enter your school" value="{{ old('school') }}">
    <span class="text-red-400">
      @error('school') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="degree">Degree</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="degree" type="text" placeholder="Enter your degree" value="{{ old('degree') }}">
    <span class="text-red-400">
      @error('degree') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="starting_year">Starting year</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="starting_year" type="number" min="1900" max="2100" placeholder="Enter starting year" value="{{ old('starting_year') }}">
    <span class="text-red-400">
      @error('starting_year') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="ending_year">Ending year</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="ending_year" type="number" min="1900" max="2100" placeholder="Enter ending year" value="{{ old('ending_year') }}">
    <span class="text-red-400">
      @error('ending_year') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-10">
    <button class="w-full mb-5 px-6 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600" type="submit">
      Create
    </button>
  </div>
</form>

@endsection