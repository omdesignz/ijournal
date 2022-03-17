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
            <span class="block xl:inline">Privacy</span>
            <span class="block text-isptec xl:inline">Policy</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('privacy.jpeg') }}" alt="">
  </div>
</div>


<div class="py-16 xl:py-36 px-4 sm:px-6 lg:px-8 bg-white overflow-hidden">
  <div class="max-w-max lg:max-w-7xl mx-auto">
    <div class="relative z-10 mb-8 md:mb-2 md:px-6">
      <div class="text-base max-w-prose lg:max-w-none">
        <!-- <h2 class="leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</h2> -->
        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Your privacy comes first</p>
      </div>
    </div>
    <div class="relative">
      <svg class="hidden md:block absolute top-0 right-0 -mt-20 -mr-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="95e8f2de-6d30-4b7e-8159-f791729db21b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#95e8f2de-6d30-4b7e-8159-f791729db21b)" />
      </svg>
      <svg class="hidden md:block absolute bottom-0 left-0 -mb-20 -ml-20" width="404" height="384" fill="none" viewBox="0 0 404 384" aria-hidden="true">
        <defs>
          <pattern id="7a00fe67-0343-4a3c-8e81-c145097a3ce0" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
            <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
          </pattern>
        </defs>
        <rect width="404" height="384" fill="url(#7a00fe67-0343-4a3c-8e81-c145097a3ce0)" />
      </svg>
      <div class="relative md:bg-white md:p-6">
        <div class="lg:grid lg:grid-cols-2 lg:gap-6">
          <div class="prose prose-indigo prose-lg text-gray-500 lg:max-w-none">
            <p class="text-justify">The Infinity Journal will only collect information from registered users who have agreed to the terms of information use upon registration. The data collected from registered users falls within the scope of the standard functioning of peer -reviewed journals. It includes information that makes communication possible during the editorial process; it enables collecting aggregated data on submissions and publications, as well as tracking geopolitical and social elements of scholarly communication. The IJournal´s editorial team uses this data to guide its work in publishing and improving access to this journal. Data that will assist in developing this publishing platform may be shared with its developer IJournal Development Team  in an anonymous and aggregated form, with appropriate exceptions such as article metrics.</p>
            <br>
            <p class="text-justify">The data will not be sold by this journal or IJournal Development nor will it be used for purposes other than those stated here.</p>
            <br>
            
            <p class="text-justify">The authors published in this journal are responsible for the human subject data that figures in the research reported here. Those involved in editing this journal seek to be compliant with industry standards for data privacy, including the European Union’s General Data Protection Regulation <a class="text-isptec" href="https://gdpr-info.eu/" target="_blank">(GDPR)</a> provision for <a class="text-isptec" href="https://gdpr-info.eu/chapter-3/" target="_blank">“ data subject rights ”</a> that include (a) breach notification; (b) right of access; (c) the right to be forgotten; (d) data portability; and (e) privacy by design. The GDPR also allows for the recognition of <a class="text-isptec" href="https://gdpr-info.eu/art-5-gdpr/" target="_blank">“the public interest in the availability of the data,”</a> which has a particular saliency for those involved in maintaining, with the greatest integrity possible, the public record of scholarly publishing.</p>
            
          </div>
          <div class="mt-6 prose prose-indigo prose-lg text-gray-500 lg:mt-0">
          <p class="text-justify font-semibold"></p>

          </div>
        </div>
        
      </div>
    </div>
  </div>
</div>

@endsection