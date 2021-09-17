@extends('layouts.app')

@section('title')
<div class="md:flex md:items-center md:justify-between">
  <div class="flex-1 min-w-0">
    <h2 class="text-2xl font-bold leading-7 text-black sm:text-3xl sm:truncate">
      Users
    </h2>
  </div>
  <div class="mt-4 flex md:mt-0 md:ml-4">
    <a href="/users/create" class="inline-flex items-center px-4 py-2 border border-transparent rounded-full shadow-sm text-sm font-medium text-white bg-gray-600 hover:bg-isptec focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-isptec">
      Add User
    </a>
  </div>
</div>
@endsection

@section('content')
<!-- This example requires Tailwind CSS v2.0+ -->


<!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-auto border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-isptec">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                First Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                Middle Names
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                Tel No
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-900 uppercase tracking-wider">
                Roles
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th>
            </tr>
          </thead>
          <tbody>

            @forelse ($users as $user)
    
            <tr class="bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                {{ strtoupper($user->first_name) }}
              </td>
              
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $user->middle_names }}
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $user->last_name }}
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $user->email }}
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              {{ $user->tel_no }}
              </td>

              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
              @foreach($user->roles as $role)
              {{ $role->label }}
              @endforeach
              </td>
              
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <span class="relative inline-flex shadow-sm rounded-md" x-data="{ open: false }">
                <button type="button" class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-isptec focus:border-isptec">
                  More Options
                </button>
                <span class="-ml-px relative block">
                  <button @click="open = !open" type="button" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-1 focus:ring-isptec focus:border-isptec" id="option-menu-button" aria-expanded="true" aria-haspopup="true">
                    <span class="sr-only">Open options</span>
                    <!-- Heroicon name: solid/chevron-down -->
                    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                  </button>

                  <!--
                    Dropdown menu, show/hide based on menu state.

                    Entering: "transition ease-out duration-100"
                      From: "transform opacity-0 scale-95"
                      To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                      From: "transform opacity-100 scale-100"
                      To: "transform opacity-0 scale-95"
                  -->
                  <div class="origin-top-right z-10 absolute right-0 mt-2 -mr-1 w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none" user="menu" aria-orientation="vertical" aria-labelledby="option-menu-button" tabindex="-1" x-show="open">
                    <div class="py-1" user="none">
                      <!-- Active: "bg-gray-100 text-gray-900", Not Active: "text-gray-700" -->

                      <a href="/users/{{ $user->id }}" class="text-gray-700 block px-4 py-2 text-sm" user="menuitem" tabindex="-1" id="option-menu-item-1">
                        View User
                      </a>

                      <a href="/users/{{ $user->id }}/edit" class="text-gray-700 block px-4 py-2 text-sm" user="menuitem" tabindex="-1" id="option-menu-item-1">
                        Modify User
                      </a>

                    </div>
                  </div>
                </span>
              </span>
              </td>
            </tr>

            @empty
                
                <p>No users found</p>

            @endforelse

          </tbody>
          <tfoot>
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900" colspan="5">
              {{ $users->links() }}
              </td>
            </tr>
          </tfoot>
        </table>

      </div>
    </div>
  </div>
</div>

@endsection