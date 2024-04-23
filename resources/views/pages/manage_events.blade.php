<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('components.header')

<div class="top-container">
    <div class="left-container">
        <h1>Pagina di gestione degli eventi</h1>

        <span>
            <i>Clicca su un evento per <b><u>modificarlo</u></b>, per
                <b><u>eliminarlo</u></b> o per <b><u>rimuovere una persona</u></b></i>
        </span>
        <br><br>
    </div>
    <div class="right-container">
        <a class="comeback-btn" href="{{route('welcome')}}">
            <button>TORNA INDIETRO</button>
        </a>
        <a class="addevent-btn" href="{{route('create.event')}}">
            <button>CREA NUOVO EVENTO</button>
        </a>
    </div>
</div>

<br><br>

<section style="justify-content: center">
    <div class="container">
        @foreach ($events as $event)
        <a class="event-card" href="{{ route('edit.event', $event->id) }}" style="text-decoration: none; color: black">
            <span>{{ $event->name }}</span>
        </a>
        @endforeach
    </div>
</section>


<style scoped lang="scss">
    .top-container {
        display: flex;
        width: 100%;

        .right-container {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            width: 50%;

            .addevent-btn {
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


    .container {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;

        .event-card {
            border: 1px solid black;
            padding: 15px;
            display: inline-block;
            position: relative;
            cursor: pointer;


            &:hover {
                background-color: lightgray;
            }
        }
    }


    @media all and (min-width: 200px) {
        .event-card {
            width: 100%;
        }
    }

    @media all and (min-width: 400px) {
        .event-card {
            width: 40%;
        }
    }


    @media all and (min-width: 600px) {
        .event-card {
            width: 25%;
        }
    }

    @media all and (min-width: 900px) {
        .event-card {
            width: 20%;
        }
    }

    @media all and (min-width: 1400px) {
        .event-card {
            width: 15%;
        }
    }
</style>


</html>