<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @stack('styles')
    <link rel="stylesheet" href="{{asset('css/layout.css')}}">

    <title>Document</title>
</head>
<body>
    <header class="header">

        @auth

            @if($role_id == 1)
<div class="find">
    <form action="{{ route('vacancie.indexToCandidate') }}" method="GET" id="form">
        @csrf
        <input type="search" name="search" class="input-search" placeholder="Buscar Vacantes">
        <button type="submit" id="btn-search"><i class="bi bi-search"></i></button>
    </form>
</div>


                <div class="actions">
                    <h5> <a href="{{route('user.index')}}">Hola!, {{$user->name}}</a></h5>
                    <h5>
                        <form action="{{route('user.logout')}}" method="post">
                            @csrf
                            <button>Cerrar sesion</button>
                        </form>
                    </h5>
                </div>

                @else
                <div class="actions">
                    @if($role_id == 2)
                    <h5><a href="{{route('selector.index')}}">Hola!, {{ optional(auth()->user())->name }}</a></h5>
                    @elseif($role_id == 3)
                    <h5><a href="{{route('recruiter.index')}}">Hola!, {{$user->name}}</a></h5>
                    @endif
                    <h5>Rol: {{$user->role->name}}</h5>
                    <h5>
                        <form action="{{route('user.logout')}}" method="post">
                            @csrf
                            <button>Cerrar sesion</button>
                        </form>
                    </h5>
                </div>
            @endif
        @endauth
    </header>

    @yield('content')


</body>
</html>
