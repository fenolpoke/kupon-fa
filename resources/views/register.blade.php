@extends('master')

@section('title', 'Register Form')

@section('content')

	<!-- Registration (email, password, no hp, address) - 10 -->

	<h1>Register Form </h1>

	<form method="POST" action="/kupon/public/register">
	<!-- <form method="POST" action="/register"> -->
		<table>
			<tr>
				<td>First Name: </td>
				<td><input type="text" name="firstname"/></td>
			</tr>
			<tr>
				<td>Last Name: </td>
				<td><input type="text" name="lastname"/></td>
			</tr>
			<tr>
				<td>Email: </td>
				<td><input type="text" name="email"/></td>
			</tr>
			<tr>
				<td>Password: </td>
				<td><input type="password" name="password"/></td>
			</tr>
			<tr>
				<td>Reenter password: </td>
				<td><input type="password" name="repassword"/></td>
			</tr>
			<tr>
				<td>Handphone: </td>
				<td><input type="text" name="handphone"/></td>
			</tr>
			<tr>
				<td>Address: </td>
				<td><textarea name="address"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" value="Register"></td>
			</tr>
			<tr>
				<td colspan="2"><?php echo (isset($error))? $error : ""; ?></td>
			</tr>
		</table>
	</form>
	<br/>
	<!-- <a href="/login">Login!</a> -->
	<a href="/kupon/public/login">Login!</a>

@endsection