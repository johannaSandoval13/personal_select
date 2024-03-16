<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{asset('css/adminPanel.css')}}">
    <title>administrador</title>
</head>

<body>
    @extends('layout.headerAdmin')

    @section('content')
    <section class="sidebar">
        <a href="{{route('instructor.index')}}">
            <article class="option-admin modi" style="background-color: #38445e; border-right: 7px solid #2193b0;">
                <i class="bi bi-person-circle"></i>
                <h3>Ver candidatos</h3>
            </article>
        </a>

        <a href="{{route('instructor.recruiters')}}">
            <article class="option-admin">
                <i class="bi bi-person-lines-fill"></i>
                <h3 style="color: white;">Ver Reclutadores</h3>
            </article>
        </a>

        <a href="{{route('instructor.selectors')}}">
            <article class="option-admin">
                <i class="bi bi-card-checklist"></i>
                <h3 style="color: white;">Ver Seleccionadores</h3>
            </article>
        </a>

        <a href="{{route('instructor.instructors')}}">
            <article class="option-admin">
                <i class="bi bi-gear-fill"></i>
                <h3 style="color: white;">Ver Administradores</h3>
            </article>
        </a>
    </section>

    <section class="view-info">
        <section class="info-options">
            <h4>Listado de Candidatos en el sistema</h4>
            <section class="actions">
                <article class="action acOne">
                    <h5>Modificar Rol</h5>
                </article>
                <article class="action">
                    <img src="{{asset('img/papelera.png')}}" alt="icon">
                    <h5>Eliminar</h5>
                </article>
            </section>
        </section>
        <section class="table-content">
            <table>
                <thead>
                    <tr>
                        <th>
                            <h5>Tipo De Documento</h5>
                        </th>
                        <th>
                            <h5>Documento</h5>
                        </th>
                        <th>
                            <h5>Nombres</h5>
                        </th>
                        <!-- <th><h5>Primer Apellido</h5></th> -->
                        <th>
                            <h5>Apellidos</h5>
                        </th>
                        <th>
                            <h5>Acciones</h5>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($candidates as $candidate)
                    <tr>
                        <td>{{$candidate->user->document_type->document_type}}</td>
                        <td>{{$candidate->user->number_document}}</td>
                        <td>{{$candidate->user->name}}</td>
                        <td>{{$candidate->user->last_name}}</td>
                        <td class="actions-table">
                            <form action="{{route('instructor.editUserRole', ['user' => $candidate->user_id])}}" method="get">
                                <button><i class="bi bi-pencil-fill btn2"></i></button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tbody>
                        <tr><td>No hay Candidatos para mostrar</td></tr>
                    </tbody>
                    @endforelse
                </tbody>
            </table>
        </section>
    </section>

    @endsection
</body>

</html>