<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-evenly">
    <div>
        <a class="navbar-brand" href="#">
            <img src="{{ asset('img/logo.png') }}" style="height: 100px" alt="">
        </a>
    </div>

    <div>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item p-4">
                    <a href="{{ route('user.register') }}" class="btn btn-danger">Criar Conta</a>
                </li>
            </ul>
        </div>
    </div>

</nav>
