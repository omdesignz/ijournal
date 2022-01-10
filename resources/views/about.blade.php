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
            <span class="block xl:inline">About</span>
            <span class="block text-isptec xl:inline">IJournal</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('journal_cover.jpeg') }}" alt="">
  </div>
</div>

<div class="py-16 bg-white overflow-hidden lg:py-2">
  <div class="relative max-w-xl mx-auto px-4 sm:px-6 lg:px-8 lg:max-w-7xl">
    <svg class="hidden lg:block absolute left-full transform -translate-x-1/2 -translate-y-1/4" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
      <defs>
        <pattern id="b1e6e422-73f8-40a6-b5d9-c8586e37e0e7" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="784" fill="url(#b1e6e422-73f8-40a6-b5d9-c8586e37e0e7)" />
    </svg>

    <div class="relative mt-12 lg:mt-24 lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
      <div class="relative">
        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
          IJournal
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        The Infinity Journal, IJournal in its diminutive form, created by the <a class="text-isptec" href="https://www.isptec.co.ao" target="_blank">Polytechnic Institute of Technologies and Sciences – ISPTEC (Instituto Superior Politécnico de Tecnologias e Ciências)</a>, provides a scientific outlet for the scholarly work of university professors, researchers, students and other professional staff who wish to contribute to the scientific publications community.

        </p>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        The IJournal strives to promote nationally produced scientific work in an online, open access platform along with international contributions.  The editorial process is rigorous and includes blind peer review by a range of international experts in their respective fields.

        </p>

        <p class="mt-3 text-lg text-gray-500 text-justify">
        Understanding that then process of scholarly publications is an arduous one. We strive to call upon authors who although in the beginning of their publications career have a significant contribution in their field. We also call upon experienced authors to share their work and illuminate our audience, infinitely.

        </p>

        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl mt-2">
          Scope
        </h3>

        <dl class="mt-10 space-y-10">
          <div class="relative">
            <dt>
            <div class="absolute flex items-center justify-center h-12 w-12 rounded-full bg-isptec text-white">
                <!-- Heroicon name: outline/scale -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
            The Infinity Journal publishes high-quality original articles, short communications, case studies and hypotheses on the fundamentals, applications and processes in Engineering, Technology, Geosciences, Social Science and Health and Medicine, as well as conference proceedings and papers reporting on basic and applied research and innovation in the aforementioned fields. Review articles reporting relevant discussions and conclusions of published papers will also be considered for publication.  
            </dd>
          </div>

          <div class="relative">
            <dt>
              <div class="absolute flex items-center justify-center h-12 w-12 rounded-full bg-isptec text-white">
                <!-- Heroicon name: outline/scale -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
              </div>
              <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
            </dt>
            <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
            Papers previously published elsewhere cannot be accepted for the Infinity Journal. Article acceptance is a decision made by the editorial team and is based on the recommendations of ad hoc referees, and of the editorial board, if necessary.
            </dd>
          </div>

        </dl>
      </div>

      <div class="mt-10 -mx-4 relative lg:mt-0" aria-hidden="true">
        <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404">
          <defs>
            <pattern id="ca9667ae-9f92-4be7-abcb-9e3d727f2941" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
              <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
            </pattern>
          </defs>
          <rect width="784" height="404" fill="url(#ca9667ae-9f92-4be7-abcb-9e3d727f2941)" />
        </svg>
        <img class="relative mx-auto rounded-3xl" width="490" src="{{ asset('infinity_dark.png') }}" alt="">
      </div>
    </div>

    <svg class="hidden lg:block absolute right-full transform translate-x-1/2 translate-y-12" width="404" height="784" fill="none" viewBox="0 0 404 784" aria-hidden="true">
      <defs>
        <pattern id="64e643ad-2176-4f86-b3d7-f2c5da3b6a6d" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
          <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
        </pattern>
      </defs>
      <rect width="404" height="784" fill="url(#64e643ad-2176-4f86-b3d7-f2c5da3b6a6d)" />
    </svg>

    <div class="relative mt-12 sm:mt-16 lg:mt-24">
      <div class="lg:grid lg:grid-flow-row-dense lg:grid-cols-2 lg:gap-8 lg:items-center">
        <div class="lg:col-start-2">
          <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
          Core topic areas of publication
          </h3>
          <p class="mt-3 text-lg text-gray-500">
            
          </p>

          <dl class="mt-10 space-y-10">
            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-full bg-isptec text-white">
                  <!-- Heroicon name: outline/annotation -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Engineering and Technology</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Engineering and Technology is not limited to a specific aspect of Engineering Technology but is instead devoted to a wide range of subfields in the engineering sciences. While it encourages a broad spectrum of contribution in the engineering sciences, its core lies in issues concerning material modeling and response. Articles of interdisciplinary nature are particularly welcome.
              </dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-full bg-isptec text-white">
                  <!-- Heroicon name: outline/mail -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Geosciences</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              The geosciences area covers all fields of geology including, but not limited to; geophysics, geochemistry, paleontology, structural geology, mineralogy, petrology, stratigraphy, sedimentology, environmental geology, economic geology, petroleum geology, hydrogeology, remote sensing and planetary geology. Articles of an interdisciplinary nature are also welcome.
              </dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-full bg-isptec text-white">
                  <!-- Heroicon name: outline/mail -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Social Sciences</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Social sciences is defined in the classical sense, which is in the social sciences and humanities. The research that is published may take a theoretical or speculative model as well as statistical and/or mathematical. Contributions are welcome from all fields which have relevant and insightful comments to make about the social sciences. 
              </dd>
            </div>

            <div class="relative">
              <dt>
                <div class="absolute flex items-center justify-center h-12 w-12 rounded-full bg-isptec text-white">
                  <!-- Heroicon name: outline/mail -->
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                </div>
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Health and Medicine</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Health and Medicine covers all areas of medicine including health studies and nursing research, continuing medical education, tropical diseases of global significance, tropical medicine and public health research as well as clinical, epidemiological, laboratory and policy research. Contributions are welcome from all fields which have relevant and insightful comments to make about the field of Health and Medicine. 
              </dd>
            </div>

          </dl>
        </div>

        <div class="mt-10 -mx-4 relative lg:mt-0 lg:col-start-1">
          <svg class="absolute left-1/2 transform -translate-x-1/2 translate-y-16 lg:hidden" width="784" height="404" fill="none" viewBox="0 0 784 404" aria-hidden="true">
            <defs>
              <pattern id="e80155a9-dfde-425a-b5ea-1f6fadd20131" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
              </pattern>
            </defs>
            <rect width="784" height="404" fill="url(#e80155a9-dfde-425a-b5ea-1f6fadd20131)" />
          </svg>
          <img class="relative mx-auto rounded-full" width="490" src="{{ asset('journal_cover.jpeg') }}" alt="">
        </div>
      </div>
    </div>


    <div class="bg-white shadow overflow-hidden sm:rounded-lg mt-16">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl mt-2">
      General Information
    </h3>
    <p class="mt-1 max-w-2xl text-sm text-gray-500">
      Key data about the journal
    </p>
  </div>
  <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
    <dl class="sm:divide-y sm:divide-gray-200">
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Publisher
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        Instituto Superior Politécnico de Tecnologias e Ciências - ISPTEC
        </dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Online ISSN:
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          ---
        </dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          DOI
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          ---
        </dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Number of volume per year
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          1
        </dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Number of issues per year
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          2
        </dd>
      </div>
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Nº of articles per edition
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
          10
        </dd>
      </div>
      
      <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
        Months of publications
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
        April and October
        </dd>
      </div>
    </dl>
  </div>
</div>


  </div>
</div>


@endsection