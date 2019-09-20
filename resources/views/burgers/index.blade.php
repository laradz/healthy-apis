<html lang="en">
<head>
    <title>Burgers</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body>

<div id="app" class="container">
    <h1>Burgers</h1>
    <p>A list of all burger types</p>
    <burgers-index></burgers-index>

    <hr>
    <p class="font-weight-bold">New burger type?</p>
    <p>You can add your new burger type here</p>
    <burgers-create></burgers-create>
</div>

<script src="{{ mix('js/app.js') }}"></script>
</body>
</html>