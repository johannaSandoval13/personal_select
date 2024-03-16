<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/indexRecruiter.css')}}">
    <title>Reclutador Home</title>
</head>

<body>
    <header class="header">
        @extends('layout.header')
    </header>

    @section('content')
    <main class="container">
        <section class="info">
            <h2>{{$company->business_name}}</h2>
            <form action="{{route('company.show', ['company' => $company->id])}}" method="get">
                <button>Ver mas</button>
            </form>
        </section>
        <section class="disassociate">
            <form action="{{route('recruiter.disassociate', ['company' => $company->id])}}" method="post">
                @csrf
                <button>Salir</button>
            </form>
        </section>
        <section class="content">
            <section class="options">
                <section class="recruiter_card">
                    <section class="card-body">
                        <article class="option op-1">
                            <h5>Vacantes</h5>
                            <a href="{{route('vacancies.create', ['company' => $company->id])}}" class="add">Crear Vacante</a>
                            <a href="{{route('vacancies.index', ['company' => $company->id])}}" class="view">Ver mis vacantes</a>
                        </article>
                        <article class="option op-2">
                            <h5>Cargos</h5>
                            <a href="{{route('charges.create')}}" class="add">Crear cargo</a>
                            <a href="{{route('charges.index', ['company' => $company->id])}}" class="view">Ver cargos creados</a>
                        </article>
                        <article class="option op-3">
                            <h5>Requisiciones</h5>
                            <a href="{{route('requisitions.create')}}" class="add">Crear requisitos</a>
                            <a href="{{route('requisition.index')}}" class="view">Ver requisitos creados</a>
                        </article>
                        <article class="option op-4">
                            <h5>Ocupaciones</h5>
                            <a href="{{route('occupations.create')}}" class="add">Crear ocupaciones</a>
                            <a href="{{route('occupations.index')}}" class="view">Ver ocupaciones creadas</a>
                        </article>
                    </section>
                </section>
            </section>
            <br>
            <br>
        </section>
    </main>
    @endsection
</body>

</html>
