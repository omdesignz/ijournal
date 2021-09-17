<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Document</title>

  <!-- Styles -->
<link rel="stylesheet" href="{{ asset('css/app.css') }}">

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
<script defer src="{{ asset('js/alpine.js') }}"></script>
</head>
<body>
  <!-- This example requires Tailwind CSS v2.0+ -->
<div x-data="{ isOpen: false }" @keydown.window.escape="isOpen = false" class="h-screen flex overflow-hidden bg-white">
  <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
  <div x-show="isOpen" class="fixed inset-0 flex z-40 md:hidden" role="dialog" aria-modal="true" x-transition:enter="transition-opacity ease-linear duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="transition-opacity ease-linear duration-300"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0">
    <!--
      Off-canvas menu overlay, show/hide based on off-canvas menu state.

      Entering: "transition-opacity ease-linear duration-300"
        From: "opacity-0"
        To: "opacity-100"
      Leaving: "transition-opacity ease-linear duration-300"
        From: "opacity-100"
        To: "opacity-0"
    -->
    <div class="fixed inset-0 bg-gray-600 bg-opacity-75" aria-hidden="true"></div>

    <!--
      Off-canvas menu, show/hide based on off-canvas menu state.

      Entering: "transition ease-in-out duration-300 transform"
        From: "-translate-x-full"
        To: "translate-x-0"
      Leaving: "transition ease-in-out duration-300 transform"
        From: "translate-x-0"
        To: "-translate-x-full"
    -->
    <div class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">
      <!--
        Close button, show/hide based on off-canvas menu state.

        Entering: "ease-in-out duration-300"
          From: "opacity-0"
          To: "opacity-100"
        Leaving: "ease-in-out duration-300"
          From: "opacity-100"
          To: "opacity-0"
      -->
      <div class="absolute top-0 right-0 -mr-12 pt-2">
        <button type="button" @click="isOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
          <span class="sr-only">Close sidebar</span>
          <!-- Heroicon name: outline/x -->
          <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>

      <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
        <div class="flex-shrink-0 flex items-center px-4">
          <img class="h-8 w-auto" src="/infinity_bg_dark.svg" alt="ijournal">
        </div>
        <nav class="mt-5 px-2 space-y-1">
          <!-- Current: "bg-isptec text-white", Default: "text-white hover:bg-isptec" -->
          <a href="/dashboard" class="{{ request()->is('dashboard*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/home -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
            Dashboard
          </a>

          <a href="/users" class="{{ request()->is('users*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/users -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
            Users
          </a>

          <a href="/submissions" class="{{ request()->is('submissions*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/folder -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
            </svg>
            Submissions
          </a>

          <a href="/announcements" class="{{ request()->is('announcements') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/announcements -->
            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
            Announcements
          </a>

          <a href="reviews" class="{{ request()->is('reviews*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/inbox -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            Peer Review
          </a>

          <a href="/" class="text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/chart-bar -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
            Website
          </a>

          <a href="/roles" class="{{ request()->is('roles*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md">
            <!-- Heroicon name: outline/chart-bar -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
            </svg>
            Roles
          </a>

          <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="text-white hover:bg-isptec group flex items-center px-2 py-2 text-base font-medium rounded-md" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            <!-- Heroicon name: outline/chart-bar -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            Logout
            </a>
            </form>
        </nav>
      </div>
      <div class="flex-shrink-0 flex border-t border-isptec p-4">
        <a href="#" class="flex-shrink-0 group block">
          <div class="flex items-center">
            <div>
              <img class="inline-block h-10 w-10 rounded-full" src="{{ auth()->user()->getFirstMediaUrl('avatar') }}" alt="">
            </div>
            <div class="ml-3">
              <p class="text-base font-medium text-white">
              {{ auth()->user()->username }}
              </p>
              <p class="text-sm font-medium text-white group-hover:text-white">
                #
              </p>
            </div>
          </div>
        </a>
      </div>
    </div>

    <div class="flex-shrink-0 w-14" aria-hidden="true">
      <!-- Force sidebar to shrink to fit close icon -->
    </div>
  </div>

  <!-- Static sidebar for desktop -->
  <div class="hidden bg-gray-800 md:flex md:flex-shrink-0">
    <div class="flex flex-col w-64">
      <!-- Sidebar component, swap this element with another sidebar if you like -->
      <div class="flex-1 flex flex-col min-h-0">
        <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
          <div class="flex items-center flex-shrink-0 px-4">
            <img class="h-8 w-auto" src="/infinity_bg_dark.svg" alt="ijournal">
          </div>
          <nav class="mt-5 flex-1 px-2 space-y-1">
            <!-- Current: "bg-isptec text-white", Default: "text-white hover:bg-isptec" -->
            <a href="/dashboard" class="{{ request()->is('dashboard*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/home -->
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
              </svg>
              Dashboard
            </a>

            <a href="/users" class="{{ request()->is('users*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/users -->
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
              Users
            </a>

            <a href="/submissions" class="{{ request()->is('submissions*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/folder -->
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z" />
              </svg>
              Submissions
            </a>

            <a href="/announcements" class="{{ request()->is('announcements*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/announcements -->
              <svg class="mr-3 flex-shrink-0 h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
              </svg>
              Announcements
            </a>

            <a href="/reviews" class="{{ request()->is('reviews*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
            <!-- Heroicon name: outline/inbox -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
            </svg>
            Peer Review
            </a>

            <a href="/" class="text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
            </svg>
              Website
            </a>

            <a href="/roles" class="{{ request()->is('roles*') ? 'bg-isptec' : '' }} text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md">
              <!-- Heroicon name: outline/chart-bar -->
              <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
              Roles
            </a>

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <a href="{{ route('logout') }}" class="text-white hover:bg-isptec group flex items-center px-2 py-2 text-sm font-medium rounded-md" onclick="event.preventDefault();
                                        this.closest('form').submit();">
            <!-- Heroicon name: outline/chart-bar -->
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-4 flex-shrink-0 h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
            </svg>
            Logout
            </a>
            </form>

            
          </nav>
        </div>
        <div class="flex-shrink-0 flex border-t border-isptec p-4">
          <a href="#" class="flex-shrink-0 w-full group block">
            <div class="flex items-center">
              <div>
                <img class="inline-block h-9 w-9 rounded-full" src="{{ auth()->user()->getFirstMediaUrl('avatar') }}" alt="">
              </div>
              <div class="ml-3">
                <p class="text-sm font-medium text-white">
                  {{ auth()->user()->username }}
                </p>
                <p class="text-xs font-medium text-white group-hover:text-white">
                  #
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="flex flex-col w-0 flex-1 overflow-hidden">
    <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
      <button type="button" @click="isOpen = true" class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
        <span class="sr-only">Open sidebar</span>
        <!-- Heroicon name: outline/menu -->
        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    <main class="flex-1 relative z-0 overflow-y-auto focus:outline-none">
      <div class="py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <h1 class="text-2xl font-semibold text-gray-900">
            @yield('title')
          </h1>
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 md:px-8">
          <!-- Replace with your content -->
          <div class="py-4">
          @yield('content')
          </div>
          <!-- /End replace -->
        </div>
      </div>
      
    </main>
  </div>
</div>
</body>
</html>
