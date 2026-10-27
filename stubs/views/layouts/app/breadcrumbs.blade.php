@if (isset($breadcrumbs))
    @foreach ($breadcrumbs as $url => $title)
        @if ($loop->last)
            <span class="ml-1">{{ $title }}</span>
        @else
            <a href="{{ $url }}" class="mx-1 font-semibold">{{ $title }}</a> >
        @endif
    @endforeach
@endif