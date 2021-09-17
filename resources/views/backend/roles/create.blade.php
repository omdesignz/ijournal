@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Add Roles
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/roles" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Return to Roles Listing
    </a>
  </div>
</div>
@endsection

@section('content')

<form method="post" action="{{ route('roles.store') }}" class="space-y-8" enctype="multipart/form-data">
@csrf

<div class="sm:col-span-3">
    <label for="name" class="block text-sm font-medium text-gray-700">
    Name
    </label>
    <div class="mt-1">
    <input value="{{ old('name') }}" type="text" name="name" id="name" autocomplete="given-name" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
    </div>
    @if($errors->has('name'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('name') }}</p>
    @endif
</div>

<div class="sm:col-span-3">
    <label for="label" class="block text-sm font-medium text-gray-700">
    Label
    </label>
    <div class="mt-1">
    <input value="{{ old('label') }}" type="text" name="label" id="label" autocomplete="given-label" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border-gray-300 rounded-md">
    </div>
    @if($errors->has('label'))
    <p class="mt-2 text-sm text-red-500">{{ $errors->first('label') }}</p>
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