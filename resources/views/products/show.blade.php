
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{!! link_to_route('products.index', 'Products') !!} / {{ $product->name }}</div>
				<div class="panel-body">
					
					<p>{{ $product->description }}</p>

					@foreach( $product->images as $image )		
						<img src="{{ URL::to('/').$image->url }}" style="width:100px" />
					@endforeach
					<hr>	
					{!! link_to_route('products.index', '< Back to Products') !!}
				<div>
			</div>
		</div>
	</div>
</div>
@endsection
