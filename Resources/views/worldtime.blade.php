<h1></h1>

<div>
    @forelse($time as $key=>$value)
        <p>{{ $key }} : {{ $value }}</p>
    @empty
        <p>Select Timezone for</p>
    @endforelse

</div>