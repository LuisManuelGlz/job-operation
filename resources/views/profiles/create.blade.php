@extends('layouts.app')

@section('title') Create profile @endsection

@section('content')

<h2 class="font-bold text-5xl text-blue-400 mb-10">Create your profile</h2>

<form class="w-1/2" action="{{ route('profiles.store') }}" method="post">
  @csrf()

  <div>
    <label class="block text-2xl" for="position">
      Current position
      <span class="text-red-400">*</span>
    </label>
    <select class="w-full focus:outline-none focus:ring focus:border-blue-300 bg-white rounded-full px-4 py-2 border" name="position">
      <option value="" disabled selected hidden>Select your current position</option>
      <option value='Junior Developer'>Junior Developer</option>
      <option value='Mid Developer'>Mid Developer</option>
      <option value='Senior Developer'>Senior Developer</option>
      <option value='Manager'>Manager</option>
      <option value='Student'>Student</option>
      <option value='Instructor'>Instructor</option>
      <option value='Intern'>Intern</option>
      <option value='Other'>Other</option>
    </select>
    <span class="text-red-400">
      @error('position') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="bio">Bio</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="bio" type="text" placeholder="Enter your bio" value="{{ old('bio') }}">
    <span class="text-red-400">
      @error('bio') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="location">Location</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="location" type="text" placeholder="eg. San Diego, CA" value="{{ old('location') }}">
    <span class="text-red-400">
      @error('location') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="company">Company</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="company" type="text" placeholder="Enter your company name" value="{{ old('company') }}">
    <span class="text-red-400">
      @error('company') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="skills">Skills</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="skills" type="text" placeholder="eg. HTML,CSS,PHP,ReactJS,Vue.js" value="{{ old('skills') }}">
    <span class="text-red-400">
      @error('skills') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-5">
    <label class="block text-2xl" for="website">Website</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="website" type="url" placeholder="eg. https://example.com" value="{{ old('website') }}">
    <span class="text-red-400">
      @error('website') {{ $message }} @enderror
    </span>
  </div>
  <div class="mt-10">
    <button class="w-full mb-5 px-6 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600" type="submit">
      Finish
    </button>
  </div>
</form>

@endsection
