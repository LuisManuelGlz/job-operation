@extends('layouts.app')

@section('content')

<div class="flex gap-5 mt-5">
  <div class="w-2/5">
    <h2 class="font-bold text-5xl text-blue-400 mb-10">Sign Up</h2>

    <form action="{{ route('register') }}" method="post">
      @csrf()

      <div>
        <label class="block text-2xl" for="name">
          Name
          <span class="text-red-400">*</span>
        </label>
        <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="name" type="text" placeholder="Enter your full name" value="{{ old('name') }}">
        <span class="text-red-400">
          @error('name') {{ $message }} @enderror
        </span>
      </div>
      <div class="mt-5">
        <label class="block text-2xl" for="email">
          Email
          <span class="text-red-400">*</span>
        </label>
        <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="email" type="email" placeholder="Enter your email" value="{{ old('email') }}">
        <span class="text-red-400">
          @error('email') {{ $message }} @enderror
        </span>
      </div>
      <div class="mt-5">
        <label class="block text-2xl" for="password">
          Password
          <span class="text-red-400">*</span>
        </label>
        <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="password" type="password" placeholder="Enter your password">
        <span class="text-red-400">
          @error('password') {{ $message }} @enderror
        </span>
      </div>
      <div class="mt-10">
        <button class="w-full mb-5 px-6 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600" type="submit">
          Sign Up
        </button>
        <a class="hover:text-blue-300 text-blue-400 text-lg" href="{{ route('login') }}">
          I already have an account
        </a>
      </div>
    </form>
  </div>
  <div class="w-3/5">
    <img src="{{ url('/images/organize-resume.svg') }}" alt="Organize your resume">
  </div>
</div>

@endsection
