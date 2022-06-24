<div class="max-w-screen-lg bg-orange-500 shadow-2xl rounded-lg mx-auto text-center py-12 mt-4">
    <h2 class="text-3xl leading-9 font-bold tracking-tight text-white sm:text-4xl sm:leading-10">
        Worldtime
    </h2>
    <div class="mt-8 flex justify-center">
        <form action="{{ route('worldtime.store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
            @csrf
            <div class="relative inline-block w-full text-gray-700">
                <select name="timeZone" class="w-full h-10 pl-3 pr-6 text-base placeholder-gray-600 border rounded-lg appearance-none focus:shadow-outline" placeholder="Regular input">
                    <option value="" selected>Please select timezone</option>
                    @forelse($timezones as $tz)
                        <option value="{{ $tz }}">{{ $tz }}</option>
                    @empty
                        <option>Please try later</option>
                    @endforelse
                </select>
                <div class="absolute inset-y-0 right-0 flex items-center px-2 pointer-events-none">
                    <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" fill-rule="evenodd"></path></svg>
                </div>
            </div>
            <div class="flex items-center justify-between">
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="button">
                    Get Local time
                </button>
            </div>
        </form>
    </div>
</div>