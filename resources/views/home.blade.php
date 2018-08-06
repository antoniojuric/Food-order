@extends('layouts.app')

@section('content')
<script type="text/javascript">
	function errorMessage{
		swal ( "Oops" ,  "Something went wrong!" ,  "error" );
	}
</script>

<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">

            @foreach($categories as $category)
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3>{{ $category->category_name }}</h3>
						@foreach($foods as $food)
							@if($food->food_category_id == $category->id)
								<figure class="snip1492">
								  <img class="img-responsive" src="{{  $food->photo  }}" alt="sample85" />
								  <figcaption>
									<h3>{{  $food->name  }}</h3>
									<div class="price">
									  {{  $food->price  }}KM
									</div>
								  </figcaption><i class="ion-plus-round"></i>
								  @guest
									<a href="{{ route('alert','error') }}"></a>
								  @else
									<a href="{{ route('addToCart', ['id' => $food->id]) }}"></a>
								@endguest
								</figure>
							@endif
						@endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
	
</div>

@endsection
