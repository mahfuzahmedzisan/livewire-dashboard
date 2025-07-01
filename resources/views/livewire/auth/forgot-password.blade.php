<main class="h-full">
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6 max-w-fit">
                    <x-auth-header :title="__('Forgot password')" :description="__('Enter your email to receive a password reset link')" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="sendPasswordResetLink" class="flex flex-col gap-6">
                        <!-- Email Address -->
                        <flux:input wire:model="email" :label="__('Email Address')" type="email" required autofocus
                            placeholder="email@example.com" viewable />

                        <flux:button variant="primary" type="submit" class="w-full">
                            {{ __('Email password reset link') }}
                        </flux:button>
                    </form>

                    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-400">
                        {{ __('Or, return to') }}
                        <flux:link :href="route('login')" wire:navigate>{{ __('log in') }}</flux:link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
