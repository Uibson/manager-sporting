@extends('layouts.app')

@section('content')
        <div class="col-md-4 p-4"> @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
       
										
								
         </div>
  
<div class="container">
    <div class="container">
    <a  class=" btn btn-primary btn-lg" href="{{ route('create.event') }}">Criar evento</a>
    </div>
    <div class="row">
       
            
    <div class="swiffy-slider slider-item-show2 slider-nav-sm slider-nav-page slider-item-snapstart slider-item-nogap slider-nav-round slider-nav-dark slider-indicators-sm slider-indicators-outside slider-indicators-round slider-indicators-dark slider-nav-animation slider-nav-animation-slideup slider-item-first-visible">
   
    <div class="slider-container">
        <div class="p-3 p-xl-5 text-dark slide-visible" >
            
            <img class="img-thumbnail p-4 mb-3" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Card image cap">
            <h3 class="text-uppercase h5">Jogos Estudantis 2023</h3>
            <p>
            Conforme cronograma, a competição na faixa etária 12 a 14 anos vai contar com 18 modalidades: basquete, futsal, vôlei, handebol, vôlei de praia, atletismo, atletismo adaptado, ciclismo, ginástica rítmica, tênis de mesa, xadrez, badminton, judô, karatê, taekwondo, wrestling, natação e ginástica artística.
            </p>
            <button class="btn btn-outline-primary">Visualizar evento </button>
        </div>
        <div class="p-3 p-xl-5 text-dark slide-visible" >
            
            <img class="img-thumbnail p-4 mb-3" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Card image cap">
            <h3 class="text-uppercase h5">Jogos Estudantis 2023</h3>
            <p>
            Conforme cronograma, a competição na faixa etária 12 a 14 anos vai contar com 18 modalidades: basquete, futsal, vôlei, handebol, vôlei de praia, atletismo, atletismo adaptado, ciclismo, ginástica rítmica, tênis de mesa, xadrez, badminton, judô, karatê, taekwondo, wrestling, natação e ginástica artística.
            </p>
            <button class="btn btn-outline-primary">Visualizar evento </button>
        </div>
        <div class="p-3 p-xl-5 text-dark slide-visible" >
            
            <img class="img-thumbnail p-4 mb-3" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Card image cap">
            <h3 class="text-uppercase h5">Jogos Estudantis 2023</h3>
            <p>
            Conforme cronograma, a competição na faixa etária 12 a 14 anos vai contar com 18 modalidades: basquete, futsal, vôlei, handebol, vôlei de praia, atletismo, atletismo adaptado, ciclismo, ginástica rítmica, tênis de mesa, xadrez, badminton, judô, karatê, taekwondo, wrestling, natação e ginástica artística.
            </p>
            <button class="btn btn-outline-primary">Visualizar evento </button>
        </div>
        <div class="p-3 p-xl-5 text-dark slide-visible" >
            
            <img class="img-thumbnail p-4 mb-3" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Card image cap">
            <h3 class="text-uppercase h5">Jogos Estudantis 2023</h3>
            <p>
            Conforme cronograma, a competição na faixa etária 12 a 14 anos vai contar com 18 modalidades: basquete, futsal, vôlei, handebol, vôlei de praia, atletismo, atletismo adaptado, ciclismo, ginástica rítmica, tênis de mesa, xadrez, badminton, judô, karatê, taekwondo, wrestling, natação e ginástica artística.
            </p>
            <button class="btn btn-outline-primary">Visualizar evento </button>
        </div>
       
    </div>

    <button type="button" class="slider-nav" aria-label="Go left"></button>
    <button type="button" class="slider-nav slider-nav-next" aria-label="Go left"></button>

    <div class="slider-indicators d-md-none">
        <button class="active" aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide" class=""></button>
        <button aria-label="Go to slide"></button>
        <button aria-label="Go to slide" class=""></button>
    </div>
</div>
    </div>
</div>
         







    <!-- <img class="card-img" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Suresh Dasari Card"> -->
                    
                    




</div>
</div>
@endsection
