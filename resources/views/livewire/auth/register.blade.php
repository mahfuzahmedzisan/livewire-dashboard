<main class="h-full">
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6 max-w-fit">
                    <x-auth-header :title="__('Create an account')" :description="__('Enter your details below to create your account')" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="register" class="flex flex-col gap-6">
                        <!-- Name -->
                        <flux:input wire:model="name" :label="__('Name')" type="text" required autofocus
                            autocomplete="name" :placeholder="__('Full name')" />

                        <!-- Email Address -->
                        <flux:input wire:model="email" :label="__('Email address')" type="email" required
                            autocomplete="email" placeholder="email@example.com" />

                        <!-- Password -->
                        <flux:input wire:model="password" :label="__('Password')" type="password" required
                            autocomplete="new-password" :placeholder="__('Password')" viewable />

                        <!-- Confirm Password -->
                        <flux:input wire:model="password_confirmation" :label="__('Confirm password')" type="password"
                            required autocomplete="new-password" :placeholder="__('Confirm password')" viewable />

                        <div class="flex items-center justify-end">
                            <flux:button type="submit" variant="primary" class="w-full">
                                {{ __('Create account') }}
                            </flux:button>
                        </div>
                    </form>

                    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
                        {{ __('Already have an account?') }}
                        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
