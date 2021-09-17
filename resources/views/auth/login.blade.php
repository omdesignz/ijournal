<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/inter.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script defer src="{{ asset('js/alpine.js') }}"></script>
</head>
<body>
    <!-- Page Container -->
<div id="page-container" class="flex flex-col mx-auto w-full min-h-screen bg-gray-100">
  <!-- Page Content -->
  <main id="page-content" class="flex flex-auto flex-col max-w-full">
    <div class="min-h-screen flex flex-col bg-cover bg-bottom" style="background-image: url('https://source.unsplash.com/wQLAGv4_OYs/1920x1200');">
      <!-- Sign In Section -->
      <div class="flex flex-grow md:w-8/12 lg:w-5/12 xl:w-4/12 bg-white shadow-xl">
        <div class="flex flex-col p-8 lg:p-16 xl:p-20 w-full">
          <!-- Sign In Content -->
          <div class="flex-grow flex items-center">
            <div class="w-full max-w-lg mx-auto space-y-10">
              <!-- Header -->  
              <div>
                <h1 class="text-4xl font-bold inline-flex items-center mb-1 space-x-3">
                <img class="h-8 w-auto sm:h-10" src="/infinity_bg_light.svg" alt="">
                </h1>
                <p class="text-gray-500">
                  Welcome, please sign in to your dashboard
                </p>
              </div>
              <!-- END Header -->

              <!-- Sign In Form -->
              <form method="POST" class="space-y-6" action="{{ route('login') }}">
              @csrf
                <div class="space-y-1">
                  <label for="email" class="font-medium">Email</label>
                  <input class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" name="email" id="email" placeholder="Enter your email" />
                  @if($errors->has('email'))
                  <p class="mt-2 text-sm text-red-500">{{ $errors->first('email') }}</p>
                  @endif
                </div>
                <div class="space-y-1">
                  <label for="password" class="font-medium">Password</label>
                  <input class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="password" name="password" id="password" placeholder="Enter your password" />
                  @if($errors->has('password'))
                  <p class="mt-2 text-sm text-red-500">{{ $errors->first('password') }}</p>
                  @endif
                </div>
                <div>
                  <button type="submit" class="inline-flex justify-center items-center space-x-2 font-semibold focus:outline-none w-full px-4 py-3 leading-6 rounded-full bg-gray-700 text-white hover:text-white hover:bg-isptec hover:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50 active:bg-gray-700 active:border-isptec">
                    Sign In
                  </button>
                  <div class="space-y-2 sm:flex sm:items-center sm:justify-between sm:space-x-2 sm:space-y-0 mt-4">
                    <label class="flex items-center">
                      <input type="checkbox" name="remember" class="border border-gray-300 rounded-full h-4 w-4 text-isptec focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" />
                      <span class="ml-2">
                        Remember me
                      </span>
                    </label>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="font-medium inline-block text-isptec hover:text-gray-700">{{ __('Forgot your password?') }}</a>
                    @endif
                        
                  </div>
                </div>
              </form>
              <!-- END Sign In Form -->

              <div class="text-sm text-gray-500">
                Don’t have an account yet?
                <a href="{{ route('register') }}" class="font-medium text-isptec hover:text-gray-700">Join us today</a>
              </div>
            </div>
          </div>
          <!-- END Sign In Content -->

          <!-- Footer -->
          <div class="text-sm text-gray-500 text- pt-20">
            
          </div>
          <!-- END Footer -->
        </div>
      </div>
      <!-- END Sign In Section -->
    </div>
  </main>
  <!-- END Page Content -->
</div>
<!-- END Page Container -->
</body>
</html>