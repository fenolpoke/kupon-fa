@extends('master')

@section('title', 'Home')

@section('content')

	<h1> Welcome <?php echo (isset($name))? $name : ""; ?> </h1>

	<br/>
	<a href="/kupon/public/coupon">See Coupons</a>
	<!-- <a href="/coupon">See Coupons</a> -->
@endsection