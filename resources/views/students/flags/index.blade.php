<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Flag Submission') }}
        </h2>
    </x-slot>
    <div>
        <div class="max-w-6xl py-10 mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                            <table class="w-full min-w-full divide-y divide-gray-200">
                                <thead>
                                    <tr>
                                        <th scope="col" width="50"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            IP
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Instructions
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Flag Input
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Flag Status
                                        </th>
                                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            10.20.0.50
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            Access <code>/WEB-INF/server.xml</code>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <div class="mb-4 md:w-1/2">
                                                <x-jet-input id="flag" type="text" placeholder="OBR{6342599be08384d}"
                                                    name="flag" required autofocus />
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                Flag Incorrect
                                            </span>
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Flag Correct!
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                            <a href={{ Route('OpenVPNDownload') }}>
                                                <x-jet-button class="ml-4">
                                                    {{ __('Submit Flag') }}
                                                </x-jet-button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            10.20.0.50
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            Access <code>C:\\Creds.txt</code>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <div class="mb-4 md:w-1/2">
                                                <x-jet-input id="flag" type="text" placeholder="OBR{6342599be08384d}"
                                                    name="flag" required autofocus />
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                Flag Incorrect
                                            </span>
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Flag Correct!
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                            <a href={{ Route('OpenVPNDownload') }}>
                                                <x-jet-button class="ml-4">
                                                    {{ __('Submit Flag') }}
                                                </x-jet-button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            10.20.0.50
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            Access <code>/WEB-INF/server.xml</code>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <div class="mb-4 md:w-1/2">
                                                <x-jet-input id="flag" type="text" placeholder="OBR{6342599be08384d}"
                                                    name="flag" required autofocus />
                                            </div>
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                Flag Incorrect
                                            </span>
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Flag Correct!
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                            <a href={{ Route('OpenVPNDownload') }}>
                                                <x-jet-button class="ml-4">
                                                    {{ __('Submit Flag') }}
                                                </x-jet-button>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
