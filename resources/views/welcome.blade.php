@extends('layout')
@section('title', 'Huhu ')
@section('content')
        <section id="start"><div class="flex-center position-ref full-height">

            <div class="m-b-md">
                <div class="title m-b-md">
                    JuSchl
                </div>
                <div class="container">Hier entsteht was!</div>
            </div>
        </div>
        </section>
        <section id="profil">
            @include('seiten.profil')
        </section>
        <section id="werdegang">
            @include('seiten.werdegang')
        </section>
        <section id="links">
            @include('seiten.links')
        </section>

@endsection
