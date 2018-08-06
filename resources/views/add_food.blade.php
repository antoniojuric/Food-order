@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dodaj hranu</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('add_food') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">    

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Naziv proizvoda</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" required autofocus>
								@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Cijena</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price" required>
								@if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
							</div>
                        </div>
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Slika</label>

                            <div class="col-md-6">
                                <input id="photo" type="text" class="form-control" name="photo" required>
								@if ($errors->has('slika'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('slika') }}</strong>
                                    </span>
                                @endif
							</div>
                        </div>
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Vrsta hrane</label>

                            <div class="col-md-6">
                                <div>
									<select name="food_type" id="service_type" class="selectpicker" data-style="select-with-transition" title="Vrsta" data-size="7">
										@foreach ($categories as $category)
											<option value="{{ $category->id }}" >{{ $category->category_name }}</option>
										@endforeach
									</select>
									
								</div>
							</div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
								
                                    Potvrdi
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection