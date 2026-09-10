<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Le Savon Laundry Services - Fresh clothes, less hassle.">

    <title>{{ $title ?? 'Le Savon Laundry Services' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-[#faf9f6] text-slate-800 antialiased">

    <!-- Main Content -->
    @yield('content')

</body>
</html>

