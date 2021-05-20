@if(isset($fruit) && is_object($fruit))
<h1>Update Fruit</h1>
@else
<h1>Create a Fruit</h1>
@endif


<form action="{{ isset($fruit) ? action('FruitController@doUpdate') : action('FruitController@save') }}" method="post">
    {{ csrf_field() }}

    @if(isset($fruit) && is_object($fruit))
    <input type="hidden" name="id" id="id" value="{{ $fruit->id_Fruit }}">
    @endif

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $fruit->st_Name ?? '' }}">
    <br>
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ $fruit->st_Description ?? ''}}">
    <br>
    <label for="price">Price</label>
    <input type="text" name="price" id="price" value="{{ $fruit->ft_Price ?? '' }}">

    <br>
    <input type="submit" value="save">
</form>