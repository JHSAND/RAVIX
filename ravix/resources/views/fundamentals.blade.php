<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Fundamentals') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-stone-900 dark:bg-stone-900 shadow sm:rounded-lg border border-neutral-600 dark:border-neutral-600">
                <section class=" flex justify-between w-full">
                    <section class="max-w-xl">
                        <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                            {{ __('ペネトレーションテスト') }}
                        </h2>

                        <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                            {{ __('(攻撃のシナリオを作成し)実際の攻撃者を模倣して脆弱性を悪用し、どのような影響があるのかを測るセキュリティテストの一種') }}
                        </p>

                        <h3 class="mt-6 text-lg text-gray-600 dark:text-gray-100">
                            {{ __("主な3種類:") }}
                        </h3>
                        <img src="{{ asset('images/penetration_test_type.png') }}" alt="Type of Penetration Test">
                    </section>
                    <section class="right_box flex flex-col justify-center gap-10 w-100">
                        <section>
                            <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                                {{ __('WhiteBox') }}
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                {{ __('対象の企業の内部構造等の情報を全て与えられたうえで行うテスト') }}
                            </p>
                        </section>
                        <section>
                            <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                                {{ __('GrayBox') }}
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                {{ __('BlackBoxとWhiteBoxの中間に位置する。部分的な事前情報を与えられたうえで行うテスト') }}
                            </p>
                        </section>
                        <section>
                            <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                                {{ __('BlackBox') }}
                            </h2>
                            <p class="text-sm text-gray-600 dark:text-gray-300">
                                {{ __('対象の企業の内部構造等の情報を全く与えられずに行うテスト') }}
                            </p>
                        </section>
                    </section>
                </section>
            </div>

            <div class="p-4 sm:p-8 bg-stone-900 dark:bg-stone-900 shadow sm:rounded-lg border border-neutral-600 dark:border-neutral-600">
                <section class="flex justify-between">
                    <section class="max-w-xl">
                        <section>
                            <h2 class="text-xl font-medium text-gray-900 dark:text-gray-100">
                                {{ __('TCP SYNスキャン') }}
                            </h2>
                            <p class="mt-2 text-sm text-gray-600 dark:text-gray-300">
                                {{ __('TCPは下図のように、3WAY-HANDSHAKEで通信を確立させる。初めにSYNパケットを送信し、ACKが返ってくればそのポートは空いていると判断するため、より高速にスキャンを行うことができる。しかし、IDSやIPSに検知されやすく必ずしもその結果は正しいものとは限らない。') }}
                            </p>
                        </section>
                    </section>
                    <section class="max-w-sm">
                        <img src="{{ asset('images/TCP-3way-handshake.gif') }}" alt="TCP 3 WAY HANDSHAKE">
                    </section>
                </section>
            </div>

            <div class="p-4 sm:p-8 bg-stone-900 dark:bg-stone-900 shadow sm:rounded-lg border border-neutral-600 dark:border-neutral-600">
                <div class="max-w-xl">
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
