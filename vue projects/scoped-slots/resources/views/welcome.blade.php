<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    <div id="app">
        <Example :items="['one', 'two', 'three']">
            <template slot="menu-slot" scope="{ item }">
                <h2 v-text="item"></h2>
            </template>
        </Example>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
