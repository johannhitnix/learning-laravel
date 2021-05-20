<h1>Fruit List</h1>
<h3><a href="{{ action('FruitController@create') }}">Create Fruit</a></h3>

@if(session('status'))
    <p style="background-color: #0ef40e; color:white">
        {{session('status')}}
    </p>
@endif

<ul>
    @foreach($fruits as $fruit)
    <li>
        <a href="{{ action('FruitController@detail', ['id' => $fruit->id_Fruit]) }}">{{ $fruit->st_Name }}</a>
    </li>
    @endforeach
</ul>