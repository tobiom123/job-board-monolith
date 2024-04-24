<x-layout heading="Login">
    <form method="POST" action="/login">
      @csrf
      
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <h2 class="text-base font-semibold leading-7 text-gray-900">Login</h2>
          <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of details from you.</p>
          <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field class="sm:col-span-4">
              <x-form-label for="email">Email</x-form-label>
              <div class="mt-2">
                <x-form-input name="email" id="email" :value="old('email')" placeholder="email@example.com" type="email" required />
                <x-form-error name='email' />
              </div>
            </x-form-field>
            <x-form-field class="sm:col-span-4">
              <x-form-label for="password">Password</x-form-label>
              <div class="mt-2">
                <x-form-input name="password" id="password" type="password" required />
                <x-form-error name='password' />
              </div>
            </x-form-field>
          </div>
        </div>
        <div class="mt-6 flex items-center justify-end gap-x-6">
          <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
          <x-form-button>Login</x-form-button>
        </div>
      </div>
    </form>
  </x-layout>