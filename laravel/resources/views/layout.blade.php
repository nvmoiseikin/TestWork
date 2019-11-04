<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SmartDivision</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{mix('css/app.css')}}" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="app">
    </div>
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
<script src="{{mix('js/app.js')}}"></script>
</body>
</html>