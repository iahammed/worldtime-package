<div class="max-w-screen-lg bg-white shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
    <h2 class="text-3xl leading-9 font-bold tracking-tight text-gray-800 sm:text-4xl sm:leading-10">
        Timezone Result
    </h2>
    <div class="mt-8 flex justify-center">
        <div class="inline-flex rounded-md bg-blue-500 shadow">
            <div class="container flex justify-center mx-auto">
                <div class="flex flex-col">
                    <div class="w-full">
                        <div class="border-b border-gray-200 shadow">
                            <table>
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            ID
                                        </th>
                                        <th class="px-6 py-2 text-xs text-gray-500">
                                            Name
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white">
                                    @forelse($time as $key=>$value)
                                    <tr class="whitespace-nowrap">
                                        <td class="px-6 py-4 text-sm text-gray-500 text-left">
                                            {{ $key }}
                                        </td>
                                        <td class="px-6 py-4 text-left">
                                            <div class="text-sm text-gray-900">
                                                {{ $value }}
                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr class="whitespace-nowrap">
                                        <td colspan=2 class="px-6 py-4 text-sm text-gray-500">
                                        <p>Select Timezone for local time</p>
                                        </td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>