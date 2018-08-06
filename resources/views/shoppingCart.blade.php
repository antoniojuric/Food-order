@extends('layouts.app')

@section('content')
	@if(Session::has('cart'))
		<div class="container">
		<form method="POST" action="{{ route('postCheckout') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<ul class="list-group">
						@foreach($products as $product)
							<li class="list-group-item">
								<strong>{{ $product['item']['name'] }} <span class="badge">{{ $product['qty'] }}</span></strong>
								<div class="pull-right">
									<span>{{ $product['price'] }} KM</span>
									<div class="btn-group">
										<button type="button" class="btn btn-primary btn-xs dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span></button>
										<ul class="dropdown-menu">
											<li><a href="{{ route('reduceItem', ['id'=>$product['item']['id']]) }}">Reduce by 1</a></li>
											<li><a href="{{ route('removeItem', ['id'=>$product['item']['id']]) }}">Remove</a></li>
										</ul>
									</div>
								</div>
							</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<strong class="pull-right">Ukupno: {{ $totalPrice }} KM</strong>
				</div>
			</div>
			<br>

			<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<label for="name" class="col-md-6 control-label">Adresa</label>
				<div class="col-md-6">
					<input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" required>
					@if ($errors->has('address'))
						<span class="help-block">
						<strong class="text-danger">{{ $errors->first('address') }}</strong>
						</span>
					@endif                
				</div>
			</div>
            </div>
			<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<label for="name" class="col-md-6 control-label">Telefon</label>
				<div class="col-md-6">
					<input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}" required>
					@if ($errors->has('phone_number'))
						<span class="help-block">
							<strong class="text-danger">{{ $errors->first('phone_number') }}</strong>
                        </span>
                    @endif
				</div>
			</div>
            </div>
			<br>
			<div class="row">
				<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
					<a href="{{ route('home') }}"><button type="button" class="btn btn-success pull-left">Nazad</button></a>
					<button type="submit" class="btn btn-success pull-right">Naruci</button>
				</div>
			</div>
		</form>
		</div>
	@else
		<div class="row">
			<div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
				<h2>Niste nista narucili</h2>
			</div>
		</div>
	@endif
@endsection