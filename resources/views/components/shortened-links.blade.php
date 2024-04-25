@props(['links'])
<div class="flex flex-col">
    <div class="overflow-x-auto sm:mx-0.5 lg:mx-0.5">
        <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <table class="min-w-full">
                    <thead class="bg-white border-b">
                    <tr>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Original URL</th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Shortened URL</th>
                        <th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">Visits</th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($links as $link)
                        <x-link-block :link="$link"/>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
