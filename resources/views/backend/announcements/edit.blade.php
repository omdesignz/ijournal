@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Publish Announcements
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/announcements" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Return to Announcements Listing
    </a>
  </div>
</div>
@endsection

@section('content')

<form method="post" action="{{ route('announcements.update', $announcement->id) }}" class="space-y-8" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="sm:col-span-6">
    <label for="title" class="block text-sm font-medium text-gray-700">
    Title
    </label>
    <div class="mt-1">
    <input value="{{ $announcement->title }}" type="text" name="title" id="title" autocomplete="given-name" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
    </div>
    @if($errors->has('title'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('title') }}</p>
    @endif
</div>

<div class="sm:col-span-6">
    <label for="description" class="block text-sm font-medium text-gray-700">
    Description
    </label>
    <div class="mt-1">
    <textarea id="description" name="description" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ $announcement->description }}</textarea>
    </div>
    <p class="mt-2 text-sm text-gray-500">Provide a brief summary of your announcement.</p>
    @if($errors->has('description'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('description') }}</p>
    @endif
</div>

<div class="sm:col-span-3">
    <label for="published_at" class="block text-sm font-medium text-gray-700">
    Published Date
    </label>
    <div class="mt-1">
    <input value="{{ $announcement->published_at }}" type="date" name="published_at" id="published_at" autocomplete="published_at" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
    </div>
    @if($errors->has('published_at'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('published_at') }}</p>
    @endif
</div>

<div class="sm:col-span-6">
    <label for="cover" class="block text-sm font-medium text-gray-700">
    Cover Image
    </label>
    <div class="mt-1">
    <input value="{{ old('cover') }}" id="cover" name="cover" type="file" class="">
    </div>
    <p class="mt-2 text-sm text-gray-500">Cover image in JPEG/JPG/PNG format.</p>
    @if($errors->has('cover'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('cover') }}</p>
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