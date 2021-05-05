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
                                            {{ __('IP') }}
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            {{ __('Instructions') }}
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            {{ __('Flag Input') }}
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            {{ __('Flag Status') }}
                                        </th>
                                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            {{ __('10.20.0.50') }}
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            {{ __('Investigate Apache AJP') }}
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            @if (isset($flag) && $flag)
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    Flag Correct!
                                                </span>
                                            @elseif (isset($flag) && ($flag === false))
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                    Flag Incorrect
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-blue-500 bg-gray-100 rounded-full">
                                                    No flag submitted
                                                </span>
                                            @endif
                                        </td>
                                        <form action="SubmitFlag" method="POST">
                                            @csrf
                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                <div class="mb-4 md:w-1/2">
                                                    <x-jet-input type="text" name="CheckFlag1"
                                                        placeholder="OBR{6342599be08384d}" required autofocus />
                                                    <x-jet-button type="submit" class="ml-4">
                                                        {{ __('Check Flag') }}
                                                    </x-jet-button>
                                                </div>
                                            </td>
                                        </form>
                                    </tr>
                                </tbody>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            10.30.0.58
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            Look for Private Keys
                                        </td>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            @if (isset($flag2) && $flag2)
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                    Flag Correct!
                                                </span>
                                            @elseif (isset($flag2) && ($flag2 === false))
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-red-800 bg-red-100 rounded-full">
                                                    Flag Incorrect
                                                </span>
                                            @else
                                                <span
                                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-blue-500 bg-gray-100 rounded-full">
                                                    No flag submitted
                                                </span>
                                            @endif
                                        </td>
                                        <form action="SubmitFlag" method="POST">
                                            @csrf
                                            <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                                <div class="mb-4 md:w-1/2">
                                                    <x-jet-input type="text" name="CheckFlag2"
                                                        placeholder="OBR{6508820d92ab75e}" required autofocus />
                                                    <x-jet-button type="submit" class="ml-4">
                                                        {{ __('Check Flag') }}
                                                    </x-jet-button>
                                                </div>
                                            </td>
                                        </form>
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
