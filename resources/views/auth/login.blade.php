@extends('layouts.app')

@section('content')

<div class="flex flex-col items-center mt-5">
  <h2 class="font-bold text-5xl text-blue-400 mb-10">Welcome</h2>

  <form class="w-full md:w-4/5 lg:w-1/2" action="{{ route('login') }}" method="post">
    @csrf()

    <div class="mt-5">
      <label class="block text-2xl" for="email">
        Email
      </label>
      <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="email" type="email" placeholder="Enter your email" value="{{ old('email') }}">
      <span class="text-red-400">
        @error('email') {{ $message }} @enderror
      </span>
    </div>
    <div class="mt-5">
      <label class="block text-2xl" for="password">
        Password
      </label>
      <input class="w-full focus:outline-none focus:ring focus:border-blue-300 rounded-full px-4 py-2 border" name="password" type="password" placeholder="Enter your password">
      <span class="text-red-400">
        @error('password') {{ $message }} @enderror
      </span>
    </div>
    <div class="mt-10">
      <button class="w-full mb-5 px-6 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600" type="submit">
        Login
      </button>
      <a class="hover:text-blue-300 text-blue-400 text-lg" href="{{ route('register') }}">
        I don't have an account
      </a>
    </div>
  </form>
</div>

@endsection