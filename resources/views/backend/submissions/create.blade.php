@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Submit an Article
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/submissions" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Return to Submission Listing
    </a>
  </div>
</div>
@endsection

@section('content')
<form method="post" action="{{ url('submissions') }}" class="space-y-8 divide-y divide-gray-200" enctype="multipart/form-data">
    @csrf
  <div class="space-y-8 divide-y divide-gray-200">
    <div>

      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
      <div class="sm:col-span-3">
          <label for="title" class="block text-sm font-medium text-gray-700">
            Title
          </label>
          <div class="mt-1">
            <input value="{{ old('title') }}" type="text" name="title" id="title" autocomplete="given-name" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
          </div>
          @if($errors->has('title'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('title') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="abstract" class="block text-sm font-medium text-gray-700">
            Abstract
          </label>
          <div class="mt-1">
            <textarea id="abstract" name="abstract" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md"> {{ old('abstract') }}</textarea>
          </div>
          <p class="mt-2 text-sm text-gray-500">Write a few sentences about your article.</p>
          @if($errors->has('abstract'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('abstract') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="references" class="block text-sm font-medium text-gray-700">
            References
          </label>
          <div class="mt-1">
            <textarea id="references" name="references" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('references') }}</textarea>
          </div>
          <p class="mt-2 text-sm text-gray-500">Provide us a few references used in your article.</p>
          @if($errors->has('references'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('references') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="keywords" class="block text-sm font-medium text-gray-700">
            Keywords
          </label>
          <div class="mt-1">
            <input value="{{ old('keywords') }}" type="text" name="keywords" id="keywords" autocomplete="keywords" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
          </div>
          @if($errors->has('keywords'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('keywords') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="authors" class="block text-sm font-medium text-gray-700">
            Authors
          </label>
          <div class="mt-1">
            <input value="{{ old('authors') }}" type="text" name="authors" id="authors" autocomplete="authors" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
          </div>
          @if($errors->has('authors'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('authors') }}</p>
          @endif
        </div>

        <div class="sm:col-span-3">
          <label for="link" class="block text-sm font-medium text-gray-700">
            Link
          </label>
          <div class="mt-1">
            <input value="{{ old('link') }}" type="text" name="link" id="link" autocomplete="link" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
          </div>
          @if($errors->has('link'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('link') }}</p>
          @endif
        </div>

        <div class="sm:col-span-3">
          <label for="published_at" class="block text-sm font-medium text-gray-700">
            Published Date
          </label>
          <div class="mt-1">
            <input value="{{ old('published_at') }}" type="date" name="published_at" id="published_at" autocomplete="published_at" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
          </div>
          @if($errors->has('published_at'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('published_at') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="cite_instructions" class="block text-sm font-medium text-gray-700">
            Cite Instructions
          </label>
          <div class="mt-1">
            <textarea id="cite_instructions" name="cite_instructions" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('cite_instructions') }}</textarea>
          </div>
          <p class="mt-2 text-sm text-gray-500">Help people cite your article by providing a citation format.</p>
          @if($errors->has('cite_instructions'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('cite_instructions') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="filtered_paper" class="block text-sm font-medium text-gray-700">
            Article (Filtered)
          </label>
          <div class="mt-1">
            <input value="{{ old('filtered_paper') }}" id="filtered_paper" name="filtered_paper" type="file" class="">
          </div>
          <p class="mt-2 text-sm text-gray-500">Article in PDF format (excluding authors)</p>
          @if($errors->has('filtered_paper'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('filtered_paper') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="full_paper" class="block text-sm font-medium text-gray-700">
            Article (Full)
          </label>
          <div class="mt-1">
            <input value="{{ old('full_paper') }}" id="full_paper" name="full_paper" type="file" class="">
          </div>
          <p class="mt-2 text-sm text-gray-500">Complete article in PDF format (including authors)</p>
          @if($errors->has('full_paper'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('full_paper') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
          <label for="declaration" class="block text-sm font-medium text-gray-700">
            Signed Declaration
          </label>
          <div class="mt-1">
            <input value="{{ old('declaration') }}" id="declaration" name="declaration" type="file" class="">
          </div>
          <p class="mt-2 text-sm text-gray-500">Signed Declaration in PDF format.</p>
          @if($errors->has('declaration'))
          <p class="mt-2 text-sm text-red-500">{{ $errors->first('declaration') }}</p>
          @endif
        </div>

        <div class="sm:col-span-6">
        
        <fieldset>
          <legend class="text-base font-medium text-gray-900">
            Terms and Conditions
          </legend>
          <div class="mt-4 space-y-4">
            <div class="relative flex items-start">
              <div class="flex items-center h-5">
                <input value="1" id="agree_terms" name="agree_terms" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full" {{ old('agree_terms') == 1 ? 'checked' : '' }}>
              </div>
              <div class="ml-3 text-sm">
                <label for="agree_terms" class="font-medium text-gray-700">Terms and Conditions</label>
                <p class="text-gray-500">Tick this box if you agree to our terms and conditions.</p>
                @if($errors->has('agree_terms'))
                <p class="mt-2 text-sm text-red-500">{{ $errors->first('agree_terms') }}</p>
                @endif
              </div>
            </div>
            <div class="relative flex items-start">
              <div class="flex items-center h-5">
                <input value="1" id="agree_privacy_policy" name="agree_privacy_policy" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full" {{ old('agree_privacy_policy') == 1 ? 'checked' : '' }}>
              </div>
              <div class="ml-3 text-sm">
                <label for="agree_privacy_policy" class="font-medium text-gray-700">Privacy Policy</label>
                <p class="text-gray-500">Tick this box if you agree to our privacy policy.</p>
                @if($errors->has('agree_privacy_policy'))
                <p class="mt-2 text-sm text-red-500">{{ $errors->first('agree_privacy_policy') }}</p>
                @endif
              </div>
            </div>
            
          </div>
        </fieldset>
        </div>
      </div>
    </div>
 
  </div>

  <div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-gray-800 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
        Submit Article
      </button>
    </div>
  </div>
</form>
@endsection