<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Oberon Cyber Range Control Center') }}
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
                                            ID
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Name
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Email
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Email Verified At
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase bg-gray-50">
                                            Roles
                                        </th>
                                        <th scope="col" width="200" class="px-6 py-3 bg-gray-50">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    <tr>
                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            1
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            Thomas Hindby
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            tom@uppercenter.dev
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            Monday 14th April 2021 - 13:02
                                        </td>

                                        <td class="px-6 py-4 text-sm text-gray-900 whitespace-nowrap">
                                            <span
                                                class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                                Administrator
                                            </span>
                                        </td>

                                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                            <a href="#" class="mb-2 mr-2 text-blue-600 hover:text-blue-900">View</a>
                                            <a href="#" class="mb-2 mr-2 text-indigo-600 hover:text-indigo-900">Edit</a>
                                            <a href="#" class="mb-2 mr-2 text-red-600 hover:text-red-900">Delete</a>
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
