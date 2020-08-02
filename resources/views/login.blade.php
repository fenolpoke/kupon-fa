@extends('master')

@section('title', 'Login Form')

@section('content')

	<form method="POST" action="/kupon/public/login">
	<!-- <form method="POST" action="/login"> -->
		<table>
			<tr>
				<td>Email:</td>
				<td><input type="text" name="email" /></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="password" /></td>
			</tr>
			<tr>
				<td colspan="2"><a href="">Forgot password?</a></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Login" /> </td>
			</tr>
			<tr>
				<td colspan="2"><?php echo (isset($error))? $error : ""; ?></td>
			</tr>
		</table>
	</form>
	<br/>
	<!-- <a href="/register">Register!</a> -->
	<a href="/kupon/public/register">Register!</a>

@endsection