<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@yield('page_title')</title>

        <!-- Fonts -->
        <!-- <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap"> -->
        <!-- Fonts -->
        <link rel="stylesheet" href="{{ asset('css/inter.css') }}">
        <link rel="stylesheet" href="{{ asset('css/swiper-bundle.min.css') }}">
        @yield('header_css')

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <script defer src="{{ asset('js/alpine.js') }}"></script>

        @yield('header_scripts')
    </head>
<body class="font-sans antialiased">
<div class="bg-white">
  <header>
    <div class="relative bg-white" x-data="{ isOpen: false }">
      <div class="flex justify-between items-center max-w-7xl mx-auto px-4 py-6 sm:px-6 md:justify-start md:space-x-10 lg:px-8">
        <div class="flex justify-start lg:w-0 lg:flex-1">
          <a href="/">
            <span class="sr-only">Infinity</span>
            <img class="h-8 w-auto sm:h-10" src="/infinity_bg_light.svg" alt="">
          </a>
        </div>
        <div class="-mr-2 -my-2 md:hidden">
          <button type="button" @click="isOpen = !isOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
            <span class="sr-only">Open menu</span>
            <!-- Heroicon name: outline/menu -->
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>
        <nav class="hidden md:flex space-x-10">

          <a href="/about" class="text-base font-medium text-gray-500 hover:text-gray-900">
            About
          </a>

          <a href="/articles" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Articles
          </a>
          <a href="/submissions" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Submissions
          </a>
          <a href="/announce" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Announcements
          </a>
          <a href="/contact" class="text-base font-medium text-gray-500 hover:text-gray-900">
            Contact
          </a>
        </nav>
        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
          @guest
          <a href="/login" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
            Login
          </a>
          <a href="/register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gray-900 px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white hover:bg-isptec">
            Register
          </a>
          @endguest

          @auth
          <a href="/dashboard" class="ml-8 whitespace-nowrap inline-flex items-center justify-center bg-gray-900 px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white hover:bg-isptec">
            Dashboard
          </a>
          @endauth
        </div>
      </div>

      <!--
        Mobile menu, show/hide based on mobile menu state.

        Entering: "duration-200 ease-out"
          From: "opacity-0 scale-95"
          To: "opacity-100 scale-100"
        Leaving: "duration-100 ease-in"
          From: "opacity-100 scale-100"
          To: "opacity-0 scale-95"
      -->
      <div class="absolute z-30 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden" x-show="isOpen"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 translate-y-1"
            x-transition:enter-end="opacity-100 translate-y-0"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0"
            x-transition:leave-end="opacity-0 translate-y-1">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
          <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
                <img class="h-8 w-auto" src="infinity_bg_light.svg" alt="Infinity">
              </div>
              <div class="-mr-2">
                <button type="button" @click="isOpen = !isOpen" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid grid-cols-1 gap-7">
                <a href="/about" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  
                  <div class="ml-4 text-base font-medium text-gray-900">
                    About
                  </div>
                </a>

                <a href="/articles" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Articles
                  </div>
                </a>

                <a href="submissions" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Submissions
                  </div>
                </a>

                <a href="/announce" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Announcements
                  </div>
                </a>

                <a href="/contact" class="-m-3 p-3 flex items-center rounded-lg hover:bg-gray-50">
                  
                  <div class="ml-4 text-base font-medium text-gray-900">
                    Contact
                  </div>
                </a>
              </nav>
            </div>
          </div>
          <div class="py-6 px-5">
            
            <div class="mt-6">
              @guest
              <a href="/register" class="w-full flex items-center justify-center bg-gradient-to-r from-yellow-200 to-isptec bg-origin-border px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white hover:from-gray-700 hover:to-isptec-grey">
                Register
              </a>
              <p class="mt-6 text-center text-base font-medium text-gray-500">
                Existing member?
                <a href="/login" class="text-gray-900">
                  Login
                </a>
              </p>
              @endguest

              @auth
              <a href="/dashboard" class="w-full flex items-center justify-center bg-gradient-to-r from-yellow-200 to-isptec bg-origin-border px-4 py-2 border border-transparent rounded-full shadow-sm text-base font-medium text-white hover:from-gray-700 hover:to-isptec-grey">
                Dashboard
              </a>
              @endauth
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

    @yield('content')

  

  <footer class="bg-gray-800" aria-labelledby="footer-heading">
    <h2 id="footer-heading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto pt-16 pb-8 px-4 sm:px-6 lg:pt-24 lg:px-8">
      <div class="xl:grid xl:grid-cols-3 xl:gap-8">
        <div class="grid grid-cols-2 gap-8 xl:col-span-2">
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold text-white tracking-wider uppercase">
                IJOURNAL - INFINITY JOURNAL
              </h3>
              <ul class="mt-4 space-y-4">
              <li>
                  <a href="#" class="text-base text-gray-300 hover:text-isptec">
                  ISSN: XXXX-XXXX
                  </a>
                </li>
                <li>
                  <a href="https://www.isptec.co.ao" class="text-base text-gray-500 hover:text-gray-900" target="_blank">
                  <div class="flex-none md:w-24">
                    <img src="{{ asset('v_yellow_bg.svg') }}" alt="ISPTEC" class="rounded-lg">
                  </div>
                  </a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-sm font-semibold text-white tracking-wider uppercase">
                Information
              </h3>
              <ul class="mt-4 space-y-4">
              <li>
                  <a href="/about" class="text-base text-gray-300 hover:text-isptec">
                    About
                  </a>
                </li>
                <li>
                  <a href="/editorial-board" class="text-base text-gray-300 hover:text-isptec">
                    Editorial Board
                  </a>
                </li>
                <li>
                  <a href="/authorinfo" class="text-base text-gray-300 hover:text-isptec">
                    Author
                  </a>
                </li>
                <li>
                  <a href="readerinfo" class="text-base text-gray-300 hover:text-isptec">
                    Reader
                  </a>
                </li>
                <li>
                  <a href="/librarianinfo" class="text-base text-gray-300 hover:text-isptec">
                    Librarians
                  </a>
                </li>
                <li>
                  <a href="/subformat" class="text-base text-gray-300 hover:text-isptec">
                    Submission & Formating
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="md:grid md:grid-cols-2 md:gap-8">
            <div>
              <h3 class="text-sm font-semibold text-white tracking-wider uppercase">
                About
              </h3>
              <ul class="mt-4 space-y-4">
              <li>
                  <a href="/forauthors" class="text-base text-gray-300 hover:text-isptec">
                    For Authors
                  </a>
                </li>
              <li>
                  <a href="/subformat" class="text-base text-gray-300 hover:text-isptec">
                    Submission & Formating
                  </a>
                </li>
              </ul>
            </div>
            <div class="mt-12 md:mt-0">
              <h3 class="text-sm font-semibold text-white tracking-wider uppercase">
                Legal
              </h3>
              <ul class="mt-4 space-y-4">
                <li>
                  <a href="/privacy" class="text-base text-gray-300 hover:text-isptec">
                    Privacy
                  </a>
                </li>

                <li>
                  <a href="/policy" class="text-base text-gray-300 hover:text-isptec">
                    Copyright & Access
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
        <div class="mt-12 xl:mt-0">
          <h3 class="text-sm font-semibold text-white tracking-wider uppercase">
            Subscribe to our newsletter
          </h3>
          <p class="mt-4 text-base text-gray-300">
            The latest news, articles, and resources, sent to your inbox monthly.
          </p>
          <form class="mt-4 sm:flex sm:max-w-md">
            <label for="email-address" class="sr-only">Email address</label>
            <input type="email" name="email-address" id="email-address" autocomplete="email" required class="appearance-none min-w-0 w-full bg-white border border-gray-300 rounded-md shadow-sm py-2 px-4 text-base text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:placeholder-gray-400" placeholder="Enter your email">
            <div class="mt-3 rounded-md sm:mt-0 sm:ml-3 sm:flex-shrink-0">
              <button type="submit" class="w-full bg-gray-300 px-4 py-2 border border-transparent rounded-md flex items-center justify-center text-base font-medium text-white hover:bg-isptec sm:w-auto sm:inline-flex">
                Subscribe
              </button>
            </div>
          </form>
        </div>
      </div>
      <div class="mt-12 border-t border-white pt-8 md:flex md:items-center md:justify-between lg:mt-16">
        <div class="flex space-x-6 md:order-2">
          <a href="#" class="text-gray-300 hover:text-isptec">
            <span class="sr-only">Facebook</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-300 hover:text-isptec">
            <span class="sr-only">Instagram</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd" />
            </svg>
          </a>

          <a href="#" class="text-gray-300 hover:text-isptec">
            <span class="sr-only">Twitter</span>
            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
              <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
            </svg>
          </a>

        </div>
        <p class="mt-8 text-base text-gray-300 md:mt-0 md:order-1">
          &copy; {{ now()->format('Y') }} iJournal - Infinity Journal. All rights reserved.
        </p>
      </div>
    </div>
  </footer>
</div>

@yield('footer_scripts')

</body>
</html>