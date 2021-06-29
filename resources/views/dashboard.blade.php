@extends('layouts.app')

@section('title') Dashboard @endsection

@section('content')

<h2 class="font-bold text-5xl text-blue-400 mb-10">Dashboard</h2>

<section class="w-1/4 mt-5">
  <div class="flex items-center justify-between">
    <h3 class="text-4xl">Education</h3>
    <a href="{{ route('education.create') }}">
      <img src="{{ url('/images/plus.svg') }}" alt="Plus" width="20">
    </a>
  </div>

  {{ $profile->education }}
</section>

<section class="w-1/4 mt-5">
  <div class="flex items-center justify-between">
    <h3 class="text-4xl">Certifications</h3>
    <a href="{{ route('certifications.create') }}">
      <img src="{{ url('/images/plus.svg') }}" alt="Plus" width="20">
    </a>
  </div>

  something
</section>

<section class="w-1/4 mt-5">
  <div class="flex items-center justify-between">
    <h3 class="text-4xl">Experience</h3>
    <a href="{{ route('experience.create') }}">
      <img src="{{ url('/images/plus.svg') }}" alt="Plus" width="20">
    </a>
  </div>

  something
</section>

@endsection
