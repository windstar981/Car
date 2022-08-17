<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    @stack('interest-css')
    <title>Calculate</title>
    <script>
        const coefInterets = {
            'Tuỳ-chọn': '',
            'ABBANK': 9.5,
            'ABC': 8.7,
            'AGRIBANK': 7.5,
            'Bac-A-Bank': 8.99,
            'BAOVIETBank': 8.5,
            'BIDV': 6.6,
            'DAIABANK': 9,
            'DONGABANK': 8.5,
            'Eximbank': 7.49,
            'GP.Bank': 9.5,
            'HDBANK': 9.5,
        }
    </script>
</head>
<body>
@include('plugin-interest::plugininterest')
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script>
<script src="{{asset('platform/plugin/js/plugininterest.js ')}}"></script>
</html>
