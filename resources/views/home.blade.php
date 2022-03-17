@extends('layouts.front')

@section('content')
<!-- Hero section -->
<div class="relative">
      <div class="absolute inset-x-0 bottom-0 h-1/2 bg-gray-100"></div>
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="relative shadow-xl sm:rounded-2xl sm:overflow-hidden">
          <div class="absolute inset-0">
            <img class="h-full w-full object-cover" src="{{ asset('journal_cover.jpeg') }}" alt="People working on laptops">
            <div class="absolute inset-0 bg-gradient-to-r from-yellow-100 to-isptec mix-blend-multiply"></div>
          </div>
          <div class="relative px-4 py-16 sm:px-6 sm:py-24 lg:py-32 lg:px-8">
            <h1 class="text-center text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl">
              <span class="block text-white">Take control of your</span>
              <span class="block text-isptec">publications</span>
            </h1>
            <p class="mt-6 max-w-lg mx-auto text-center text-xl text-white sm:max-w-3xl">
              In Infinity Journal you have a platform to be heard. Submit your articles today! 
            </p>
            
          </div>
        </div>
      </div>
    </div>

    <!-- Logo Cloud For Indexed Platforms-->
    <!-- <div class="bg-gray-100">
      <div class="max-w-7xl mx-auto py-16 px-4 sm:px-6 lg:px-8">
        <p class="text-center text-sm font-semibold uppercase text-gray-500 tracking-wide">
          This journal is indexed on the most popular platforms.
        </p>
        <div class="mt-6 grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5">
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/tuple-logo-gray-400.svg" alt="Tuple">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/mirage-logo-gray-400.svg" alt="Mirage">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/statickit-logo-gray-400.svg" alt="StaticKit">
          </div>
          <div class="col-span-1 flex justify-center md:col-span-2 md:col-start-2 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/transistor-logo-gray-400.svg" alt="Transistor">
          </div>
          <div class="col-span-2 flex justify-center md:col-span-2 md:col-start-4 lg:col-span-1">
            <img class="h-12" src="https://tailwindui.com/img/logos/workcation-logo-gray-400.svg" alt="Workcation">
          </div>
        </div>
      </div>
    </div> -->

    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">

        <div class="bg-white pt-16 lg:py-24">
        <div class="pb-16 bg-isptec lg:pb-0 lg:z-10 lg:relative">
            <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                    <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                        <img class="object-cover lg:h-full lg:w-full" src="/Infinity_cover.png" alt="">
                    </div>
                    </div>
                </div>
                <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                    <blockquote>
                        <div>
                        <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <p class="mt-6 text-2xl font-medium text-gray-900">
                        Existem muitas hipóteses em ciência que estão erradas. Isso é perfeitamente aceitável, eles são a abertura para achar as que estão certas.
                        </p>
                        </div>
                        <footer class="mt-6">
                        <p class="text-base font-medium text-gray-900">Marcílio Santos</p>
                        <p class="text-base font-medium text-gray-700">Investigador em Física Quântica</p>
                        </footer>
                    </blockquote>
                    </div>
                </div>
                </div>
            </div>
        </div>

        </div>
        <div class="swiper-slide">

        <div class="bg-white pt-16 lg:py-24">
            <div class="pb-16 bg-gray-700 lg:pb-0 lg:z-10 lg:relative">
                <div class="lg:mx-auto lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-8">
                <div class="relative lg:-my-8">
                    <div aria-hidden="true" class="absolute inset-x-0 top-0 h-1/2 bg-white lg:hidden"></div>
                    <div class="mx-auto max-w-md px-4 sm:max-w-3xl sm:px-6 lg:p-0 lg:h-full">
                    <div class="aspect-w-10 aspect-h-6 rounded-xl shadow-xl overflow-hidden sm:aspect-w-16 sm:aspect-h-7 lg:aspect-none lg:h-full">
                        <img class="object-cover lg:h-full lg:w-full" src="/Infinity_dark.png" alt="">
                    </div>
                    </div>
                </div>
                <div class="mt-12 lg:m-0 lg:col-span-2 lg:pl-8">
                    <div class="mx-auto max-w-md px-4 sm:max-w-2xl sm:px-6 lg:px-0 lg:py-20 lg:max-w-none">
                    <blockquote>
                        <div>
                        <svg class="h-12 w-12 text-white opacity-25" fill="currentColor" viewBox="0 0 32 32" aria-hidden="true">
                            <path d="M9.352 4C4.456 7.456 1 13.12 1 19.36c0 5.088 3.072 8.064 6.624 8.064 3.36 0 5.856-2.688 5.856-5.856 0-3.168-2.208-5.472-5.088-5.472-.576 0-1.344.096-1.536.192.48-3.264 3.552-7.104 6.624-9.024L9.352 4zm16.512 0c-4.8 3.456-8.256 9.12-8.256 15.36 0 5.088 3.072 8.064 6.624 8.064 3.264 0 5.856-2.688 5.856-5.856 0-3.168-2.304-5.472-5.184-5.472-.576 0-1.248.096-1.44.192.48-3.264 3.456-7.104 6.528-9.024L25.864 4z" />
                        </svg>
                        <p class="mt-6 text-2xl font-medium text-white">
                        Existem muitas hipóteses em ciência que estão erradas. Isso é perfeitamente aceitável, eles são a abertura para achar as que estão certas.
                        </p>
                        </div>
                        <footer class="mt-6">
                        <p class="text-base font-medium text-white">Artur Miguel</p>
                        <p class="text-base font-medium text-indigo-100">Director Científico</p>
                        </footer>
                    </blockquote>
                    </div>
                </div>
                </div>
            </div>
        </div>

        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>

    <div class="bg-white pt-16 pb-20 px-4 sm:px-6 lg:pt-24 lg:pb-28 lg:px-8">
        <div class="relative max-w-lg mx-auto divide-y-2 divide-gray-200 lg:max-w-7xl">
            <div>
            <h2 class="text-3xl tracking-tight font-extrabold text-gray-900 sm:text-4xl">
                Latest Articles
            </h2>
            <div class="mt-3 sm:mt-4 lg:grid lg:grid-cols-2 lg:gap-5 lg:items-center">
                <p class="text-xl text-gray-500">
                Get our articles in your inbox.
                </p>
            </div>
            </div>
            <div class="mt-6 pt-10 grid gap-16 lg:grid-cols-2 lg:gap-x-5 lg:gap-y-12">
            @forelse ($articles as $article)
              <div>
                  <p class="text-sm text-gray-500">
                  <time datetime="2020-03-16">{{ $article->published_at }}</time>
                  </p>
                  <a href="#" class="mt-2 block">
                  <p class="text-xl font-semibold text-gray-900">
                      {{ $article->title }}
                  </p>
                  <p class="mt-3 text-base text-gray-500">
                  {{ Str::limit($article->abstract, 60) }}
                  </p>
                  </a>
                  <div class="mt-3">
                  <a href="/articles/{{ $article->id }}" class="text-base font-semibold text-gray-600 hover:text-isptec">
                      Read full article
                  </a>
              </div>
            </div>
            @empty
              No Articles Found!
            @endforelse

            </div>
            </div>
        </div>
    </div>

    <div class="bg-indigo-800">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:py-16 sm:px-6 lg:px-8 lg:py-20">
    <div class="max-w-4xl mx-auto text-center">
      <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
        Trusted by writers from across the globe
      </h2>
      <p class="mt-3 text-xl text-indigo-200 sm:mt-4">
        Our journal is a fan-favorite amongst writers of diverse titles.
      </p>
    </div>
    <dl class="mt-10 text-center sm:max-w-3xl sm:mx-auto sm:grid sm:grid-cols-3 sm:gap-8">
      <div class="flex flex-col">
        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
          Doctorates
        </dt>
        <dd class="order-1 text-5xl font-extrabold text-white">
          +4
        </dd>
      </div>
      <div class="flex flex-col mt-10 sm:mt-0">
        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
          Masters
        </dt>
        <dd class="order-1 text-5xl font-extrabold text-white">
          +10
        </dd>
      </div>
      <div class="flex flex-col mt-10 sm:mt-0">
        <dt class="order-2 mt-2 text-lg leading-6 font-medium text-indigo-200">
          Bachelors
        </dt>
        <dd class="order-1 text-5xl font-extrabold text-white">
          +15
        </dd>
      </div>
    </dl>
  </div>
</div>
@endsection

@section('footer_scripts')

<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>

<script>
  let swiper = new Swiper(".mySwiper", {
        loop:true,
        autoplay: {
        delay: 5500,
        disableOnInteraction: false,
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
  });
</script>

@endsection