<form method="POST" action="index">
    @csrf

    <!-- Email Address -->
    <div>
        <label for="email" class="block font-medium text-sm text-gray-700">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
    </div>

    <!-- Password -->
    <div class="mt-4">
        <label for="password" class="block font-medium text-sm text-gray-700">Password</label>
        <input id="password" type="password" name="password" required autocomplete="current-password"
            class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 block mt-1 w-full">
    </div>

    <!-- Remember Me -->
    <div class="block mt-4">
        <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" name="remember"
                class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
            <span class="ml-2 text-sm text-gray-600">Remember me</span>
        </label>
    </div>

    <div class="flex items-center justify-end mt-4">
        <button type="submit"
            class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">
            Log in
        </button>
    </div>
</form>
