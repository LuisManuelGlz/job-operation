@extends('layouts.app')

@section('title') Dashboard @endsection

@section('content')

<h2 class="font-bold text-5xl text-blue-400 mb-10">Dashboard</h2>

<section class="w-1/2 mt-5">
  <div class="flex items-center justify-between">
    <div class="flex gap-3 items-center">
      <img src="{{ url('/images/school.svg') }}" alt="School" width="30">
      <h3 class="text-4xl">Education</h3>
    </div>
    <a class="hover:bg-blue-100 p-2 rounded-lg" href="{{ route('education.create') }}">
      <img src="{{ url('/images/plus.svg') }}" alt="Plus" width="20">
    </a>
  </div>

  @if (count($profile->education) > 0)
    <ul>
      @foreach ($profile->education as $education)
        <li class="my-2 p-5 bg-blue-100 rounded-lg">
          <div>
            <div class="flex justify-between">
              <div class="text-xl font-bold">{{ $education->school }}</div>
              <a class="hover:bg-blue-200 p-2 rounded-lg" href="{{ route('education.edit', $education) }}">
                <img src="{{ url('/images/edit.svg') }}" alt="Edit" width="20">
              </a>
            </div>
            <div>{{ $education->company }}</div>
            <div>{{ $education->degree }}</div>
            <div>
              {{ $education->starting_year }} - {{ $education->ending_year }}
            </div>
          </div>
        </li>
      @endforeach
    </ul>
  @else
    <p class="text-center text-xl p-5">No education yet</p>
  @endif
</section>

<section class="w-1/2 mt-10">
  <div class="flex items-center justify-between">
    <div class="flex gap-3 items-center">
      <img src="{{ url('/images/certificate.svg') }}" alt="Certificate" width="30">
      <h3 class="text-4xl">Certifications</h3>
    </div>
    <a class="hover:bg-blue-100 p-2 rounded-lg" href="{{ route('certifications.create') }}">
      <img src="{{ url('/images/plus.svg') }}" alt="Plus" width="20">
    </a>
  </div>

  @if (count($profile->certifications) > 0)
    <ul>
      @foreach ($profile->certifications as $certification)
        <li class="my-2 p-5 bg-blue-100 rounded-lg">
          <div>
            <div class="flex justify-between">
              <div class="text-xl font-bold">{{ $certification->name }}</div>
              <a class="hover:bg-blue-200 p-2 rounded-lg" href="{{ route('certifications.edit', $certification) }}">
                <img src="{{ url('/images/edit.svg') }}" alt="Edit" width="20">
              </a>
            </div>
            <div>{{ $certification->issuing_company }}</div>
            <div>
              Issued: {{ $certification->month_of_issue }} - 
              @if ($certification->expiration_date)
                {{ $certification->expiration_date }}
              @else
                No expiration date
              @endif
            </div>
            <a
              class="font-bold"
              href="{{ $certification->url }}"
              target="_blank"
              rel="noopener noreferrer">
              See credential
            </a>
          </div>
        </li>
      @endforeach
    </ul>
  @else
    <p class="text-center text-xl p-5">No certifications yet</p>
  @endif
</section>

<section class="w-1/2 mt-10">
  <div class="flex items-center justify-between">
    <div class="flex gap-3 items-center">
      <img src="{{ url('/images/portfolio.svg') }}" alt="Portfolio" width="30">
      <h3 class="text-4xl">Experience</h3>
    </div>
    <a class="hover:bg-blue-100 p-2 rounded-lg" href="{{ route('experience.create') }}">
      <img src="{{ url('/images/plus.svg') }}" alt="Plus" width="20">
    </a>
  </div>

  @if (count($profile->experience) > 0)
    <ul>
      @foreach ($profile->experience as $experience)
        <li class="my-2 p-5 bg-blue-100 rounded-lg">
          <div>
            <div class="flex justify-between">
              <div class="text-xl font-bold">{{ $experience->position }}</div>
              <a class="hover:bg-blue-200 p-2 rounded-lg" href="#">
                <img src="{{ url('/images/edit.svg') }}" alt="Edit" width="20">
              </a>
            </div>
            <div>{{ $experience->company }}</div>
            <div>{{ $experience->location }}</div>
            <div>
              {{ $experience->from_date }} - 
              @if ($experience->current_job)
                Current
              @else
                {{ $experience->to_date }}
              @endif
            </div>
            <p class="text-black">{{ $experience->description }}</p>
          </div>
        </li>
      @endforeach
    </ul>
  @else
    <p class="text-center text-xl p-5">No experience yet</p>
  @endif
</section>

@endsection
