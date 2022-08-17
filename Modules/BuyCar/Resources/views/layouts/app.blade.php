<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Add the slick-theme.css if you want default styling -->
    <!-- Add the slick-theme.css if you want default styling -->
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css/cardetail.css"> -->
    <!-- <link rel="stylesheet" href="css/listcar.css"> -->
    <link href="/css/main.css" rel="stylesheet">
{{--    <link href="{{ assets('css/listcar.css') }}" rel="stylesheet">--}}
    <!-- <link rel="stylesheet" href="css/newcar.css">
    <link rel="stylesheet" href="css/review.css">
    <link rel="stylesheet" href="css/rvdetail.css"> -->
    <title>Philkotse</title>
    <link rel="icon" type="image/png" sizes="16x16" href="https://philkotse.com/favicon.ico?v=2">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script> -->

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!-- swiper slide  -->


    <!-- end swiper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- header -->

    <!-- end header -->
        @include('buycar::pages.components.header')
    <!-- main -->
    <main>
        @yield('content')
    </main>
    <!-- end main -->
        @include('buycar::pages.components.footer')
    <!-- footer -->

    <!-- end footer -->
    <script src="https://code.jquery.com/jquery-3.6.0.js "
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin=" anonymous "></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="js/main.js ">
    </script>
</body>

</html>
