<html>
    <head>
        <title>Campions</title>
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>
         @foreach($campions as $campio)
         <div class="campio">
            <a href="{{route('show',['id'=>$campio->id])}}"><img src="{{$campio->foto_petita}}"></a>
            <a href="{{route('show',['id'=>$campio->id])}}"><p>{{$campio->nom}}</p></a>
         </div>
         @endforeach
    </body>
</html>
