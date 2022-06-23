<div class="w-full max-w-xs">
    <form action="{{ route('worldtime.store') }}" method="post" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="IP">
                IP Address
            </label>
            <input 
                name="ip" 
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" 
                id="IP" 
                type="text" 
                placeholder="IP">
        </div>
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