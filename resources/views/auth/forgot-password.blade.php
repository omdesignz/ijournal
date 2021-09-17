<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="{{ asset('css/inter.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('js/alpine.js') }}"></script>
</head>
<body>
    <!-- Page Container -->
<div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
  <!-- Page Content -->
  <main id="page-content" class="flex flex-auto flex-col max-w-full">
    <div class="min-h-screen flex flex-col bg-cover bg-bottom" style="background-image: url('https://source.unsplash.com/Lki74Jj7H-U/1920x1200');">
      <!-- Password Reset Section -->
      <div class="flex flex-grow md:w-8/12 lg:w-5/12 xl:w-4/12 bg-white shadow-xl">
        <div class="flex flex-col p-8 lg:p-16 xl:p-20 w-full">
          <!-- Password Reset Content -->
          <div class="flex-grow flex items-center">
            <div class="w-full max-w-lg mx-auto space-y-10">
              <!-- Header -->
              <div>
                <h1 class="text-4xl font-bold inline-flex items-center mb-1 space-x-3">
                <img class="h-8 w-auto sm:h-10" src="/infinity_bg_light.svg" alt="">
                  <span></span>
                </h1>
                <p class="text-gray-500">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                </p>
              </div>
              <!-- END Header -->

              <!-- Password Reset Form -->
              <form method="POST" action="{{ route('password.email') }}" class="space-y-6">
              @csrf
                <div class="space-y-1">
                  <label for="email" class="font-medium">Email</label>
                  <input class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" id="email" name="email" placeholder="Enter your email" />
                  @if($errors->has('email'))
                  <p class="mt-2 text-sm text-red-500">{{ $errors->first('email') }}</p>
                  @endif
                </div>
                <button type="submit" class="inline-flex justify-center items-center space-x-2 font-semibold focus:outline-none w-full px-4 py-3 leading-6 rounded-full bg-gray-700 text-white hover:text-white hover:bg-isptec hover:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50 active:bg-gray-700 active:border-gray-700">
                {{ __('Email Password Reset Link') }}
                </button>
              </form>
              <!-- END Password Reset Form -->

              <div class="text-sm text-gray-500">
                <a href="{{ route('login') }}" class="font-medium text-isptec hover:text-gray-700">Return to Sign In</a>
              </div>
            </div>
          </div>
          <!-- END Password Reset Content -->

          <!-- Footer -->
          <div class="text-sm text-gray-500 text- pt-20">
            
          </div>
          <!-- END Footer -->
        </div>
      </div>
      <!-- END Password Reset Section -->
    </div>
  </main>
  <!-- END Page Content -->
</div>
<!-- END Page Container -->
</body>
</html>