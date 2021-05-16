<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    @include('includes.style')

    <title>BisnisIn!</title>
  </head>
  <body>
    <!-- Navbar -->
    <x-guest.navbar/>
    <!-- End Navbar -->

    {{ $slot }}

    @include('includes.script')
  </body>
</html>
