<header>

    <a class="header-btn" href="{{route('welcome')}}">
        <button>HOMEPAGE</button>
    </a>
    <a class="header-btn" href="{{route('index.people')}}">
        <button>GESTISCI PERSONE</button>
    </a>
    <a class="header-btn" href="{{route('index.events')}}">
        <button>GESTISCI EVENTI</button>
    </a>

</header>


<style scoped>
    header {
        width: 100%;
        min-height: 70px;
        background-color: rgb(236, 236, 236);
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
    }

    .header-btn {
        padding: 10px;
        background-color: #4a6da7;
        border: none;
        display: block;
        margin: 5px;
        width: 25%;
        text-decoration: none;
        text-align: center;
        cursor: pointer;

        &:hover {
            background-color: #9bb9e9;
        }

        button {
            background: none;
            border: none;
            color: white;
            cursor: pointer;
        }
    }

    @media all and (max-width: 500px) {
        .header-btn {
            width: 100%
        }
    }
</style>