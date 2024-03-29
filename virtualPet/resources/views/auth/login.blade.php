@extends('layouts.app')
@section('titulo') Inicio de sesión @endsection
<style>
	body{
		background: linear-gradient(
		rgba(0, 0, 0, 0.7), 
		rgba(0, 0, 0, 0.7)
	), url("images/fons_16.jpg");
		width: 100%;
		opacity: 1;
		background-repeat: no-repeat;
		background-size: cover;
		background-position: right;
		height: 100vh;
	}
	.form-control::placeholder{
		font-size: 1rem;
	}
	#btnRegistro{
		background: linear-gradient(45deg, black, transparent);
		border-color: #f5f1e9;
		color: #f7ecd6;
		padding: 0.5rem 2rem;
		margin: 0;
		line-height: 4rem;

	}
	#btnRegistro:hover{
		background: #ffe3b945;
color: #ffffff;
	}
	h1,h2,h3,h4,h5{
		font-family: 'Noto Sans', sans-serif;
	}
	p, a, .form-control, button, span, label{
		font-family: 'Nunito', sans-serif;
	}
	#btnAcceder{height: calc(1.5em + 1rem + 2px); padding: 0.5rem 5rem;
font-size: 1.1rem;
	background: linear-gradient(90deg, #eabe58, #f49d32); color: #fff5b9; border: transparent;
line-height: 1.5; border-radius: 25px;
	}
	#login::placeholder, #password::placeholder{
		font-family: "IcoFont", 'Noto Sans', sans-serif;
	}
	.navbar a{
		color: #f3c04e;
	}
	.navbar-brand{font-size: 1.6rem;}
	a{color: #f3a136;}
	#titulo{font-weight: 700; color: #1e1e1e;}
	.modal-body{
		background: url("images/path887.png");
		background-position: top right;
		background-repeat: no-repeat;
		background-size: 25%;
		border-radius: 1.3rem;
	}
	.modal-content{
		border-radius: 1.3rem;

	}
	.close{
		color: #862103;
	}
	.margen-largo{
		margin-top:40vh;
	}
</style>


@section('content')
<div class="container">
	<div class="margen-largo d-flex justify-content-center">
		<button class="btn btn-outline-warning btn-lg">Registrarse gratis</button>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalInicio" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body container-fluid">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
				</button>
				<h3 class="modal-title text-center my-4" id="titulo"><i class="icofont-fox-alt"></i> Virtual Pet</h3>
				<p class="text-muted">Rellene sus datos:</p>
      


			{{-- Empieza nuevo form --}}
			<form method="POST" action="{{ route('login') }}">
				@csrf

				<div class="form-group pt-2">
					<input id="login" type="text" class="form-control form-control-lg text-center @error('login') is-invalid @enderror" name="login" value="{{ old('login') }}" placeholder='&#xefd9; Correo electrónico' required autocomplete="login" autofocus>
			
					
				</div>
				<div class="form-group pt-2">
					<input id="password" type="password" class="form-control form-control form-control-lg text-center @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder='&#xf01a; Contraseña'>
				</div>

					<div class="col-md-12">
						@error('login')
						<span class="text-danger" role="alert">
								<strong><i class="icofont-warning-alt"></i> {{ $message }}</strong>
						</span>
						@enderror
						@if ($errors->has('username') || $errors->has('email'))
								<span class="invalid-feedback">
										<strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
								</span>
						@endif
						@error('password')
								<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
								</span>
						@enderror
					</div>
				

				<div class="form-group mb-0">
					<div class="form-check">
							<input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

							<label class="form-check-label" for="remember">
									<small class="text-muted">{{ __('Recordarme') }}</small>
							</label>
					</div>
				</div>
				<div class="form-group pt-2 mb-0">
					<p class="small text-muted">Recuperar cuenta. <a href="{{ route('password.request') }}">Click aquí</a></p>
				</div>

				<div class="form-group pt-2 mb-0 d-flex justify-content-center">
					<button type="submit" class="btn btn-primary" id="btnAcceder">
							{{ __('Login') }}
					</button>
				</div>
			</form>
		</div>
			</div>
			{{-- fin de nuevo form --}}
    </div>
  </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	
	$(document).ready(function() {
		$('#btnLogear').click();
		$('#btnLogear').click(function () { console.log( 'boton' );
			$('#modalInicio').modal('show');
		});
	});

</script>
@endsection
