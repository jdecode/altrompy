<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <title>{{ config('app.name', 'SaaS Starter') }}</title>
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @fluxAppearance
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-900 antialiased">
        <header class="w-full border-b border-zinc-100 dark:border-zinc-800 bg-white/80 dark:bg-zinc-900/80 backdrop-blur-md sticky top-0 z-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between items-center h-16">
                    <div class="flex items-center">
                        <a href="/" class="flex-shrink-0 flex items-center gap-2">
                             <x-app-logo class="size-8" />
                             <span class="font-bold text-xl tracking-tight text-zinc-900 dark:text-white">{{ config('app.name', 'Altrompy') }}</span>
                        </a>
                    </div>
                    <div class="flex items-center gap-4">
                        <flux:button
                            x-data
                            x-on:keydown.d.window="if (document.activeElement.localName === 'body') $flux.dark = !$flux.dark"
                            x-on:click="$flux.dark = ! $flux.dark"
                            icon="moon"
                            variant="subtle"
                            aria-label="Toggle dark mode"
                        />

                        @if (Route::has('login'))
                            @auth
                                <flux:button href="{{ url('/dashboard') }}" variant="primary" size="sm">Dashboard</flux:button>
                            @else
                                <flux:button href="{{ route('login') }}" variant="filled" size="sm">Log in</flux:button>
                                @if (Route::has('register'))
                                    <flux:button href="{{ route('register') }}" variant="primary" size="sm">Register</flux:button>
                                @endif
                            @endauth
                        @endif
                    </div>
                </div>
            </div>
        </header>

        <main>
            <!-- Hero Section -->
            <div class="relative pt-20 pb-20 lg:pt-32 lg:pb-32 overflow-hidden">
                <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <flux:badge size="lg" variant="pill" color="zinc" class="mb-6">The Ultimate Foundation</flux:badge>
                    <h1 class="text-4xl tracking-tight font-extrabold text-zinc-900 dark:text-white sm:text-5xl md:text-6xl mb-6">
                        <span class="block">Build your next idea</span>
                        <span class="block text-indigo-600 dark:text-indigo-400">faster than ever</span>
                    </h1>
                    <p class="mt-4 max-w-2xl mx-auto text-xl text-zinc-500 dark:text-zinc-400">
                        Launch your SaaS with a professional, battle-tested boilerplate. Includes authentication, payments, dashboard, and more—powered by Laravel and Flux Pro.
                    </p>
                    <div class="mt-10 max-w-sm mx-auto sm:max-w-none sm:flex sm:justify-center gap-4">
                        @if (Route::has('login'))
                            <flux:button href="{{ route('login') }}" variant="primary" icon-trailing="arrow-right">Get Started</flux:button>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Features Grid -->
            <div class="py-24 bg-zinc-50 dark:bg-zinc-800/50">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="text-center mb-16">
                        <h2 class="text-base font-semibold text-indigo-600 dark:text-indigo-400 tracking-wide uppercase">Everything You Need</h2>
                        <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-zinc-900 dark:text-white sm:text-4xl">Built for Modern SaaS</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                        <flux:card class="p-8">
                            <flux:icon name="bolt" class="size-10 text-indigo-500 mb-6" />
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">Rapid Development</h3>
                            <p class="text-zinc-500 dark:text-zinc-400">
                                Pre-built components and layouts mean you spend less time setting up and more time shipping features.
                            </p>
                        </flux:card>

                        <flux:card class="p-8">
                            <flux:icon name="lock-closed" class="size-10 text-indigo-500 mb-6" />
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">Secure by Default</h3>
                            <p class="text-zinc-500 dark:text-zinc-400">
                                Enterprise-grade security with Laravel's robust authentication and authorization systems baked in.
                            </p>
                        </flux:card>

                        <flux:card class="p-8">
                            <flux:icon name="swatch" class="size-10 text-indigo-500 mb-6" />
                            <h3 class="text-lg font-bold text-zinc-900 dark:text-white mb-2">Beautiful UI</h3>
                            <p class="text-zinc-500 dark:text-zinc-400">
                                Crafted with Flux Pro components for a stunning, accessible, and responsive user interface.
                            </p>
                        </flux:card>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="bg-indigo-600 dark:bg-indigo-900 py-16">
                 <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                    <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                        <span class="block">Ready to dive in?</span>
                        <span class="block">Start building your application today.</span>
                    </h2>
                    <div class="mt-8 flex justify-center">
                        @if (Route::has('login'))
                            <flux:button href="{{ route('login') }}" variant="filled" color="indigo">Log in to Dashboard</flux:button>
                        @endif
                    </div>
                </div>
            </div>
        </main>

        <footer class="bg-white dark:bg-zinc-900 border-t border-zinc-100 dark:border-zinc-800 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
                 <div class="flex items-center gap-2">
                    <x-app-logo class="size-6 text-zinc-900 dark:text-white" />
                    <span class="font-bold text-lg text-zinc-900 dark:text-white">{{ config('app.name', 'SaaS Starter') }}</span>
                </div>
                <p class="text-zinc-400 text-sm">
                    &copy; {{ date('Y') }} {{ config('app.name', 'SaaS Starter') }}. All rights reserved.
                </p>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
