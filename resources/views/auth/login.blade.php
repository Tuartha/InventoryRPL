<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

        <div class="flex flex-col justify-center px-6 py-12 lg:px-8 rounded-xl shadow-gray-600">
            <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="w-auto mx-auto h-[70px]" src="<?= asset('assets/skensaLogo.svg') ?>" alt="Logo skensa">
                <h2 class="mt-5 font-bold tracking-tight text-center text-gray-900 text-2xl">INVENTORI LABORATORIUM</h2>
                <h2 class="mt-1 font-bold tracking-tight text-center text-gray-900 text-2xl">RPL</h2>
            </div>

            <div class="mt-5 sm:mx-auto sm:w-full sm:max-w-sm">
                <form method="POST" action="{{ route('login') }}" class="space-y-6">
                    @csrf
                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block font-medium text-gray-900 text-sm">Email address</label>
                        <div class="mt-2">
                            <input type="email" name="email" id="email" autocomplete="email" required
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm" 
                                   value="{{ old('email') }}">
                        </div>
                    </div>

                    <!-- Password -->
                    <div>
                        <div class="flex items-center justify-between">
                            <label for="password" class="block font-medium text-gray-900 text-sm">Password</label>
                            <div class="text-sm">
                                <a href="{{ route('password.request') }}" class="font-semibold text-[#2563EB] hover:text-[#375394]">Forgot password?</a>
                            </div>
                        </div>
                        <div class="mt-2">
                            <input type="password" name="password" id="password" autocomplete="current-password" required
                                   class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm">
                        </div>
                    </div>

                    <!-- Remember Me -->
                    {{-- <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                            <span class="ms-2 text-sm text-gray-600">Remember me</span>
                        </label>
                    </div> --}}

                    <!-- Submit Button -->
                    <div>
                        <button type="submit"
                                class="flex w-full justify-center rounded-md bg-[#2563EB] px-3 py-1.5 text-sm font-semibold text-white shadow-sm hover:bg-[#375394] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                            Sign in
                        </button>
                    </div>

                    <div class="flex justify-center">
                        <p>Belum memiliki akun? <a class="text-gray-500 hover:text-blue-700" href="{{ route('register') }}">Register</a></p>
                    </div>
                </form>
            </div>
        </div>
</x-guest-layout>