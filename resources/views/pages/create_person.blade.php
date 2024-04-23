<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<h1>Pagina di creazione delle persone</h1>

<form method="POST" enctype="multipart/form-data">

    @csrf
    @method("POST")


    <input type="text" id="firstname" name="firstname" placeholder="Inserisci il nome">
    <br><br>

    <input type="text" id="lastname" name="lastname" placeholder="Inserisci il cognome">
    <br><br>
    <label for="event">A quale evento parteciperà?</label>
    <br>
    <select name="event_id" id="event_id">
        <option value="">Nessuno</option>
        @foreach ($events as $event)
        <option value="{{$event->id}}">{{$event ->name}}</option>
        @endforeach
    </select>
    <br><br>
    <input class="save-btn" type="submit" value="Crea">
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