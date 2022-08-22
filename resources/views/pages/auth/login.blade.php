@extends('layouts.empty')

@section('body-content')
    <section class="bg-gray-50 dark:bg-gray-900 h-screen">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0 h-screen gap-10">
            <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
                <img class="w-auto h-12 mr-2" src="{{ asset('images/logo-vipdasarathi.png') }}" alt="logo">
            </a>
            <div class="w-full bg-white rounded-lg overflow-hidden border border-gray-200 sm:max-w-md flex flex-col divide-y">
                <div class="flex justify-between gap-4 px-6 py-4">
                    <h4 class="font-semibold text-center w-full">Sign in to your account</h4>
                </div>
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <form class="grid grid-cols-1 gap-4" action="#">
                        <div class="grid grid-cols-1 gap-4 mb-2">
                            <x-input label="Username" placeholder="Enter username" />
                            <x-input label="Password" type="password" placeholder="Enter password" />
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <x-checkbox id="1" label="Remember Me" />
                            </div>
                            <a href="#" class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot password?</a>
                        </div>
                    </form>
                </div>
                <div class="flex justify-between gap-4 px-6 py-4 bg-gray-50">
                    <x-button primary class="w-full" label="Sign In" />
                </div>
            </div>
        </div>
    </section>
@endsection
