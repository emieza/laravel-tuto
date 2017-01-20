@extends('layouts.master')


@section('contingut')

<h1>Login</h1>

<form method="post">
	<label to="usuari">Usuari:</label><input type="text" name="usuari" />
	<br>
	<label to="contrasenya">Contrasenya:</label><input type="password" name="contrasenya" />
	<br>
	<input type="submit" name="envia" value="Entra!" />
</form>

@endsection
