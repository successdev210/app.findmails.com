<x-guest-layout>
    <section class="bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('login') }}" novalidate>
                        @csrf
                        <div>
                            <label for="email" value="{{ __('Email') }} class=" block mb-2 text-sm font-medium
                                text-gray-900 dark:text-white">Your
                                email</label>
                            <input type="email" name="email" id="email" :value="old('email')" required autofocus
                                autocomplete="username"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                            @error('email')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div>
                            <label for="password" value="{{ __('Password') }}
                                class=" block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="Enter your password"
                                required autocomplete="current-password"
                                class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                            @error('password')
                            <div class="text-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox" name="remember"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember"
                                        class="text-gray-500 dark:text-gray-300">{{ __('Remember me') }}</label>
                                </div>
                            </div>
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">{{ __('Forgot your password?') }}</a>
                            @endif
                        </div>
                        <button type="submit"
                            class="mb-3 flex w-full items-center justify-center bg-blue-600 rounded-lg lg-primary px-7 pb-2.5 pt-3 text-center text-sm font-medium leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                            href="#!" role="button" data-te-ripple-init
                            data-te-ripple-color="light">{{ __('Log in') }}</button>
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="{{route('register')}}"
                                class="font-medium text-primary-600 hover:underline dark:text-primary-500">Sign
                                up</a>
                        </p>
                    </form>
                    <!-- Divider -->
                    <div
                        class="my-4 flex items-center before:mt-0.5 before:flex-1 before:border-t before:border-neutral-300 after:mt-0.5 after:flex-1 after:border-t after:border-neutral-300">
                        <p class="mx-4 mb-0 text-center font-semibold dark:text-neutral-200">
                            OR
                        </p>
                    </div>

                    <!-- Social login buttons -->
                    <a class="mb-3 flex w-full items-center justify-center rounded-lg lg-primary px-7 pb-2.5 pt-3 text-center text-sm font-medium leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]"
                        style="background-color: #3b5998" href="{{ route('auth.google') }}" role="button"
                        data-te-ripple-init data-te-ripple-color="light">
                        <!-- Facebook -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="mr-2 h-5 w-5" fill="currentColor"
                            viewBox="0 0 24 24">>
                            <path
                                d="M20.3081 10.2303C20.3081 9.55056 20.253 8.86711 20.1354 8.19836H10.7031V12.0492H16.1046C15.8804 13.2911 15.1602 14.3898 14.1057 15.0879V17.5866H17.3282C19.2205 15.8449 20.3081 13.2728 20.3081 10.2303Z"
                                fill="#3F83F8"></path>
                            <path
                                d="M10.7019 20.0006C13.3989 20.0006 15.6734 19.1151 17.3306 17.5865L14.1081 15.0879C13.2115 15.6979 12.0541 16.0433 10.7056 16.0433C8.09669 16.0433 5.88468 14.2832 5.091 11.9169H1.76562V14.4927C3.46322 17.8695 6.92087 20.0006 10.7019 20.0006V20.0006Z"
                                fill="#34A853"></path>
                            <path
                                d="M5.08857 11.9169C4.66969 10.6749 4.66969 9.33008 5.08857 8.08811V5.51233H1.76688C0.348541 8.33798 0.348541 11.667 1.76688 14.4927L5.08857 11.9169V11.9169Z"
                                fill="#FBBC04"></path>
                            <path
                                d="M10.7019 3.95805C12.1276 3.936 13.5055 4.47247 14.538 5.45722L17.393 2.60218C15.5852 0.904587 13.1858 -0.0287217 10.7019 0.000673888C6.92087 0.000673888 3.46322 2.13185 1.76562 5.51234L5.08732 8.08813C5.87733 5.71811 8.09302 3.95805 10.7019 3.95805V3.95805Z"
                                fill="#EA4335"></path>
                            <defs>
                                <clipPath id="clip0_13183_10121">
                                    <rect width="40" height="40" fill="white" transform="translate(0.5)"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Continue with goggle
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-guest-layout>