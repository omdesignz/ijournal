@extends('layouts.front')

@section('content')
<div class="relative bg-white overflow-hidden">
  <div class="max-w-7xl mx-auto">
    <div class="relative z-10 pb-8 bg-white sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
      <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
        <polygon points="50,0 100,0 50,100 0,100" />
      </svg>

      <div>
        <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
          
        </div>
      </div>

      <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">Editorial</span>
            <span class="block text-isptec xl:inline">Board</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('edboard.jpeg') }}" alt="">
  </div>
</div>

<div class="bg-white">
  <div class="mx-auto py-12 px-4 max-w-7xl sm:px-6 lg:px-8 lg:py-24">
    <div class="grid grid-cols-1 gap-12 lg:grid-cols-3 lg:gap-8">
      <div class="space-y-5 sm:space-y-4">
        <h2 class="text-3xl font-extrabold tracking-tight sm:text-4xl">Meet our editorial board</h2>
        <p class="text-xl text-gray-500">The Infinity Journal editiorial board is composed by the following members</p>
      </div>
      <div class="lg:col-span-2">
        <ul role="list" class="space-y-12 sm:grid sm:grid-cols-2 sm:gap-12 sm:space-y-0 lg:gap-x-8">
          <li>
            <div class="flex items-center space-x-4 lg:space-x-6">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> -->
              <!-- <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="{{ asset('/lecturers/carlos_lopes.jpg') }}" alt=""> -->
              <div class="font-medium text-lg leading-6 space-y-1">
                <h3>Prof. António André Chivanga Barros, PhD in Chemical Engineering (ISPTEC)</h3>
                <p class="text-gray-600">Editor-in-Chief</p>
              </div>
            </div>
          </li>

          <li>
            <div class="flex items-center space-x-4 lg:space-x-6">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> -->
              <!-- <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="{{ asset('/lecturers/carlos_lopes.jpg') }}" alt=""> -->
              <div class="font-medium text-lg leading-6 space-y-1">
                <h3>Prof. Benevides Pessela, PhD in Biotechnology  (ISPTEC)</h3>
                <p class="text-gray-600">Editor</p>
              </div>
            </div>
          </li>
          
          <li>
            <div class="flex items-center space-x-4 lg:space-x-6">
            <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 rounded-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg> -->
              <!-- <img class="w-16 h-16 rounded-full lg:w-20 lg:h-20" src="{{ asset('/lecturers/carlos_lopes.jpg') }}" alt=""> -->
              <div class="font-medium text-lg leading-6 space-y-1">
                <h3>Prof. Carlos Lopes, PhD XXXX (ISPTEC)</h3>
                <p class="text-gray-600">Editor</p>
              </div>
            </div>
          </li>

          <!-- More people... -->
        </ul>
      </div>
    </div>
  </div>
</div>
@endsection