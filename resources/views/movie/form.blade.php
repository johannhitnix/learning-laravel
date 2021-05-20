<h1>Laravel Form</h1>
<form action="{{ action('MovieController@receive') }}" method="post">
    {{ csrf_field() }}
    <label for="name">Name</label>
    <input type="text" name="name" id="name">
    
    <label for="email">email</label>
    <input type="email" name="email" id="email">

    <input type="submit" value="send">
</form>