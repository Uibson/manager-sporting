@extends('layouts.app')

@section('content')

        <div class="col-md-4 p-4"> @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
       
										
								
         </div>
             
<div class="container">
	<div class="row">
	   <div class="col-4">
	   <a  class="btn btn-primary btn-lg" href="{{ route('create.event') }}">Criar evento</a>
	   </div>
	</div>
</div>

@endsection
