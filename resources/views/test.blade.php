<p>{{ $name }}</p>
<hr>
<form action="{{ $action }}" method="POST">
    <input type="hidden" name="whateverName" value="whateverValue">
    <button type="submit">Click me</button>
</form>
<hr>
<p>{{ $param }}</p>
