<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Bulma -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.9.1/css/bulma.min.css">

    <title>My SPA</title>

</head>
<body>
    <div id="app">
        @include('_header')

        <section class="section">
            <div class="container">
                <router-view></router-view>
            </div>
        </section>

    </div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue@2.6.12/dist/vue.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
