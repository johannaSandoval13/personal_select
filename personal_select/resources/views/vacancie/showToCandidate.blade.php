<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/showVacantRecruiter.css')}}">
    <title>Ver vacante</title>
</head>

<body>
    @extends('layout.header')
    @section('content')
    @if(session()->has('message'))
    <p id="message" style="display: none;">{{ session('message') }}</p>
    <script>
        const mes = document.getElementById('message')
        alert(mes.textContent);
    </script>
    @endif
    <section class="title-page">
        <h2>Informacion de la vacante: {{$vacancie->vacancie_code}}</h2>
    </section>
    <section class="card_info">
        <section class="general">
            <article class="generalTitle">
                <h3>Informacion General</h3>
            </article>
            <section class="generalInfo">
                <article class="charge">
                    <h3>Cargo: </h3><br>
                    <span>{{$vacancie->charge->charge}}</span>
                </article>
            </section>
            <section class="otherGeneralInfo">
                <article class="firstGeneral">
                    <p><strong>Experiencia requerida: </strong>{{$vacancie->required_experience}} meses</p>
                    <p><strong>Numero de vacantes: </strong>{{$vacancie->number_vacancies}}</p>
                    <p><strong>Rango salarial: </strong>${{$vacancie->salary_range}}</p>
                    <p><strong>Empresa: </strong>{{$vacancie->company->business_name}}-{{$vacancie->company->nit}}</p>
                </article>
                <article class="secondGeneral">
                    <p><strong>Horario de trabajo: </strong>{{$vacancie->schedule}}</p>
                    <p><strong>Tipo de jornada: </strong>{{$vacancie->work_day->working_day}}</p>
                    <p><strong>Tipo de salario: </strong>{{$vacancie->salaries_type->salary_type}}</p>
                    <p><strong>Persona Solicitante: </strong>{{$vacancie->applicant_person}}</p>

                </article>
            </section>
            <section class="generalTitle">
                <h3>Ubicacion</h3>
            </section>
            <section class="locationInfo">
                <article>
                    <p><strong>Pais: </strong>{{$vacancie->country->country_name}}</p>
                </article>
                <article>
                    <p><strong>Ciudad: </strong>{{$vacancie->city->city_name}}</p>
                </article>
            </section>
            </section>
            <section class="generalTitle">
                <h3>Conocimientos </h3>
            </section>
            <section class="skills">
                <article>
                    <br>
                    <h4>Habilidades</h4>
                </article>
                <article>
                    <br>
                    <p>{{$vacancie->skills}}</p>
                </article>
            </section>
            <section class="educations">

 




            <section class="back">
                <a href="{{ url()->previous() }}">Volver</a>
            </section>
        </section>
    </section>
    @endsection
</body>

</html>
