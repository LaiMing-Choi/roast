<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Roast</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" type="text/css">
    <script type="text/javascript">
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token()
        ]) ?>
    </script>
</head>
<body>
    <div id="app">
        <router-view></router-view>
    </div>
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</body>
</html>
