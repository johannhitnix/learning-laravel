<h1>{{ $fruit->st_Name }}</h1>

<p>{{ $fruit->st_Description }}</p>

<a href="{{ action('FruitController@delete', ['id' => $fruit->id_Fruit]) }}">Delete</a>
<br>
<a href="{{ action('FruitController@update', ['id' => $fruit->id_Fruit]) }}">Update</a>