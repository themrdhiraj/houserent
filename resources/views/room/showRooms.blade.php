@extends('layouts.app')
@section('content')
<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">Room planning <a href="/profile" class="btn btn-success float-right">Change floors</a></div>
				<div class="card-body">
					<nav>
						<div class="nav nav-tabs" id="nav-tab" role="tablist">
							@php
							$floor = $user->total_floors;
							$room = $user->total_rooms;
							$room_per_floor = $room/$floor;
							@endphp
							@for ($i = 1; $i <= $floor; $i++)
							<a class="nav-item nav-link" id="nav-{{$i}}-tab" data-toggle="tab" href="#nav-{{$i}}" role="tab" aria-controls="nav-{{$i}}" aria-selected="false">Floor {{$i}}</a>
							@endfor
						</div>
					</nav>
					<br>
					<div class="tab-content" id="nav-tabContent">
						@for ($l = 1; $l <= $floor; $l++)
						<div class="tab-pane fade" id="nav-{{$l}}" role="tabpanel" aria-labelledby="nav-{{$l}}-tab">
							<div class="row row-cols-1 row-cols-md-2">
								@for ($m = 1; $m <= $room_per_floor; $m++)
								<div class="col mb-4">
									<div class="card">
										<div class="card-header">
											
											
											<h5 class="card-title">Room {{$m}} of floor {{$l}}.
											@foreach($peoples as $people)
											<span class="badge badge-danger">@if($people->people_selected_room.$people->people_selected_floor == $m.$l)
												Already Rented to '{{$people->people_name}}'
											@endif</span>
											@endforeach
											</h5>
											
										</div>
										<div class="card-body">
											<form action="/peoples/create" method="GET">
												<input type="hidden" name="floor" value="{{$l}}">
												<input type="hidden" name="room" value="{{$m}}">
												<input value="Rent room" type="submit" name="submit" class="btn btn-primary">
											</form>
										</div>
									</div>
								</div>
								@endfor
							</div>
						</div>
						@endfor
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection