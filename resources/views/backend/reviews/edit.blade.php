@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Contribute to Review
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/reviews" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Return to Review Listing
    </a>
  </div>
</div>
@endsection

@section('content')
<div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
  <h3 class="text-lg leading-6 font-medium text-gray-900">
    Review
  </h3>
  <p class="mt-1 text-sm text-gray-500">
    Submit your review of the article <b>{{ $review->article->title }}</b>
  </p>
</div>

<form method="post" action="{{ route('reviews.update', $review->id) }}" class="space-y-8" enctype="multipart/form-data" x-data="{openrejectiondesc:false}">
@csrf
@method('PUT')

<div class="sm:col-span-6">
    <label for="description" class="block text-sm font-medium text-gray-700">
    Description
    </label>
    <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ $review->description }}</textarea>
    </div>
    <p class="mt-2 text-sm text-gray-500">Provide a brief summary of your review.</p>
    @if($errors->has('description'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('description') }}</p>
    @endif
</div>

<div class="sm:col-span-6">
    <label for="revised_paper" class="block text-sm font-medium text-gray-700">
    Reviewed Document
    </label>
    <div class="mt-1">
    <input value="{{ old('revised_paper') }}" id="revised_paper" name="revised_paper" type="file" class="">
    </div>
    <p class="mt-2 text-sm text-gray-500">Reviewed Document in PDF format.</p>
    @if($errors->has('revised_paper'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('revised_paper') }}</p>
    @endif
</div>

<fieldset class="border-t border-b border-gray-200">
  <legend class="sr-only"></legend>
  <div class="divide-y divide-gray-200">
    <div class="relative flex items-start py-4">
      <div class="min-w-0 flex-1 text-sm">
        <label for="accepted" class="font-medium text-gray-700">Accept Review Request</label>
        <p id="accept-description" class="text-gray-500">Tick this if you accept to review the article.</p>
      </div>
      <div class="ml-3 flex items-center h-5">
        <input value="1" id="accepted" aria-describedby="accepted-description" name="accepted" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full" {{ $review->accepted == 1 ? 'checked' : '' }}>
      </div>
    </div>
    <div class="relative flex items-start py-4">
      <div class="min-w-0 flex-1 text-sm">
        <label for="rejected" class="font-medium text-gray-700">Reject Review Request</label>
        <p id="reject-description" class="text-gray-500">Tick this if you reject to review the article.</p>
      </div>
      <div class="ml-3 flex items-center h-5">
        <input value="1" @click="openrejectiondesc=!openrejectiondesc" id="rejected" aria-describedby="reject-description" name="rejected" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full" {{ $review->rejected == 1 ? 'checked' : '' }}>
      </div>
    </div>
    
  </div>
</fieldset>

<div class="sm:col-span-6" x-show="openrejectiondesc">
    <label for="rejection_description" class="block text-sm font-medium text-gray-700">
    Reason For Review Rejection
    </label>
    <div class="mt-1">
    <textarea id="rejection_description" name="rejection_description" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('rejection_description') }}</textarea>
    </div>
    <p class="mt-2 text-sm text-gray-500">Please let us know your reason for rejecting to review so that we may provide you with a better experience.</p>
    @if($errors->has('rejection_description'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('rejection_description') }}</p>
    @endif
</div>


<div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-gray-800 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
        Submit
      </button>
    </div>
  </div>
</form>
@endsection