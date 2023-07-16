<!DOCTYPE html>
<html lang="en">

<head>

    @if (!empty($logo_image->value))
        <link rel="icon" type="image/x-icon" href="{{ asset('/storage/siteSettings/' . $logo_image->value) }}">
    @else
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    @endif
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $meta_discription->value ?? '' }}@stack('meta')" />
    <title>
        @stack('title') |
        {{ $title ? $title : '' }} | {{ $site_title->value ?? config('dz.public.title') }}
        {{-- @stack('title') --}}
    </title>
<style>
    .bd-placeholder-img {
       font-size: 1.125rem;
       text-anchor: middle;
       -webkit-user-select: none;
       -moz-user-select: none;
       -ms-user-select: none;
       user-select: none;
     }

     @media (min-width: 768px) {
       .bd-placeholder-img-lg {
         font-size: 3.5rem;
       }
     }

     .card-container {
      overflow: hidden;
      position: relative;
    }

    .zoom {
      transition: transform 0.3s ease;
    }

    .card-container:hover .zoom {
      transform: scale(1.1); /* Adjust the scale value to control the zoom level */
    }
</style>

    @foreach (config('dz.public.global.css') as $item)
        <link rel="stylesheet" crossorigin="anonymous" href="{{ $item }}">
    @endforeach

    {{-- <title>Home Page</title> --}}
</head>

<body class="py-0 bg-light">
