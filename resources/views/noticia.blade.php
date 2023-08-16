<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Noticias</title>
</head>
<body>
    <div style="background: #f1f1f1";width:45% ;heigth:45%>
        <h1>Noticias</h1>
        @foreach ($noticias as $n)
            <p><b>ID:</b>{{$n['id']}}</p>
            <p><b>Titulo:</b>{{$n['titulo']}}</p>
            <p><b>Descripcion:</b>{{$n['descripcion']}}</p>
            <p><b>------------------------------------------------------------</p></b>
        @endforeach

    </div>

</body>
</html>