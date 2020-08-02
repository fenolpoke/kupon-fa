@extends('master')

@section('title', app('db')->table('coupon')->where('id',$id)->select('name')->first()->name)

@section('content')

	<h1> {{ app('db')->table('coupon')->where('id',$id)->select('name')->first()->name }} </h1>
	<h3> {{ app('db')->table('coupon')->where('id',$id)->select('description')->first()->description }} </h3>

	<br/>
	<a href="/kupon/public/invalidate/{{$id}}">invalidate</a>
	<!-- <a href="/invalidate/{{$id}}">See Coupons</a> -->

	<br/>
	<a href="/kupon/public/coupon">back</a>
	<!-- <a href="/coupon">back</a> -->

@endsection