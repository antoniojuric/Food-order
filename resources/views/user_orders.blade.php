@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <h3>Narudzbe</h3>
                    <hr>

                    <table class="table table-striped">
                        <thead>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Adresa</th>
							<th>Broj telefona</th>
                            <th>Cijena</th>
							<th>Status narudzbe</th>
							<th></th>
                            
                        </thead>
                        <tbody>

                        @foreach($orders as $order)
						
								<tr>
									<td>{{ $order->user->first_name }}</td>
									<td>{{ $order->user->last_name }}</td>
									<td>{{ $order->address }}</td>
									<td>{{ $order->phone_number }}</td>
									<td>{{ $order->total_price }}</td>
									<td>
									@if($order->status == 'active')
										<p class="text-primary">Aktivna</p>
									@else
										<p class="text-secondary">Zavrsena</p>
									@endif
									</td>
									<td><button type="button" class="btn btn-info btn-md btn-block" data-toggle="modal" data-target="#{{ $order->id }}">
										     Prikazi   
										</button>

										<!-- Modal -->
										<div class="modal fade" id="{{ $order->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										  <div class="modal-dialog" role="document">
											<div class="modal-content">
											  <div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
												<h4 class="modal-title" id="myModalLabel">Narudzba</h4>
											  </div>
												<form>
												<input type="hidden" name="_token" value="{{ csrf_token() }}">
												  <div class="modal-body">
													<ul class="list-group">
													@foreach($order->cart->items as $product)
														<li class="list-group-item">
															<strong>{{ $product['item']['name'] }}   <span class="badge">   {{ $product['qty'] }}</span></strong>
															<div class="pull-right">
																<span>{{ $product['price'] }} KM</span>
															</div>
														</li>
													@endforeach
													</ul>
												  </div>
												  <div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												  </div>
												</form>
											</div>
										  </div>
										</div>
									</td>
								</tr>
						
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
