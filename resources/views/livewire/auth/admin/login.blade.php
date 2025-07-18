<main class="h-full">
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6 max-w-fit">
                    <x-auth-header :title="__('Admin Login')" :description="__('Enter your email and password below to log in')" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="login" class="flex flex-col gap-6">
                        <!-- Email Address -->
                        <flux:input wire:model="email" :label="__('Email address')" type="email" required autofocus
                            autocomplete="email" placeholder="email@example.com" />

                        <!-- Password -->
                        <div class="relative">
                            <flux:input wire:model="password" :label="__('Password')" type="password" required
                                autocomplete="current-password" :placeholder="__('Password')" viewable />

                            @if (Route::has('password.request'))
                                <flux:link class="absolute end-0 top-0 text-sm" :href="route('password.request')"
                                    wire:navigate>
                                    {{ __('Forgot your password?') }}
                                </flux:link>
                            @endif
                        </div>

                        <!-- Remember Me -->
                        <flux:checkbox wire:model="remember" :label="__('Remember me')" />

                        <div class="flex items-center justify-end">
                            <flux:button variant="primary" type="submit" class="w-full">{{ __('Log in') }}
                            </flux:button>
                        </div>
                    </form>

                    @if (Route::has('register'))
                        <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
                            {{ __('Don\'t have an account?') }}
                            <flux:link :href="route('register')" wire:navigate>{{ __('Sign up') }}</flux:link>
                        </div>
                    @endif
                </div>
            </div>
        </div>

    </div>
</main>
