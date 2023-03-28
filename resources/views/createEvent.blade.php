@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
          <!-- Sign In Form -->
          <form method="POST" action="{{ route('login') }}">
              @csrf
                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  <label for="floatingInput">Endereço de email</label>
                  

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="form-floating mb-3">
                  <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Informe sua senha" name="password" required autocomplete="current-password">
                  <label for="floatingPassword">Senha</label>
                  

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="form-check mb-3">
                 
                  <input class="form-check-input" type="checkbox" name="remember" id="rememberPasswordCheck" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="rememberPasswordCheck">
                    Lembrar senha
                  </label>
                </div>

                <div class="d-grid">
                  <button class="btn btn-lg btn-primary btn-login text-uppercase fw-bold mb-2 color-primary" type="submit">Criar Evento</button>
                 
                </div>

              </form>
    </div>
</div>

@endsection