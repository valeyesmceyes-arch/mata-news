<?php

$project_name = 'Simple Project';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>

<body>

    <h1>Welcome to the <b>{{ $project_name }}</b> </h1>
    <p>This is the home page content.</p>
    <p><b>NAME:</b> {{ $name }}</p>
    <p><b>SEX:</b> {{ $sex }}</p>
    <p><b>COLORS:</b>{{ implode(', ', $colors) }}</p>

    @if (1 != 2)
        <p>One is not equal to two</p>
    @else
        <p>Two is greater than One</p>
    @endif

    @for ($i = 0; $i < 15; $i++)
        <p>Number: {{ $i }}</p>
    @endfor

    @foreach ($colors as $item)
        <p>{{ $item }}</p>
    @endforeach

    <?php print_r($colors); ?>
    <hr>
    <h2>Ingredients Needed</h2>
    <ul>
        <li>Flour</li>
        <li>Sugar</li>
        <li>Eggs</li>
    </ul>

</body>

</html>
