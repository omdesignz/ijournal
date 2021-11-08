@extends('layouts.front')

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="relative bg-gray-50 pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
  <div class="absolute inset-0">
    <div class="bg-white h-1/3 sm:h-2/3"></div>
  </div>
  <div class="relative max-w-7xl mx-auto">
    <div class="text-center">
      <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
        Announcements
      </h2>
      <p class="mt-3 max-w-2xl mx-auto text-xl text-gray-500 sm:mt-4">
        Stay in the loop and never miss any of our call for papers (CFP).
      </p>
    </div>
    <div class="mt-12 max-w-lg mx-auto grid gap-5 lg:grid-cols-3 lg:max-w-none">
    @forelse ($announcements as $announcement)
    <div class="flex flex-col rounded-lg shadow-lg overflow-hidden">
        <div class="flex-shrink-0">
          <img class="h-48 w-full object-cover" src="{{ $announcement->cover }}" alt="">
        </div>
        <div class="flex-1 bg-white p-6 flex flex-col justify-between">
          <div class="flex-1">
            <p class="text-sm font-medium text-indigo-600">
              <a href="#" class="hover:underline">
                
              </a>
            </p>
            <a href="/announce/{{ $announcement->id }}" class="block mt-2">
              <p class="text-xl font-semibold text-gray-900">
                {{ $announcement->title }}
              </p>
              <p class="mt-3 text-base text-gray-500">
                {{ Str::limit($announcement->description, 60) }}
              </p>
            </a>
          </div>
          <div class="mt-6 flex items-center">
            <div class="flex-shrink-0">
              <a href="#">
                <span class="sr-only">{{ $announcement->user->first_name }} {{ $announcement->user->last_name }}</span>
                <img class="h-10 w-10 rounded-full" src="{{ $announcement->user->avatar }}" alt="">
              </a>
            </div>
            <div class="ml-3">
              <p class="text-sm font-medium text-gray-900">
                <a href="#" class="hover:underline">
                {{ $announcement->user->first_name }} {{ $announcement->user->last_name }}
                </a>
              </p>
              <div class="flex space-x-1 text-sm text-gray-500">
                <time datetime="2020-03-16">
                  {{ $announcement->published_at }}
                </time>
              </div>
            </div>
          </div>
        </div>
      </div>
    @empty
    <p></p>
    
    <!-- This example requires Tailwind CSS v2.0+ -->
    <!-- <div class="text-center">
      <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path vector-effect="non-scaling-stroke" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m-3-3v6m-9 1V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
      </svg>
      <h3 class="mt-2 text-sm font-medium text-gray-900">No announcements found!</h3>
      <p class="mt-1 text-sm text-gray-500">
        Get started by submitting one today.
      </p>
      <div class="mt-6">
        <a href="/announcements/create" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
          
          <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
          </svg>
          Submit
    </a>
      </div>
    </div> -->


@endforelse
      
    
    </div> <br>
    {{ $announcements->links() }}
  </div>
</div>


@endsection