<div class="flex min-h-full flex-col px-6 lg:px-8">
    <form class="space-y-6" action="/" method="POST">
        @csrf

        <div>
            <label for="original_link" class="block text-sm font-medium leading-6 text-gray-900">Enter URL to shorten</label>

            <div class="mt-2">
                <input id="original_link" type="url" name="original_link" class="block w-full rounded-md border-0 py-1.5 px-3 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" required>
            </div>

            <p class="text-red-500">
                @error('original_link')
                {{ $message }}
                @enderror
            </p>
        </div>

        <div>
            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Shorten Link</button>
        </div>
    </form>
</div>
