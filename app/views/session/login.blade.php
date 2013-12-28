<form method="POST">

	<div>
		<label for="username">Username</label>
		{{ Form::text('username') }}
	</div>

	<div>
		<label for="password">Password</label>
		{{ Form::password('password') }}
	</div>

	<input type="submit" value="Login">
</form>
