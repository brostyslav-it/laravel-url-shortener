@props(['link'])
<div class="border-2 border-green-500 px-2 ml-4 mt-4">
    <p>
        <b>Original link:</b>

        <x-link href="{{ $link->original_link }}" target="_blank">
            {{ $link->original_link }}
        </x-link>
    </p>

    <p>
        <b>Shortened link:</b>

        <x-link href='{{ url("/$link->short_code") }}' target="_blank">
            {{ url("/$link->short_code") }}
        </x-link>
    </p>

    <p><b>Visits:</b> {{ $link->visits }}</p>
</div>
