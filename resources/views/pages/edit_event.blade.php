<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<h1>Modifica l'evento</h1>

<form action="{{route('update.event', $event)}}" method="POST">
    @csrf
    @method('PUT')

    <label for="name">Nome dell'evento</label><br>
    <input type="text" name="name" id="name" value="{{$event->name}}" style="width: 25%">
    <br><br>
    <label for="date">Data</label><br>
    <input type="date" name="date" id="date" value="{{$event->date}}">
    <br><br><br>
    <input class="save-btn" type="submit" value="SALVA">
</form>
<br><br>
<a class="comeback-btn" href="{{route('index.events')}}">
    <button>TORNA INDIETRO</button>
</a>
<br><br>
<h3>Persone iscritte all'evento:</h3>
<ol>
    @foreach ($people as $person)
    <li>
        {{ $person->firstname }}
        <form action="{{ route('event.person.detach', ['event' => $event, 'person' => $person]) }}" method="POST"
            style="display: inline-block">
            @csrf
            @method('PUT')
            <button type="submit" class="delete-btn">X</button>
        </form>
    </li>
    <br>
    @endforeach
</ol>



<style>
    .delete-btn {
        cursor: pointer;
    }

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

    .save-btn {
        background-color: green;

        border: none;
        padding: 15px 30px;
        color: white;
        cursor: pointer;

        &:hover {
            background-color: rgb(82, 212, 82);
        }
    }
</style>


</html>