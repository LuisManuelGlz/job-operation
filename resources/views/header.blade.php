<nav class="flex justify-between items-center w-full text-blue-400 p-5 bg-white">
  <a href="{{ route('home') }}" class="flex items-center text-lg gap-2">
    <img src="{{ url('/images/logo-blue.png') }}" alt="Brand" width="50">
    Job Operation
  </a>
  <ul class="flex gap-3">
    @if (auth()->user())
      <li class="hover:text-blue-300">
        <a href="{{ route('profiles.index') }}">
          Dashboard
        </a>
      </li>
      <li class="hover:text-blue-300">
        <form action="{{ route('logout') }}" method="post">
          @csrf()
          <button type="submit">
            Logout
          </button>
        </form>
      </li>
    @else
      <li class="hover:text-blue-300">
        <a href="{{ route('login') }}">
          Log In
        </a>
      </li>
      <li>
        <a
          href="{{ route('register') }}"
          class="px-4 py-2 rounded-full text-white hover:text-blue-100 focus:text-blue-100 bg-gradient-to-r from-blue-400 to-blue-600">
          Get started
        </a>
      </li>
    @endif
  </ul>
</nav>
