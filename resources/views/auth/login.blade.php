<x-layouts.guest title="Login Page">
    <div class="flex flex-col justify-center min-h-full px-6 py-12 lg:px-8">
          <div class="px-10 pb-10 bg-black/10 dark:bg-white/10 rounded-2xl sm:mx-auto sm:w-full sm:max-w-sm">
            <div class="">
              <a href="{{route('index')}}">
                <x-ui.image src="logo.svg" alt="very nice logo" />
              </a>
              <x-text.h2 class="mt-10 text-center">
                Sign in to your account
              </x-text.h2>
            </div>
          
            <div class="mt-10 ">
              <form class="space-y-6" action="{{route('auth:login')}}" method="POST">
                @csrf
                <div>
                  <label for="email" class="block text-sm font-medium leading-6 ">Email address</label>
                  <div class="mt-2">
                    <input id="email" name="email" type="email" autocomplete="email" required class="block w-full text-black px-4 rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <div class="flex items-center justify-between">
                    <label for="password" class="block text-sm font-medium leading-6 ">Password</label>
                    {{-- <div class="text-sm">
                      <a href="#" class="font-semibold text-orange-600 hover:text-orange-500">Forgot password?</a>
                    </div> --}}
                  </div>
                  <div class="mt-2">
                    <input id="password" name="password" type="password" autocomplete="current-password" required class="block px-4 text-black w-full rounded-md border-0 py-1.5  shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-orange-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
          
                <div>
                  <button type="submit" class="flex w-full justify-center rounded-md bg-orange-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-orange-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600">Sign in</button>
                </div>
              </form>
          
            </div>
          </div>
      </div>
</x-layouts.guest>
