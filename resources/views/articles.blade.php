@extends('layouts.front')

@section('content')

<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pb-28 lg:px-8">
  <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
    <div>
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
        Recent articles
      </h2>
      <p class="mt-3 text-xl text-gray-500 sm:mt-4">
        Here are some articles that might get your creative juices flowing. Have a read!
      </p>
    </div>
    <div class="mt-12 grid gap-16 pt-12 lg:grid-cols-3 lg:gap-x-5 lg:gap-y-12">
      
    @forelse ($articles as $article)
<div>
        <div>
          <a href="#" class="inline-block">
            <span class="inline-flex items-center px-3 py-0.5 rounded-full text-sm font-medium bg-isptec text-gray-800">
              {{ $article->journal->name }}
            </span>
          </a>
        </div>
        <a href="/articles/{{ $article->id }}" class="block mt-4">
          <p class="text-xl font-semibold text-gray-900">
            {{ $article->title }}
          </p>
          <p class="mt-3 text-base text-gray-500">
            {{ $article->abstract }}
          </p>
        </a>
        <div class="mt-6 flex items-center">
          <div class="flex-shrink-0">
            <a href="#">
              <span class="sr-only">{{ $article->user->first_name }} {{ $article->user->last_name }}</span>
              <img class="h-10 w-10 rounded-full" src="{{ $article->user->avatar }}" alt="">
            </a>
          </div>
          <div class="ml-3">
            <p class="text-sm font-medium text-gray-900">
              <a href="#">
                {{ $article->user->first_name }} {{ $article->user->last_name }}
              </a>
            </p>
            <div class="flex space-x-1 text-sm text-gray-500">
              <time datetime="2020-03-16">
                {{ $article->created_at->format('d/m/Y') }}
              </time>
            </div>
          </div>
        </div>
      </div>
@empty
    
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="text-center">
  <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
    <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
  </svg>
  <h3 class="mt-2 text-sm font-medium text-gray-900">No articles found!</h3>
  <p class="mt-1 text-sm text-gray-500">
    Get started by submitting one today.
  </p>
  <div class="mt-6">
    <a href="/submissions" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      <!-- Heroicon name: solid/plus -->
      <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
      </svg>
      Submit
</a>
  </div>
</div>


@endforelse

    </div> <br>
    {{ $articles->links() }}
  </div>
</div>

@endsection