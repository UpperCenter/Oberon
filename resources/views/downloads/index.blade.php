<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Downloads') }}
        </h2>
    </x-slot>

    <div class="p-6 bg-white border-b border-gray-200 sm:px-20">
        <div class="mt-8 text-2xl">
            OpenVPN Configuration Downloads
        </div>

        <div class="mt-6 text-gray-500">
            This section will allow you to download OpenVPN configuration files specific to your user and access.
            It will allow you to access the internal Cyber Range network and begin the exercise. You won't be able to
            access internal systems unless you're connected using OpenVPN.
        </div>
        <div class="flex items-center justify-center mt-4">
            <a href={{ Route('OpenVPNDownload') }} target="_blank">
                <x-jet-button class="ml-4">
                    {{ __('Download Your Configuration') }}
                </x-jet-button>
            </a>
        </div>
    </div>
</x-app-layout>
