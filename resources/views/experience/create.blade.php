@extends('layouts.app')

@section('title') Create experience @endsection

@section('content')

<h2 class="font-bold text-5xl text-blue-400 mb-10">Create experience</h2>

<form class="w-1/2" action="{{ route('experience.store') }}" method="post">
  @csrf()

  <div class="mt-5">
    <label class="block text-2xl" for="position">Position</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="position"
      type="text"
      placeholder="Enter your position"
      value="{{ old('position') }}">
    <span class="text-red-400">
      @error('position') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <input
      id="current_job"
      type="checkbox"
      name="current_job"
      value="{{ old('current_job') }}"
      autocomplete="off">
    <label class="text-lg" for="current_job">Current job</label>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="company">Company</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="company"
      type="text"
      placeholder="Enter your company name"
      value="{{ old('company') }}">
    <span class="text-red-400">
      @error('company') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="description">Description</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="description"
      type="text"
      placeholder="Enter your company description"
      value="{{ old('description') }}">
    <span class="text-red-400">
      @error('description') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="location">Location</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="location"
      type="text"
      placeholder="Enter your company location"
      value="{{ old('location') }}">
    <span class="text-red-400">
      @error('location') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="from_date">From date</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="from_date"
      type="date"
      placeholder="Enter starting year"
      value="{{ old('from_date') }}">
    <span class="text-red-400">
      @error('from_date') {{ $message }} @enderror
    </span>
  </div>

  <div id="to_date_group" class="mt-5">
    <label class="block text-2xl" for="to_date">To date</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      id="to_date"
      name="to_date"
      type="date"
      placeholder="Enter ending year"
      value="{{ old('to_date') }}">
    <span class="text-red-400">
      @error('to_date') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-10">
    <button class="w-full mb-5 px-6 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600" type="submit">
      Create
    </button>
  </div>
</form>

<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
<script>
  function showCurrentJobGroup() {
    if (this.checked) {
      $('#to_date_group').attr("hidden", true);
    } else {
      $('#to_date_group').removeAttr("hidden");
    }
  }

  $('#current_job').click(showCurrentJobGroup);
</script>
@endsection

