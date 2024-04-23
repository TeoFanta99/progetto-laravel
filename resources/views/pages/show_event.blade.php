<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<h1>{{$event->name}}</h1>

<span>Questo evento si terrà in data {{$event->date}}</span>
<br><br>
<h3>Elenco delle persone iscritte all'evento:</h3>
<ol>
    @foreach ($people as $person)
    <li>
        {{$person->firstname}} {{$person->lastname}}
    </li>
    @endforeach
</ol>
<br><br>
<a class="comeback-btn" href="{{route('welcome')}}">
    <button>TORNA INDIETRO</button>
</a>
<style>
    .comeback-btn {
        padding: 10px;
        background-color: #e8f278;
        border: none;
        cursor: pointer;

        &:hover {
            background-color: #b1b862;
        }

        button {
            background: none;
            border: none;
            cursor: pointer;
        }
    }
</style>


</html>