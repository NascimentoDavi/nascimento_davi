@extends('layouts.app')

@section('title', 'Home')

@section('content')


<div id="profile-header" class="d-flex flex-row justify-content-center align-items-start gap-5">

    <img src="{{ asset('img/profile.jpeg') }}" alt="" id="profile-header-img">

    <div id="profile-header-info">
        <div id="profile-header-info-1" class="d-flex flex-column justify-content-center align-items-start">
            <h1 class="text-light">Davi R. do Nascimento</h1>
            <h3 class="text-light fst-italic fw-lighter">Computer Science Student | Full Stack Developer | Open Source Enthusiast</h3>
        </div>

        <div id="profile-header-info-2" class="d-flex flex-column gap-2">

            <div id="profile-header-info-2-local" class="d-flex flex-row align-items-start gap-2">
                <i class="bi bi-geo-fill"></i>
                <p class="m-0 p-0">Vitória, Espírito Santo - BRAZIL</p>
                |
                <p>20 years old</p>
            </div>

            <div id="profile-header-info-2-container" class="d-flex flex-row align-items-start gap-4">
                <div id="profile-header-info-2-img-1" class="mb-5">
                    <img src="{{ asset('img/faesa_logo.png') }}" alt="" id="faesa-logo">            
                </div>

                <div id="profile-header-info-2-social-media" class="d-flex flex-row gap-2">
                    <a href="https://github.com/NascimentoDavi" class="text-decoration-none text-white text-decoration-underline">
                        <i class="bi bi-github"></i>
                        Github
                    </a>
                    <a href="https://www.linkedin.com/in/davi-rodrigues-cs/" class="text-decoration-none text-white text-decoration-underline">
                        <i class="bi bi-linkedin"></i>
                        LinkedIn
                    </a>
                </div>
            </div>

        </div>
    </div>

</div>


@endsection