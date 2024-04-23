<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Usando Vite -->
    @vite(['resources/js/app.js'])
</head>
@include('components.header')

<body>
    <div class="container" style="width: 100%">
        <h1>HOMEPAGE</h1>

        <span style="width: 100%">
            <i>Clicca su un evento per <b><u>visualizzare</u></b> tutte le informazioni</i>
        </span>
        <br><br>
        <div class="events-container" style="display:flex; justify-content: center;">
            @foreach ($events as $event)
            <a class="event-card" href="{{route('show.event', $event->id)}}">
                <div class="card">
                    {{$event -> name}}
                </div>
            </a>
            @endforeach

        </div>

    </div>
</body>

<style scoped lang="scss">
    .events-container {
        width 100%;
        display: flex;
        flex-wrap: wrap;

        .event-card {
            text-decoration: none;
            color: black;
            border: 1px solid black;
            padding: 10px;
            min-height: 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;

            &:hover {
                background-color: lightgray;
            }
        }
    }

    @media all and (min-width: 200px) {
        a {
            width: 100%;
        }
    }

    @media all and (min-width: 400px) {
        a {
            width: 40%;
        }
    }

    @media all and (max-width: 599px) {

        h1 {
            text-align: center;
        }
    }


    @media all and (min-width: 600px) {
        a {
            width: 25%;
        }
    }

    @media all and (min-width: 900px) {
        a {
            width: 20%;
        }
    }

    @media all and (min-width: 1400px) {
        a {
            width: 15%;
        }
    }
</style>

</html>