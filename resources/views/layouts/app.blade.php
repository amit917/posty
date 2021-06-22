<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Larvel auth</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">



</head>
<body class="bg-gray-100">
<nav class="p-6 bg-white flex justify-between">
<ul class = "flex items-center">
<li>
<a href = "" class = "p-3">Home</a>
</li>
<li>
<a href = "{{route('dashboard')}}" class = "p-3">Dashboard</a>
</li>

</ul>
<ul class = "flex items-center">
<li>
<a href = "" class = "p-3">Login</a>
</li>
<li>
<a href = "{{route('register')}}" class = "p-3">Register</a>
</li>
<li>
<a href = "" class = "p-3">Aritra Mitra</a>
</li>
<li>
<a href = "" class = "p-3">Log out</a>
</li>

</ul>

</nav>
<div class="container mx-auto mt-6 px-6">
  @yield('content')
  </div>
</body>
</html>