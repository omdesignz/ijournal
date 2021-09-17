@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Modify User
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/users" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Return to Users Listing
    </a>
  </div>
</div>
@endsection

@section('content')

<form method="post" action="{{ route('users.update', $user->id) }}" class="space-y-8" enctype="multipart/form-data">
@method('PUT')
@csrf

<div class="space-y-1">
                  <label for="first_name" class="font-medium">{{ __('Name') }}</label>
                  <input value="{{ $user->first_name }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="first_name" name="first_name" placeholder="Enter your first name" />
                  @if($errors->has('first_name'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('first_name') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="middle_names" class="font-medium">{{ __('Middle Names') }}</label>
                  <input value="{{ $user->middle_names }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="middle_names" name="middle_names" placeholder="Enter your middle names" />
                  @if($errors->has('middle_names'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('middle_names') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="last_name" class="font-medium">{{ __('Last Name') }}</label>
                  <input value="{{ $user->last_name }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="last_name" name="last_name" placeholder="Enter your last name" />
                  @if($errors->has('last_name'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('last_name') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="username" class="font-medium">{{ __('Username') }}</label>
                  <input value="{{ $user->username }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="username" name="username" placeholder="Enter your last name" />
                  @if($errors->has('username'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('username') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="email" class="font-medium">{{ __('Email') }}</label>
                  <input value="{{ $user->email }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" id="email" name="email" placeholder="Enter your email" />
                  @if($errors->has('email'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="tel_no" class="font-medium">{{ __('Tel No') }}</label>
                  <input value="{{ $user->tel_no }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="tel_no" name="tel_no" placeholder="Enter your tel no" />
                  @if($errors->has('tel_no'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('tel_no') }}</p>
                    @endif
                </div>

                <div class="space-y-1">
                  <label for="active" class="font-medium">Activate User?</label>
                  <input value="1" id="active" name="active" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full" {{ $user->active == 1 ? 'checked' : '' }}>
                  @if($errors->has('active'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('active') }}</p>
                    @endif
                </div>

                <div class="space-y-1">
                    <label for="">Roles</label>
                <ul role="list" class="divide-y divide-gray-200">

@forelse ($roles as $role)

<li>
    <a href="#" class="block hover:bg-gray-50">
        <div class="px-4 py-4 sm:px-6">
        <div class="flex items-center justify-between">
            <div class="text-sm font-medium text-gray-700 truncate">
            {{ $role->label }}
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
                {{ $role->name }}
            </div>
            </div>
            <div class="ml-2 flex items-center text-sm text-gray-500">
            <input value="{{ $role->id }}" id="role-{{ $role->id }}" name="roles[]" type="checkbox" class="focus:ring-isptec h-4 w-4 text-isptec border-gray-300 rounded-full" {{ in_array($role->id, $user->roles->pluck('id')->toArray()) ? 'checked' : '' }}>
            </div>
        </div>
        </div>
    </a>
    </li>

@empty
                
    <p>No roles found. <a href="/roles/create" class="font-medium text-isptec hover:text-gray-700">Add a new role</a></p>

@endforelse

</ul>
                </div>
                <div class="flex items-center">
                  <input name="agree_terms" value="1" type="checkbox" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" {{ $user->agree_terms == 1 ? 'checked' : '' }} />
                  <span class="ml-2"> I accept <a href="#" class="font-medium text-isptec hover:text-gray-700">terms &amp; conditions</a></span>
                </div>
                <div class="flex items-center">
                  <input name="agree_notification" value="1" type="checkbox" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" {{ $user->agree_notification == 1 ? 'checked' : '' }} />
                  <span class="ml-2"> I would like to receive notifications</span>
                </div>
                <div class="flex items-center">
                  <input @click="openReview = !openReview" name="agree_contact_review" value="1" type="checkbox" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" {{ $user->agree_contact_review == 1 ? 'checked' : '' }} />
                  <span class="ml-2"> I would like to be contacted for reviews</span>
                </div>

                <div class="space-y-1" x-show="openReview">
                  <label for="review_interests" class="font-medium">{{ __('Review Interests') }}</label>
                  <textarea id="review_interests" name="review_interests" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ $user->review_interests }}</textarea>
                  <p class="mt-2 text-sm text-gray-500">Tell us about the fields that your're most passionate about.</p>
                </div>

                <div class="space-y-1">
                  <label for="avatar" class="font-medium">{{ __('Avatar') }}</label>
                  <input id="avatar" name="avatar" type="file" class="" />
                  @if($errors->has('avatar'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('avatar') }}</p>
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