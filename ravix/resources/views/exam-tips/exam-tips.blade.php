<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Exam Tips') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-stone-900 dark:bg-stone-900 shadow sm:rounded-lg border border-neutral-600 dark:border-neutral-600">
                <div class="max-w-xl">
                    @include('exam-tips.partials.ccna')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-stone-900 dark:bg-stone-900 shadow sm:rounded-lg border border-neutral-600 dark:border-neutral-600">
                <div class="max-w-xl">
                    @include('exam-tips.partials.security+')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-stone-900 dark:bg-stone-900 shadow sm:rounded-lg border border-neutral-600 dark:border-neutral-600">
                <div class="max-w-xl">
                    @include('exam-tips.partials.cysa+')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
