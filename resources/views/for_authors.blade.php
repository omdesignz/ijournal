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
            <span class="block xl:inline">For</span>
            <span class="block text-isptec xl:inline">Authors</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('author.jpeg') }}" alt="">
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
        Authors Guidelines
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        Submission Guidelines:
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Electronic submission of manuscripts is mandatory and should be submitted by using the this <a class="text-isptec" href="/submissions/create" target="_blank">LINK</a>
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              All authors must create a user profile by clicking  on "Submissions" and inserting the necessary credentials to login
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              All submissions must be originals that have not yet been published nor currently under appraisal for publication anywhere
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Articles resubmitted after initial rejection will be sent to the original editorial team for review. Resubmitted articles are not guaranteed acceptance for publication and in some cases revised articles are rejected if the improvements are not sufficient or new issues arise
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              All works submitted to this journal will be blind peer-reviewed by an editorial board and outsider reviewers
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Authors who submit their work have to ensure that they are not infringing on authorial rights and/or committing plagiarism
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              The Legal Copyright of published articles is reserved under observation of the Creative Commons Attribution 4.0 International (CC BY 4.0)
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              The Editorial board reserves the right to reject work that either does not meet the quality standards or is out of the journals publication scope
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Any submission can receive one of three results: (1) accepted, (2) rejected, or (3) sent back for revision
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Any further information needed regarding submissions can be addressed to the editorial board at (Email Editorial Board)
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
        <img class="relative mx-auto rounded-3xl" width="490" src="{{ asset('author3.jpeg') }}" alt="">
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
        Authors submission checklist
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        Authors can use the following checklist before submitting work to the Infinity Journal for review:
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Please confirm the following Author information:</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              One author has been designated for contact purposes by providing the following information: E-mail address and Telephone number
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">All necessary files have been adequately prepared and uploaded:</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Authors are expected to consider carefully the list and order of authors before submitting their work while providing the definitive list of authors at the time of the original submission. Only in exceptional circumstances will any alteration of the author list, including deletion, substitution or rearrangement, be authorized and only after the work has been accepted and approved by the editorial board. Publication of the work will be suspended while the Editorial team considers the request. If the manuscript has already been published in the IJournal, any such name request which has been approved by the Editorial board will result in a corrigendum.
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              To request name changes, the Editorial team must receive (1) the reason for the change in author list and (2) written confirmation, in individual emails, from all authors that they agree with requested change, removal or rearrangement. 
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Please confirm the following information regarding the Manuscripts:</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Includes a minimum of 5 and a maximum of 7 keywords
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Manuscript has been "spell checked" and "grammar checked"
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              All references mentioned in the Reference List are cited in the text, and vice versa
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              All figures include relevant captions
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              All tables must include titles, descriptions and footnotes
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Ensure all figure and table citations in the text match the files provided
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Permission has been obtained for use of copyrighted material from other sources (including from the Internet)
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              A competing interests statement is provided, even if the authors have no competing interests to declare
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Journal policies detailed in this guide have been reviewed
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Referee suggestions and contact details provided, based on journal requirements
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
          <img class="relative mx-auto rounded-full" width="490" src="{{ asset('author4.jpeg') }}" alt="">
        </div>
      </div>
    </div>

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
        Declaration of Interest
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        All authors must disclose any financial and personal relationships with other people or organizations that could inappropriately influence (bias) their work. Examples of potential competing interests include employment, consultancies, stock ownership, honoraria, paid expert testimony, patent applications/registrations, and grants or other funding. Authors must disclose any interests in two places:
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              A summary declaration of interest statement in the title page file. If there are no interests to declare then please state this: "Declarations of interest: none". This summary statement will be published if the article is accepted
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900"></p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Detailed disclosures as part of a separate Declaration of Interest form, which forms part of the journal's official records. It is important for potential interests to be declared in both places and that the information matches
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
        <img class="relative mx-auto rounded-3xl" width="490" src="{{ asset('declaration.jpeg') }}" alt="">
      </div>
    </div>

  </div>
</div>


@endsection