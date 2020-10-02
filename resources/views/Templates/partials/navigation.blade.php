<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">Queen Lashes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Главная<span class="sr-only">(current)</span></a>
                </li>
{{--                @if(Auth::check())--}}

                <li class="nav-item">
                    <a class="nav-link" href="#">Календарь</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Мои клиенты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Мои Услуги</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Мои боты</a>
                </li>

{{--                @endif--}}
            </ul>

            <ul class="navbar-nav mr-auto">

                @if(Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="#">{{Auth::user()->GetNameOrUserName()}}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Профиль</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Выход</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link" href="#">Войти</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('auth.signup')}}">Регистрация</a>
                </li>

                 @endif
            </ul>

        </div>    </div>

</nav>
