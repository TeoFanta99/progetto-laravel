<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<div class="top-container">
    <div class="left-container">
        <h1>Pagina di gestione delle persone</h1>

        <span>
            <i>Clicca su una persona per <b><u>visualizzarne</u></b> i dati o per <b><u>modificarla</u></b></i>
        </span>
        <br><br>
        @if ($noEvent)
        <span>
            <span style="color:red; font-size: 25px;">!</span>
            = utente non iscritto ad alcun evento
        </span>
        @endif
    </div>
    <div class="right-container">
        <a class="comeback-btn" href="{{route('welcome')}}">
            <button>TORNA INDIETRO</button>
        </a>
        <a class="addperson-btn" href="{{route('create.person')}}">
            <button>AGGIUNGI PERSONA</button>
        </a>

    </div>
</div>

<br><br>

<section style="justify-content: center">
    <div class="container">
        @foreach ($people as $person)
        <a class="person-card" href="{{ route('show.person', $person->id) }}"
            style="text-decoration: none; color: black">
            @if ($person->event_id == 0)
            <span class="no-event-indicator">!</span>
            @endif
            <span>{{ $person->firstname }}</span><br>
            <span>{{ $person->lastname }}</span>
        </a>
        @endforeach
    </div>
</section>


<style>
    .top-container {
        display: flex;
        flex-wrap: wrap;
        width: 100%;

        .left-container {
            width: 75%;
        }

        .right-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 25%;

            .addperson-btn {
                background-color: rgb(181, 118, 0);
                padding: 10px 30px;
                cursor: pointer;


                &:hover {
                    background-color: orange;
                }

                button {
                    background: none;
                    border: none;
                    color: white;
                    cursor: pointer;
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
        }
    }

    .noEventPeople {
        border: 1px solid black;
    }


    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        .person-card {
            border: 1px solid black;
            padding: 15px;
            display: inline-block;
            position: relative;
            cursor: pointer;


            &:hover {
                background-color: lightgray;
            }
        }

        .no-event-indicator {
            position: absolute;
            top: 5px;
            right: 5px;
            color: red;
            padding: 5px;
            border-radius: 50%;
            font-size: 30px;
        }

    }

    @media all and (min-width: 200px) {
        .person-card {
            width: 100%;
        }
    }

    @media all and (min-width: 400px) {
        .person-card {
            width: 40%;
        }
    }

    @media all and (max-width: 686px) {
        .top-container {
            display: block;

            .right-container {
                width: 100%;
                text-align: center;
            }
        }
    }


    @media all and (min-width: 600px) {
        .person-card {
            width: 25%;
        }
    }

    @media all and (min-width: 900px) {
        .person-card {
            width: 20%;
        }
    }

    @media all and (min-width: 1400px) {
        .person-card {
            width: 15%;
        }
    }
</style>


</html>