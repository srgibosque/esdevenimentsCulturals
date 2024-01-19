<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event</title>
</head>

<body>
  <h2>{{$singleEvent->name}}</h2>
  <p>{{$singleEvent->description}}</p>
  <img src="{{ asset('images/' . $singleEvent->image) }}" alt="image">
  <p>{{ $singleEvent->location }}</p>
  <p>{{ $singleEvent->author }}</p>
  <p>{{ $singleEvent->date }}</p>
</body>
</html>