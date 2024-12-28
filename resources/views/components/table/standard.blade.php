<div class="mt-6 overflow-x-auto">
    <x-headings.secondary title="{{ $data['title'] }}"/>

    <div class="inline-block min-w-full py-2 align-middle">
        <table class="min-w-full divide-y divide-gray-300">
            <thead>
            <tr>
                @foreach($data['headings'] as $heading)
                    <th
                        scope="col"
                        class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                    >
                        {{ $heading }}
                    </th>
                @endforeach
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
            @foreach($data['data'] as $index => $row)
                <tr class="hover:shadow hover:bg-white hover:cursor-default transition">
                    @foreach($row as $rowIndex => $cell)
                        <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                            {{ $cell }}
                        </td>
                    @endforeach
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
