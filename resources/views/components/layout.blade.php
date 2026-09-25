<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="color-scheme" content="dark" />
  @vite(['resources/css/app.css', 'resources/js/app.js'])
  <title>{{ $title }}</title>
</head>

<body class="bg-pixl-dark text-pixl-light flex gap-16 p-4 sm:h-dvh sm:overflow-clip">
    {{ $slot }}
</body> 
</html>