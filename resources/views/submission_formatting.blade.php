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
            <span class="block xl:inline">Submission</span>
            <span class="block text-isptec xl:inline">and Formatting</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            
          </p>
        </div>
      </main>
    </div>
  </div>
  <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
    <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="{{ asset('subformat.jpeg') }}" alt="">
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
        Submission and Formatting
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        Manuscripts should be submitted according to the following requirements:
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
              Title and the author's name(s) should be on its own separate page, along with mailing addresses, phone and e-mail for correspondence and proofs for corrections
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
              All manuscripts should be submitted in English
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
              Text should be written in double spaced, A4 format
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
              All symbols should be defined in the text. A separate nomenclature section should appear at the end of each paper
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
              Symbols and units are listed in alphabetical order with their definitions and dimensions in SI units
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
              The abstract along with keywords should not exceed 250 words
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
              References cited should be quoted in the text and referenced by number. Reference list should be located at end of article. Literature references cited should be listed at the end of the paper in alphabetical order
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
                <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Journal references should be arranged as in following examples:</p>
              </dt>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Biegler, L.T. and Hugles, R.R.; Approximation Programming of Chemical Processes, Part 4: Application of Powell's Algorithm. 73rd Annual Meeting AIChE. Chicago (1980)
              </dd>
              <dd class="mt-2 ml-16 text-base text-gray-500 text-justify">
              Boole and Babbage, Problem Program Evaluator User Guide. Sunnyvale, California (1977)
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
        <img class="relative mx-auto rounded-3xl" width="490" src="{{ asset('submission.jpeg') }}" alt="">
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
        Essential title of paper
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        Titles should be concise and informative. Avoid abbreviations and formulae where possible.
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
              Author names and affiliations. Please clearly indicate the given name(s) and family name(s) of each author and check that all names are accurately spelled
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
              Present the authors' institutional affiliation addresses (where the actual work was done) below the names
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
              Provide the full postal address of each affiliation, including the country name and, if available, the affiliation institution e-mail address of each author
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
              Corresponding author. Clearly indicate who will handle correspondence at all stages of refereeing and publication, also post-publication. This responsibility includes answering any future queries about Methodology and Materials
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
              Ensure that the e-mail address is given and that contact details are kept up to date by the corresponding author
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
              Present/permanent address. If an author has changed affiliation since the work described in the article was done, or was visiting at the time, a 'Present affiliation address' (or 'Permanent affiliation address') may be indicated as a footnote to that author's name. The address at which the author actually did the work must be retained as the main, affiliation address. Superscript Arabic numerals are used for such footnotes
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
          <img class="relative mx-auto rounded-full" width="490" src="{{ asset('subformat2.jpeg') }}" alt="">
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
        Abstract
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        A concise and factual abstract is required. The abstract should state briefly the purpose of the research, the principal results and major conclusions. The abstract should be presented separately from the article, so it must be able to stand alone. For this reason, References should be avoided, but if essential, then cite the author(s) and year(s). Also, non-standard or uncommon abbreviations should be avoided, but if essential they must be defined at their first mention in the abstract itself.
        </p>

        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl mt-10">
        Keywords
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        Immediately, after the abstract, provide a minimum of 5 and a maximum of 7 keywords, using American spelling and avoiding general and plural terms and multiple concepts (avoid, for example, 'and', 'of'). Be sparing with abbreviations: only abbreviations firmly established in the field may be eligible. Keywords will be used for indexing purposes.
        </p>

        <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl mt-10">
        Use of word processing
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        All texts should be saved using Microsoft Word. Most formatting codes will be removed and replaced on processing the article. However, do use bold face, italics, subscripts, superscripts etc. When preparing tables, if you are using a table grid, use only one grid for each individual table. The electronic text should be prepared in a way very similar to that of conventional manuscripts. To avoid unnecessary errors you are strongly advised to use the 'spell-check' and 'grammar-check' functions of your word processor.
        </p>

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
        <img class="relative mx-auto rounded-3xl" width="490" src="{{ asset('subformat4.jpeg') }}" alt="">
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
        Subdivision – numbered sections
        </h3>
        <p class="mt-3 text-lg text-gray-500 text-justify">
        Divide your article into clearly defined and numbered sections
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
              Subsections should be numbered 1.1 (then 1.1.1, 1.1.2, ...), 1.2, etc. (the abstract is not included in section numbering)
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
              Use this numbering also for internal cross-referencing: do not just refer to 'the text'. Any subsection may be given a brief heading. Each heading should appear on its own separate line
              </dd>
            </div>

            <div class="relative">
            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
            Illustrations and Tables
            </h3>
            <p class="mt-3 text-lg text-gray-500 text-justify">
            
            </p>
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
              Original figures, tables and photographs should be submitted adequate for immediate reproduction. Figures and tables in the text, along with their respective captions, should be inserted into the text
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
              Graphics should not be larger than 9x14 cm. Illustrations should not be larger than 12x17 cm. All lettering should appear on the illustration and should be written in Times New Roman
              </dd>
            </div>

            <div class="relative">
            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl">
            Units
            </h3>
            <p class="mt-3 text-lg text-gray-500 text-justify">Follow internationally accepted rules and conventions: use the international system of units (SI). If other units are mentioned, please give their equivalent in SI</p>

            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl mt-10">
            Highlights
            </h3>
            <p class="mt-3 text-lg text-gray-500 text-justify">Highlights are a short collection of bullet points that convey the core findings of the article. Highlights are optional and should be submitted in a separate editable file in the online submission system. Please use 'Highlights' in the file name and include 3 to 5 bullet points (maximum 85 characters, including spaces, per bullet point)</p>

            <h3 class="text-2xl font-extrabold text-gray-900 tracking-tight sm:text-3xl mt-10">
            Copyrights
            </h3>
            <p class="mt-3 text-lg text-gray-500 text-justify">Upon acceptance of an article, authors will be asked to complete a “Journal Publishing Agreement”. An e-mail will be send to the corresponding author confirming receipt of the manuscript together with a 'Journal Publishing Agreement' form or a link to the online version of this agreement</p>
              
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
          <img class="relative mx-auto rounded-full" width="490" src="{{ asset('subformat3.jpeg') }}" alt="">
        </div>
      </div>
    </div>



  </div>
</div>

<div class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:py-16 lg:px-8 lg:py-2">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Guidelines for research data</span>
      <span class="block text-isptec"></span>
    </h2>
    <div class="mt-8">
    <p class="mt-3 text-lg text-gray-500 text-justify">Follow internationally accepted rules and conventions: use the international system of units (SI). If other units are mentioned, please give their equivalent in SI.</p>
    </div>
  </div>
</div>

<div class="bg-white">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 md:py-16 lg:px-8 lg:py-2">
    <h2 class="text-3xl font-extrabold tracking-tight text-gray-900 sm:text-4xl">
      <span class="block">Submission declaration and verification</span>
      <span class="block text-isptec"></span>
    </h2>
    <div class="mt-2">
    <p class="mt-3 text-lg text-gray-500 text-justify">Submission of an article implies that the work described has not been published previously (except in the form of an abstract, a published lecture or academic thesis). That it is not under consideration for publication elsewhere, that its publication is approved by all authors and tacitly or explicitly by the responsible authorities where the work was carried out, and that, if accepted, it will not be published elsewhere in the same form, in English or in any other language, including electronically without the written consent of the copyright-holder. To verify originality, all articles will be checked by the originality detection service through a plagiarism software.</p>
    </div>
  </div>
</div>


@endsection