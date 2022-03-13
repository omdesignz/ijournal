@extends('layouts.app')

@section('page_title')
  Submissions
@endsection

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Publish an Article
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/submissions" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-900 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Return to Submission Listing
    </a>
  </div>
</div>
@endsection

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->

<div class="bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:p-6">
    <div class="sm:flex sm:items-start sm:justify-between">
      <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          Author Guidelines
        </h3>
        <div class="mt-2 max-w-xl text-sm text-gray-500">
          <p>
            Before submitting an article please ensure that you're aquainted with our author guidelines.
          </p>
        </div>
      </div>
      <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
        <a href="/forauthors" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-full text-white bg-gray-900 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec sm:text-sm" target="_blank">
          Guidelines
</a>
      </div>
    </div>
  </div>
</div>
<br>
<div class="bg-white shadow sm:rounded-lg">
  <div class="px-4 py-5 sm:p-6">
    <div class="sm:flex sm:items-start sm:justify-between">
      <div>
        <h3 class="text-lg leading-6 font-medium text-gray-900">
          Submission & Formatting
        </h3>
        <div class="mt-2 max-w-xl text-sm text-gray-500">
          <p>
            Before submitting an article please ensure that you're aquainted with our formatting rules.
          </p>
        </div>
      </div>
      <div class="mt-5 sm:mt-0 sm:ml-6 sm:flex-shrink-0 sm:flex sm:items-center">
        <a href="/subformat" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm font-medium rounded-full text-white bg-gray-900 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec sm:text-sm" target="_blank">
          Formatting
</a>
      </div>
    </div>
  </div>
</div>

<form method="post" action="{{ url('submissions') . '/' . $article->id . '/publish' }}" class="space-y-8 divide-y divide-gray-200" enctype="multipart/form-data">
    @method('PUT')
    @csrf
  <div class="space-y-8 divide-y divide-gray-200">
    <div>

      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
      <div class="sm:col-span-6">
          <h6 class="font-bold text-lg">You're about to publish the article {{ $article->title }}. The whole world will be able to read it as soon as you hit "Publish Article."</h6>
          {{-- <label for="title" class="block text-sm font-medium text-gray-700">
            Title
          </label>
          <div class="mt-1">
            <input readonly value="{{ $article->title }}" type="text" name="title" id="title" autocomplete="given-name" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
          </div>
          @if($errors->has('title'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('title') }}</p>
          @endif --}}
        </div>

        <div class="sm:col-span-6">
          <label for="final_paper" class="block text-sm font-medium text-gray-700">
            Article (Publishable Paper)
          </label>
          <div class="mt-1">
            <input value="{{ old('final_paper') }}" id="final_paper" name="final_paper" type="file" class="">
          </div>
          
          @if($errors->has('final_paper'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('final_paper') }}</p>
          @else
          <p class="mt-2 text-sm text-gray-500">- All reviews must have been taken into consideration</p>
          <p class="mt-2 text-sm text-gray-500">- File must be in PDF format</p>
          <p class="mt-2 text-sm text-gray-500">- File size should not exceed 5MB</p>
          @endif
        </div>

      </div>
    </div>
 
  </div>

  <div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-gray-800 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
        Publish Article
      </button>
    </div>
  </div>
</form>
@endsection