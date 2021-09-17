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
            <span class="block xl:inline">Policy</span>
            <span class="block text-isptec xl:inline">Guide</span>
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
        Ethics and Malpractice Statement
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        The IJournal applies the principles of editorial and publication ethics as outlined in the <a class="text-isptec" href="https://publicationethics.org/core-practices" target="_blank">COPE (Committee on Publication Ethics) Core Practices</a>.  This journal recognizes the responsibility involved in maintaining the integrity of the scientific process and is committed to upholding these principles.

        </p>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        The editorial board and all peer reviewers must adhere at all times to the publishing ethics as outlined  in the COPE core practices and must follow the guidance as published in the COPE flowcharts in the effort to detect  suspected misconduct and circumvent unethical practices. 

        </p>

        <p class="mt-3 text-lg text-gray-500 text-justify">
        Unethical practices may include, but are not limited to, violations of any of the ethical expectations such as plagiarism, authorship falsification, falsification or fabrication of research, redundant or duplicate publication, peer review manipulation, or failure to disclose conflicts of interest. 

        </p>

        <p class="mt-3 text-lg text-gray-500 text-justify">
        If conclusive evidence of misconduct has been proven, steps will be taken to make the necessary correction. This may include issuing a corrigendum or retraction.

        </p>
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
          Copyright and Access
          </h3>
          <p class="mt-3 text-lg text-gray-500">
          All manuscripts accepted for publication will be made accessible, free of charge, on the IJournal website under observation of the <a class="text-isptec" href="https://creativecommons.org/licenses/by-nc-nd/4.0/" target="_blank">Creative Commons Attribution 4.0 International (CC BY 4.0)</a>. With this license, authors retain copyright to their manuscript, but allow any user to share, and redistribute the material in any medium or format providing the necessary observation and usage of proper citation. However, for commercial purposes, publication rights are granted to the Infinity Journal (ISPTEC) as the publisher. The journal/publisher is not responsible for subsequent usage of the work. It is the author’s responsibility to bring an infringement action if so desired by the author.
          </p>
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

  </div>
</div>


@endsection