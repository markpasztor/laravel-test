
@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Products</div>
				<div class="panel-body">
					<ul>
						@foreach( $products as $product )
							<li><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></li>
							<p>{{ $product->short_description }}</p>
							@foreach( $product->images as $image )
								<img src="{{ URL::to('/').$image->url }}" style="width:100px" />
							@endforeach
							<div style="width:200px;">
								{{ Form::open(array('url' => 'products/addcart')) }}
									{!! Form::input('hidden', 'product_id', $product->id, ['class' => 'form-control']) !!}
									{!! Form::input('number', 'amount', null, ['class' => 'form-control']) !!}
									{!! Form::submit('Add to cart'); !!}
								{{ Form::close() }}
							</div>
							<hr>
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
