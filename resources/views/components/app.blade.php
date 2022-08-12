<!doctype html>
<html {{ language_attributes() }}>

<head>
    <meta charset="{{ bloginfo('charset') }}">
    <meta
            name="viewport"
            content="width=device-width, initial-scale=1"
    >

    <link
            rel="stylesheet"
            href="{{ mix('css/app.css') }}"
    >

    <style>
        [x-cloak] {
            display: none;
        }

    </style>

    @stack('styles')

    <title>
        @wp('title')
    </title>

    @wp('head')
</head>

<body class="antialiased">

<main>
    {!! $slot !!}
</main>

<script src="{{ mix('js/app.js') }}"></script>

@stack('scripts')

@wp('footer')
</body>
</html>
