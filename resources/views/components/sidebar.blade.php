<div {{ $attributes->merge(['class' => 'text-xl']) }}>
    <h1>{{ $info }}</h1>
    <h2>{{ $something }}</h2>

    Hello from Sidebar Component

    <ul>
        @foreach($list('another') as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    {{ $slot }}
</div>
