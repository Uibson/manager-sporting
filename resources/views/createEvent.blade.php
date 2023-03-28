@extends('layouts.app')

@section('content')

<div class="container ">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-4"><h1>Criar evento</h1>
          <!-- Sign In Form -->
          <form method="POST" action="{{ route('login') }}" >
              @csrf


              
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name_event" value="{{ old('name_event') }}" required autocomplete="name_event" autofocus>
                  <label for="floatingInput">Nome do evento</label>
                  

                        @error('name_event')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="organizer_event" value="{{ old('organizer_event') }}" required autocomplete="organizer_event" autofocus>
                  <label for="floatingInput">Setor responsável </label>
                  

                        @error('organizer_event')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="location_event" value="{{ old('organizer_event') }}" required autocomplete="location_event" autofocus>
                  <label for="floatingInput">Local do evento </label>
                  

                        @error('organizer_event')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="date" class="form-control @error('data_ini_event') is-invalid @enderror" id="floatingData_ini_event"  name="data_ini_event" required >
                  <label for="floatingData_ini_event">Data de inicio</label>
                  

                                @error('data_ini_event')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="date" class="form-control @error('data_end_event') is-invalid @enderror" id="floatingData_end_event"  name="data_end_event" required >
                  <label for="floatingData_ini_event">Data de encerramento</label>
                  

                                @error('data_end_event')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-floating ">
                  <textarea  type="text" rows="5" class="form-control @error('description_event') is-invalid @enderror" id="floatingDescription_event"  name="description_event" required  >
                    </textarea>
                  <label for="floatingDescription_event">Sobre o que é esse evento?</label>
                  

                                @error('data_end_event')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

               

                <div class="d-grid mt-3">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2 color-primary" type="submit">Criar Evento</button>
                 
                </div>

              </form>
            </div>
    </div>
</div>

@endsection