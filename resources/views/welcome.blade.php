<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <livewire:styles>
</head>
   <body class="flex justify-center">

    <div class="w-10/12 my-10 flex">

        <div class="w-5/12 rounded border p-2">
        <h1 class="text-4xl font-medium capitalize">Tickets</h1>
         ticker will be here
        </div>

        <div class="w-7/12 mx-2 rounded border p-2">
            <h1 class="text-4xl font-medium capitalize">Comments</h1>
            <livewire:comments />
        </div>
   </div>

   <livewire:scripts>
   </body>
</html>
