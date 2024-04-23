<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<h1>Pagina di creazione dell'evento</h1>

<form method="POST" enctype="multipart/form-data">

    @csrf
    @method("POST")


    <input type="text" id="name" name="name" placeholder="Nome dell'evento">
    <br><br>

    <input type="date" id="date" name="date" placeholder="Data dell'evento">
    <br><br>
    <input class="create-btn" type="submit" value="Crea">
</form>
<br><br>
<a class="comeback-btn" href="{{route('index.events')}}">
    <button>TORNA INDIETRO</button>
</a>
<style>
    .create-btn {
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