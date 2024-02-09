{{-- to pass through any HTML attributes from a parent component to a child component --}}
<nav {{ $attributes }}>
    <ul class="flex space-x-4 text-slate-500">
        <li>
            <a href="/">Home</a>
        </li>
        @foreach ($links as $label => $link)
        <li>→</li>
        <li>
            <a href="{{ $link }}">
            {{ $label }}
            </a>
        </li>
        @endforeach
        
    </ul>
</nav>