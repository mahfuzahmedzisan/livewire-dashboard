<main class="h-full">
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6 max-w-fit">
                    <x-auth-header :title="__('User Confirm password')" :description="__(
                        'This is a secure area of the application. Please confirm your password before continuing.',
                    )" />

                    <!-- Session Status -->
                    <x-auth-session-status class="text-center" :status="session('status')" />

                    <form wire:submit="confirmPassword" class="flex flex-col gap-6">
                        <!-- Password -->
                        <flux:input wire:model="password" :label="__('Password')" type="password" required
                            autocomplete="new-password" :placeholder="__('Password')" viewable />

                        <flux:button variant="primary" type="submit" class="w-full">{{ __('Confirm') }}</flux:button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
