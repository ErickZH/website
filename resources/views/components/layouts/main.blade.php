<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />

    <meta name="application-name" content="{{ config('app.name') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>PXP: Extended Preprocessor</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
    <script src="//unpkg.com/alpinejs" defer></script>
</head>

<body class="antialiased min-h-screen flex flex-col">
    <header x-data="menu()" class="bg-white">
        <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex flex-1">
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Documentation</a>
                    <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Blog</a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700" x-on:click="toggle()">
                        <span class="sr-only">Open main menu</span>
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
            <a href="{{ route('index') }}" class="-m-1.5 p-1.5">
                <span class="sr-only">PXP</span>
                <x-logo class="h-5 w-auto mt-2" />
            </a>
            <div class="flex flex-1 justify-end">
                <a href="https://github.com/pxp-lang" target="_blank" class="text-sm font-semibold leading-6 text-gray-900 inline-flex items-center gap-x-4">
                    <x-icons.github class="w-5 h-5" />
                    <span class="sr-only">GitHub</span>
                </a>
            </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div x-show="show" x-cloak class="lg:hidden" role="dialog" aria-modal="true">
            <!-- Background backdrop, show/hide based on slide-over state. -->
            <div class="fixed inset-0 z-10"></div>
            <div class="fixed inset-y-0 left-0 z-10 w-full overflow-y-auto bg-white px-6 py-6">
                <div class="flex items-center justify-between">
                    <div class="flex flex-1">
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700" x-on:click="close()">
                            <span class="sr-only">Close menu</span>
                            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <a href="{{ route('index') }}" class="-m-1.5 p-1.5">
                        <span class="sr-only">PXP</span>
                        <x-logo class="h-5 w-auto mt-2" />
                    </a>
                    <div class="flex flex-1 justify-end">
                        <a href="https://github.com/pxp-lang" target="_blank" class="text-sm font-semibold leading-6 text-gray-900 inline-flex items-center gap-x-4">
                            <x-icons.github class="w-5 h-5" />
                        </a>
                    </div>
                </div>
                <div class="mt-6 space-y-2">
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Documentation</a>
                    <a href="#"
                        class="-mx-3 block rounded-lg px-3 py-2 text-base font-semibold leading-7 text-gray-900 hover:bg-gray-50">Blog</a>
                </div>
            </div>
        </div>
    </header>

    <main class="flex-1">
        {{ $slot }}
    </main>
</body>
</html>
