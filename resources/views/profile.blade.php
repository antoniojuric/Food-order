@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profil</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('updateProfile') }}">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label for="name" class="col-md-4 control-label">Ime</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control" name="first_name" value="{{ $user->first_name }}" required autofocus>
								@if ($errors->has('first_name'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('first_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Prezime</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control" name="last_name" value="{{ $user->last_name }}" required>
								@if ($errors->has('last_name'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('last_name') }}</strong>
                                    </span>
                                @endif
							</div>
                        </div>
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Adresa</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ $user->address }}" required>
								@if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
							</div>
                        </div>
						<div class="form-group">
                            <label for="name" class="col-md-4 control-label">Telefon</label>

                            <div class="col-md-6">
                                <input id="phone_number" type="text" class="form-control" name="phone_number" value="{{ $user->phone_number }}" required>
								@if ($errors->has('phone_number'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                @endif
							</div>
                        </div>

                        <div class="form-group">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}" required>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong class="text-danger">{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
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