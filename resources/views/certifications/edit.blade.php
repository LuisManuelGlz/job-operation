@extends('layouts.app')

@section('title') Update certification @endsection

@section('content')

<h2 class="font-bold text-5xl text-blue-400 mb-10">Update certification</h2>

<form class="w-1/2" action="{{ route('certifications.update', $certification) }}" method="post">
  @method('put')
  @csrf()

  <div class="mt-5">
    <label class="block text-2xl" for="name">Name</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="name"
      type="text"
      placeholder="Enter your certification name"
      value="{{ $certification->name }}">
    <span class="text-red-400">
      @error('name') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="issuing_company">Issuing company</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="issuing_company"
      type="text"
      placeholder="eg. Udemy"
      value="{{ $certification->issuing_company }}">
    <span class="text-red-400">
      @error('issuing_company') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="month_of_issue">Month of issue</label>
    <input
      class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="month_of_issue"
      type="month"
      min="1900-01"
      max="2100-12"
      placeholder="Enter month of issue"
      value="{{ $certification->month_of_issue }}">
    <span class="text-red-400">
      @error('month_of_issue') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <input
      id="has_an_expiration_date"
      type="checkbox"
      name="has_an_expiration_date"
      value="{{ $certification->has_an_expiration_date }}"
      autocomplete="off"
      checked>
    <label class="text-lg" for="has_an_expiration_date">Has an expiration date</label>
  </div>

  <div id="expiration_date_group" class="mt-5">
    <label class="block text-2xl" for="expiration_date">Expiration date</label>
    <input
      class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="expiration_date"
      type="month"
      min="1900-01"
      max="2100-12"
      placeholder="Enter month of issue"
      value="{{ $certification->expiration_date }}">
    <span class="text-red-400">
      @error('expiration_date') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="credential_id">Credential ID</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="credential_id"
      type="text"
      placeholder="Enter your credential ID"
      value="{{ $certification->credential_id }}">
    <span class="text-red-400">
      @error('credential_id') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-5">
    <label class="block text-2xl" for="url">Credential URL</label>
    <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border"
      name="url"
      type="url"
      placeholder="Enter your credential URL"
      value="{{ $certification->url }}">
    <span class="text-red-400">
      @error('url') {{ $message }} @enderror
    </span>
  </div>

  <div class="mt-10">
    <button class="w-full mb-5 px-6 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600" type="submit">
      Update
    </button>
  </div>
</form>

<script
  src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
  integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
  crossorigin="anonymous"></script>
<script>
  function showExpirationDateGroup() {
    if (this.checked) {
      $('#expiration_date_group').removeClass('hidden');
    } else {
      $('#expiration_date_group').addClass('hidden');
    }
  }

  $('#has_an_expiration_date').click(showExpirationDateGroup);
</script>

@endsection

