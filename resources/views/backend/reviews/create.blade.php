@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Assign Reviewers
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
<div class="bg-white px-4 py-5 border-b border-gray-200 sm:px-6">
  <h3 class="text-lg leading-6 font-medium text-gray-900">
    Reviewers
  </h3>
  <p class="mt-1 text-sm text-gray-500">
    Select the reviewers that you want to assign to the article <b>{{ $article->title }}</b>
  </p>
</div>

<form method="post" action="{{ route('reviews.store') }}" class="space-y-8 divide-y divide-gray-200">
@csrf
<input type="hidden" value="{{ $article->id }}" name="article_id">
<ul role="list" class="divide-y divide-gray-200">

@forelse ($users as $user)

<li>
    <a href="#" class="block hover:bg-gray-50">
        <div class="px-4 py-4 sm:px-6">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium text-gray-700 truncate">
            {{ $user->first_name }} {{ $user->last_name }}
            </div>
            <div class="ml-2 flex-shrink-0 flex">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    Make your selection
                </span>
            </div>
        </div>
        <div class="mt-2 flex justify-between">
            <div class="sm:flex">
            <div class="flex items-center text-sm text-gray-500">
                {{ $user->email }}
            </div>
            </div>
            <div class="ml-2 flex items-center text-sm text-gray-500">
            <input value="{{ $user->id }}" id="user-{{ $user->id }}" name="users[]" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full">
            </div>
        </div>
        </div>
    </a>
    </li>

@empty
                
    <p>No users found</p>

@endforelse

</ul>
<div class="pt-5">
    <div class="flex justify-end">
      <button type="submit" class="ml-3 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-full text-white bg-gray-800 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
        Notify Reviewers
      </button>
    </div>
  </div>
</form>
@endsection