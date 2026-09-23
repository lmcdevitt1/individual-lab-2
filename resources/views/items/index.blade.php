<!DOCTYPE html>
<html>
<head>
    <title>Items</title>
</head>
<body>
<h1>Items</h1>

@foreach ($items as $item)
    <p>{{ $item->toString() }}</p>
@endforeach
</body>
</html>
