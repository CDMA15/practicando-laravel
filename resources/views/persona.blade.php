<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personas</title>
</head>
<body>
    <div style="background: #f1f1f1";width:45% ;heigth:45%>
        <h1>Registro</h1>
        @foreach ($personas as $n)
            <p><b>Nombre: </b>{{$n['name']}}</p>
            @if ($n['edad'] < 18)
                <p><b>Edad: </b>{{$n['edad']}}-Menor de edad</p>
            @else
                <p><b>Edad: </b>{{$n['edad']}}-Mayor de edad</p>
            @endif
            <p><b>-----------------------------</p></b>
        @endforeach

    </div>

</body>
</html>