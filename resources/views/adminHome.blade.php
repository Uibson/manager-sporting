@extends('layouts.app')

@section('content')

        <div class="col-md-4 p-4"> @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
       
										
								
         </div>
  
         <div class="container-fluid">
    <div class="row">
            <div class="col-12">
            <a  class="btn btn-primary btn-lg" href="{{ route('create.event') }}">Criar evento</a>
            </div>   
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
        <div class="col-md-6 mt-3">
            <div class="card">
                <div class="card-horizontal">
                    <div class="img-square-wrapper">
                        <img class="" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Card image cap">
                    </div>
                    <div class="card-body">
                        <h4 class="card-title">Card title</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
        </div>
    </div>
</div>
         







    <!-- <img class="card-img" src="{{ Vite::asset('resources/img/jogos.png') }}" alt="Suresh Dasari Card"> -->
                    
                    




</div>
</div>
@endsection
