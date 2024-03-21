<!doctype html>
<html>
<head>
<link rel="shortcut icon" href="{{ asset('img/icon.png') }}">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Expires" content="0">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite(['resources/css/app.css','resources/js/app.js'])

    {{-- Font-Poppins --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Homespot</title>
</head>
<body>
  @include('Partials.Navbar')
  @include('Auth.login')
  @include('Auth.register')
  
  @yield('container')
  
  @include('Partials.footer')
  
</body>
{{-- script js --}}
<script src="/js/Script.js"></script>

{{-- Date Picker --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
{{-- vanilla tilt --}}
<script type="text/javascript" src="/js/vanilla-tilt.min.js"></script>
<script type="text/javascript">
    VanillaTilt.init(document.querySelector(".car-img"), {
        max: 25,
        speed: 400
    });
    
    //It also supports NodeList
    // VanillaTilt.init(document.querySelectorAll(".your-element"));
</script>
</html>