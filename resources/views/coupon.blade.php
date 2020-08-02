@extends('master')

@section('title', 'Coupons Available')

@section('content')


	@forelse(app('db')->table('coupon')->where('valid',1)->get() as $coupon)
		<br/>
		Coupon's ID:  {{ $coupon->id }}
		<br/>
		Coupon's name:  {{ $coupon->name }}
		<br/>
		Valid Until:  {{ $coupon->until }}
		<br/>
		<a href="/kupon/public/coupon/{{$coupon->id}}">See More</a>
		<!-- <a href="/coupon/{{$coupon->id}}">See More</a> -->
		<br/>
	@empty
		No valid coupons yet.
	@endforelse


	<br/>
	<a href="/kupon/public/home">back</a>
	<!-- <a href="/home">back</a> -->

@endsection