@extends('layouts.front')

@section('content')
<main>
    
<!-- <div class="bg-cover" style="background-image: url('https://source.unsplash.com/wpU4veNGnHg/1280x800');">
      <div class="bg-gray-900 bg-opacity-95">
        <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
          <div class="flex flex-col lg:flex-row lg:items-center space-y-16 lg:space-y-0 lg:space-x-16">
            
            <div class="lg:w-2/5 text-white">
              <div class="text-sm uppercase font-bold tracking-wider mb-1 text-isptec">
                We reply in 24hrs
              </div>
              <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                Get in touch
              </h2>
              <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-isptec">
                If something does not make sense, feel free to contact us and we will get back to you as soon as possible.
              </h3>
              <div class="text-isptec mt-10">
                <h4 class="uppercase font-semibold tracking-wider mb-4">
                  ISPTEC - Instituto Superior Politécnico de Tecnologias e Ciências
                </h4>
                <div class="leading-relaxed">
                  Av. Luanda Sul, Via Lateral S10<br />
                  Talatona, Angola<br />
                  <abbr title="Phone">P:</abbr> (+244) XXX XXX XXX
                </div>
              </div>
            </div>
</div> -->

<div class="bg-cover" style="background-image: url('https://source.unsplash.com/wpU4veNGnHg/1280x800');">
      <div class="bg-gray-900 bg-opacity-95">
        <div class="container xl:max-w-7xl mx-auto px-4 py-16 lg:px-8 lg:py-32">
          <div class="flex flex-col lg:flex-row lg:items-center space-y-16 lg:space-y-0 lg:space-x-16">
            <!-- Heading and Company Info -->
            <div class="lg:w-2/5 text-white">
            <div class="text-sm uppercase font-bold tracking-wider mb-1 text-isptec">
                We reply in 24hrs
              </div>
              <h2 class="text-3xl md:text-4xl font-extrabold mb-4">
                Get in touch
              </h2>
              <h3 class="text-lg md:text-xl md:leading-relaxed font-medium text-isptec">
                If something does not make sense, feel free to contact us and we will get back to you as soon as possible.
              </h3>
              <div class="text-isptec mt-10">
                <h4 class="uppercase font-semibold tracking-wider mb-4">
                  ISPTEC - Instituto Superior Politécnico de Tecnologias e Ciências
                </h4>
                <div class="leading-relaxed">
                  Av. Luanda Sul, Via Lateral S10<br />
                  Talatona, Angola<br />
                  <abbr title="Phone">P:</abbr> (+244) XXX XXX XXX
                </div>
              </div>
            </div>
            <!-- END Heading and Company Info -->

            <!-- Contact Form -->
            <div class="lg:w-3/5 p-2 bg-white bg-opacity-10 rounded-xl">
              <form onsubmit="return false;" class="bg-white rounded-lg p-6 space-y-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                  <div class="space-y-1">
                    <label for="tk-contact-firstname" class="font-medium">First Name</label>
                    <input class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" id="tk-contact-firstname" />
                  </div>
                  <div class="space-y-1">
                    <label for="tk-contact-lastname" class="font-medium">Last Name</label>
                    <input class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" id="tk-contact-lastname" />
                  </div>
                </div>
                <div class="space-y-1">
                  <label for="tk-contact-email" class="font-medium">Email</label>
                  <input class="block border placeholder-gray-400 px-5 py-3 leading-6 w-full rounded border-gray-200 focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" type="email" id="tk-contact-email" />
                </div>
                <div class="space-y-1">
                  <label for="tk-contact-department" class="font-medium">Subject</label>
                  <select class="block border border-gray-200 rounded px-5 py-3 w-full focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" id="tk-contact-department">
                    <option>Article Submission</option>
                    <option>Support</option>
                    <option>Complaints</option>
                  </select>
                </div>
                <div class="space-y-1">
                  <label for="tk-contact-message" class="font-medium">Message</label>
                  <textarea class="block border border-gray-200 rounded placeholder-gray-400 px-5 py-3 w-full focus:border-isptec focus:ring focus:ring-isptec focus:ring-opacity-50" id="tk-contact-message" rows="6"></textarea>
                </div>
                <button type="button" class="inline-flex justify-center items-center space-x-2 font-semibold focus:outline-none px-4 py-3 leading-6 rounded-full bg-gray-900 text-white hover:text-gray-900 hover:bg-isptec">
                  <svg fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg" class="opacity-50 hi-solid hi-paper-airplane inline-block w-5 h-5"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                  <span>Send Message</span>
                </button>
              </form>
            </div>
            <!-- END Contact Form -->
          </div>
        </div>
      </div>
    </div>
</main>
@endsection