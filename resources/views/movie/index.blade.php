<h1>{{ $title }}</h1>
@if($page)
    <h3>now you're on page: {{ $page }}</h3>
@endif

<a href="{{ action('MovieController@details') }}">Go to Details</a>