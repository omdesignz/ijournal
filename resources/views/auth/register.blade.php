<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/inter.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('js/alpine.js') }}"></script>
</head>
<body>
    <!-- Page Container -->
<div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
  <!-- Page Content -->
  <main id="page-content" class="flex flex-auto flex-col max-w-full">
    <div class="min-h-screen flex flex-col bg-cover bg-bottom" style="background-image: url('https://source.unsplash.com/9XngoIpxcEo/1920x1200');">
      <!-- Sign Up Section -->
      <div class="flex flex-grow md:w-8/12 lg:w-5/12 xl:w-4/12 bg-white shadow-xl">
        <div class="flex flex-col p-8 lg:p-16 xl:p-20 w-full">
          <!-- Sign Up Content -->
          <div class="flex-grow flex items-center">
            <div class="w-full max-w-lg mx-auto space-y-10">
              <!-- Header -->
              <div>
                <h1 class="text-4xl font-bold inline-flex items-center mb-1 space-x-3">
                  <a href="/">
                    <img class="h-8 w-auto sm:h-10" src="/infinity_bg_light.svg" alt="">
                  </a>
                  <span></span>
                </h1>
                <p class="text-gray-500">
                  Create your own account in one single step
                </p>
              </div>
              <!-- END Header -->

              <!-- Sign Up Form -->
              <form method="POST" action="{{ route('register') }}" class="space-y-6" x-data="{ openReview: false }" enctype="multipart/form-data">
              @csrf
                <div class="space-y-1">
                  <label for="first_name" class="font-medium">{{ __('Name') }}</label>
                  <input value="{{ old('first_name') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="first_name" name="first_name" placeholder="Enter your first name" />
                  @if($errors->has('first_name'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('first_name') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="middle_names" class="font-medium">{{ __('Middle Names') }}</label>
                  <input value="{{ old('middle_names') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="middle_names" name="middle_names" placeholder="Enter your middle names" />
                  @if($errors->has('middle_names'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('middle_names') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="last_name" class="font-medium">{{ __('Last Name') }}</label>
                  <input value="{{ old('last_name') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="last_name" name="last_name" placeholder="Enter your last name" />
                  @if($errors->has('last_name'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('last_name') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="username" class="font-medium">{{ __('Username') }}</label>
                  <input value="{{ old('username') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="username" name="username" placeholder="Enter your username" />
                  @if($errors->has('username'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('username') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="email" class="font-medium">{{ __('Email') }}</label>
                  <input value="{{ old('email') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" id="email" name="email" placeholder="Enter your email" />
                  @if($errors->has('email'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('email') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="tel_no" class="font-medium">{{ __('Tel No') }}</label>
                  <input value="{{ old('tel_no') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="text" id="tel_no" name="tel_no" placeholder="Enter your tel no. (+244) 987 654 321" />
                  @if($errors->has('tel_no'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('tel_no') }}</p>
                    @endif
                </div>
                <div class="space-y-1">
                  <label for="password" class="font-medium">{{ __('Password') }}</label>
                  <input value="{{ old('password') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="password" id="password" name="password" placeholder="Choose a strong password" />

                  @if($errors->has('password'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('password') }}</p>
                    @else
                    <p class="mt-2 text-sm">- Must be at least 8 characters long</p>
                    <p class="mt-2 text-sm">- Must include at least 1 symbol</p>
                    <p class="mt-2 text-sm">- Must include at least 1 uppercase character</p>
                    <p class="mt-2 text-sm">- Must include at least 1 number</p>
                  @endif
                </div>
                <div class="space-y-1">
                  <label for="password_confirmation" class="font-medium">{{ __('Confirm Password') }}</label>
                  <input value="{{ old('password_confirmation') }}" class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm your chosen password" />
                  @if($errors->has('password_confirmation'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('password_confirmation') }}</p>
                    @endif
                </div>
                <div class="flex items-center">
                  <input name="agree_terms" value="1" type="checkbox" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" {{ old('agree_terms') == 1 ? 'checked' : '' }} />
                  <span class="ml-2"> I accept <a href="/terms-conditions" class="font-medium text-isptec hover:text-gray-700">terms &amp; conditions</a></span>
                </div>
                <div class="flex items-center">
                  <input name="agree_notification" value="1" type="checkbox" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" {{ old('agree_notification') == 1 ? 'checked' : '' }} />
                  <span class="ml-2"> I would like to receive notifications</span>
                </div>
                <div class="flex items-center">
                  <input @click="openReview = !openReview" name="agree_contact_review" value="1" type="checkbox" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" {{ old('agree_contact_review') == 1 ? 'checked' : '' }} />
                  <span class="ml-2"> I would like to be contacted for reviews</span>
                </div>

                <div class="space-y-1" x-show="openReview">
                  <label for="review_interests" class="font-medium">{{ __('Review Interests') }}</label>
                  <textarea id="review_interests" name="review_interests" rows="3" class="shadow-sm focus:ring-isptec focus:border-isptec block w-full sm:text-sm border border-gray-300 rounded-md">{{ old('review_interests') }}</textarea>
                  <p class="mt-2 text-sm text-gray-500">Tell us about the fields that your're most passionate about.</p>
                </div>

                <div class="space-y-1">
                  <label for="avatar" class="font-medium">Photo</label>
                  <input id="avatar" name="avatar" type="file" class="" />
                  @if($errors->has('avatar'))
                    <p class="mt-2 text-sm text-red-500">{{ $errors->first('avatar') }}</p>
                    @else
                    <p class="mt-2 text-sm">- Must be an image file</p>
                    <p class="mt-2 text-sm">- Must be less than 2MB in size</p>
                    @endif
                </div>
                
                <button type="submit" class="inline-flex justify-center items-center space-x-2 border font-semibold focus:outline-none w-full px-4 py-3 leading-6 rounded-full border-gray-700 bg-gray-700 text-white hover:text-white hover:bg-isptec hover:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50 active:bg-indigo-700 active:border-indigo-700">
                  Create Account
                </button>
              </form>
              <!-- END Sign Up Form -->

              <div class="text-sm text-gray-500">
                <a href="{{ route('login') }}" class="font-medium text-isptec hover:text-gray-700">Return to Sign In</a>
              </div>
            </div>
          </div>
          <!-- END Sign Up Content -->

          <!-- Footer -->
          <div class="text-sm text-gray-500 text- pt-20">
            
          </div>
          <!-- END Footer -->
        </div>
      </div>
      <!-- END Sign Up Section -->
    </div>
  </main>
  <!-- END Page Content -->
</div>
<!-- END Page Container -->
</body>
</html>