<!DOCTYPE html>
<html lang="en">
<head link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200">
    <meta charset="UTF-8">
    <meta name="viewport" content="width={}, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Antic+Didone&display=swap" rel="stylesheet">
    <title>Eventi</title>
    <link rel="icon" type="image/x-icon" href="{{ asset("img/LogoE.png")}}">
</head>
<body class="">
    {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>
