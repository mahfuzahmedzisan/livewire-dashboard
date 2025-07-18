<main class="h-full">
    <div class="container mx-auto flex items-center justify-center h-full">
        <div class="rounded-xl border bg-white dark:bg-stone-950 dark:border-stone-800 text-stone-800 shadow-xs">
            <div class="px-10 py-8">
                <div class="flex flex-col gap-6 max-w-fit">
                    <flux:text class="text-center">
                        {{ __('Please verify your email address by clicking on the link we just emailed to you.') }}
                    </flux:text>

                    @if (session('status') == 'verification-link-sent')
                        <flux:text class="text-center font-medium !dark:text-green-400 text-green-600!">
                            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                        </flux:text>
                    @endif

                    <div class="flex flex-col items-center justify-between space-y-3">
                        <flux:button wire:click="sendVerification" variant="primary" class="w-full">
                            {{ __('Resend verification email') }}
                        </flux:button>

                        <flux:link class="text-sm cursor-pointer" wire:click="logout">
                            {{ __('Log out') }}
                        </flux:link>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
