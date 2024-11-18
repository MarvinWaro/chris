@extends('base')

@section('content')

    <x-header />
    <x-aside />

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Admin Department</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#!">Home</a></li>
                    <li class="breadcrumb-item"><a href="#!">Organization</a></li>
                    <li class="breadcrumb-item active">Admin Department</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->


        <section class="section employees">
            <div class="card p-3">
                Damn Sheeeeesh Technical Department
            </div>
        </section>


    </main><!-- End #main -->

    <x-footer />

@endsection
