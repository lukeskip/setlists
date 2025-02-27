@extends('layouts.login')

@section('content')
<div class="container">
	
	<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
		{{ csrf_field() }}

		<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
			<label for="email" class="col-md-4 control-label">E-Mail Address</label>

			<div class="col-md-6">
				<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

				@if ($errors->has('email'))
					<span class="help-block">
						<strong>{{ $errors->first('email') }}</strong>
					</span>
				@endif
			</div>
		</div>

		<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
			<label for="password" class="col-md-4 control-label">Password</label>

			<div class="col-md-6">
				<input id="password" type="password" class="form-control" name="password" required>

				@if ($errors->has('password'))
					<span class="help-block">
						<strong>{{ $errors->first('password') }}</strong>
					</span>
				@endif
			</div>
		</div>

		<div>
		
			<label>
				<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recuérdame
			</label>
		</div>

		<div >
			<div>
				<button type="submit" class="rey_button green loggin full">
					Login
				</button>
			</div>
			<div>
				<a class="rey_button loggin full" href="{{ route('password.request') }}">
					¿Olvidaste tu password?
				</a>
			</div>
			<div>
				<a class="rey_button loggin full" href="{{ url('/register') }}">
					¿No tienes cuenta aún?
				</a>
			</div>
		</div>
	</form>
		  
@endsection
