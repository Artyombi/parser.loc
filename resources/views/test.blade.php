<p>{{ $name }}</p>
<hr>
<form action="{{ $action }}" method="POST">
    {{ csrf_field() }}
    <input type="hidden" name="whateverName" value="whateverValue">
    <button type="submit">Click me</button>
</form>
<hr>
<p>{{ $param }}</p>
