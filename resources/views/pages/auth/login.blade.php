@extends('layouts.empty')

@section('body-content')
    <section class="bg-gray-50 dark:bg-gray-900 h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 h-screen gap-10">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-auto h-12 mr-2" src="{{ asset('images/logo-vipdasarathi.png') }}" alt="logo">
            </a>
            <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div class="grid grid-cols-1 gap-4 mb-2">
                            <x-input label="Username" placeholder="Enter username" />
                            <x-input label="Password" type="password" placeholder="Enter password" />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <x-checkbox id="1" label="Remember Me" />
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                                                                                                           password?</a>
                        </div>
                        <x-button primary class="w-full" label="Sign In" />
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
