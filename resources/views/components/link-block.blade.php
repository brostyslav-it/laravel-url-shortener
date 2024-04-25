@props(['link'])
<tr class="bg-gray-100 border-b">
    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        <x-link href="{{ $link->original_link }}" target="_blank">
            {{ $link->original_link }}
        </x-link>
    </td>

    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        <x-link href='{{ url("/$link->short_code") }}' target="_blank">
            {{ url("/$link->short_code") }}
        </x-link>
    </td>

    <td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
        {{ $link->visits }}
    </td>
</tr>
