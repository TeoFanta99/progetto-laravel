<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<h1>Informazioni relative a {{$person->firstname}}</h1>

<form action="{{route('update.person', $person)}}" method="POST">
    @csrf
    @method('PUT')

    <label for="firstname">Nome</label><br>
    <input type="text" name="firstname" id="firstname" value="{{$person->firstname}}">
    <br><br>
    <label for="lastname">Cognome</label><br>
    <input type="text" name="lastname" id="lastname" value="{{$person->lastname}}">
    <br><br>
    <label for="event_id">Evento a cui parteciperà</label><br>
    <select name="event_id" id="event_id">
        <option value="">Nessuno</option>
        @foreach ($events as $event)
        <option value="{{$event->id}}" @if ($event->id == $person->event_id) selected
            @endif>
            {{$event->name}}
        </option>
        @endforeach
    </select>
    <br><br><br>
    <input class="save-btn" type="submit" value="SALVA">
</form>
<br><br>
<a class="comeback-btn" href="{{route('index.people')}}">
    <button>TORNA INDIETRO</button>
</a>



<style>
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