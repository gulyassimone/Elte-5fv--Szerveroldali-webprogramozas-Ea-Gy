<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">


    </head>
    <body>

    <?php
    $name = 'Robin';
    ?>
    @php
        $name = 'asd';
    @endphp

    @if($name == 'asd')
        <h1>Sikerült</h1>
    @endif

    <ul>
        @for($i=0; $i<3;$i++)
            <li>{{$i}}</li>
        @endfor
    </ul>

    <h1>helo <?= $name ?></h1>
    <h1>helo {{ $name }}</h1>

    </body>
</html>
