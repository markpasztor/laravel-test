
@extends('layouts.app')
@section('content')

<style>
table {border-collapse: collapse;}
th    {padding: 8px;}
td    {padding: 8px;}
</style>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Cart</div>
				<div class="panel-body">
					<table style="border-spacing: 10px;">		
						<thead><tr><th>Product name</th><th>Amount of products</th><th>Price</th><th>Total Price</th></thead>
						<tbody>
							@php
								$total_price = 0;
							@endphp
							@foreach( $items as $key => $amount )
							@php						
								$product = App\Products::find($key);
								$total_price += $amount * $product->price;
							@endphp
							<tr>
								<td>{{ $product->name }}</td>
								<td>{{ $amount }}</td>
								<td>{{ $product->price }}</td>
								<td align="right">{{ $amount * $product->price }} Ft</td>
							</tr>
							@endforeach
							<tr><td colspan="4"><hr></tr>
							<tr><td colspan="3">Total Price</td><td align="right">{{ $total_price }} Ft</td>
						</tbody>
					</table>
					{{ Form::open(array('url' => 'cart/emptycart')) }}
						{!! Form::submit('Empty cart'); !!}
					{{ Form::close() }}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
