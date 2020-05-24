@if(count($errors) > 0)
	@foreach($errors->all() as $error)
		<div class="alert alert-danger alert-dismissible">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<strong>Error! </strong>{{$error}}
		</div>
	@endforeach
@endif

@if(session('success'))
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success! </strong>{{session('success')}}
	</div>
@endif

@if(session('info'))
	<div class="alert alert-info alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Info! </strong>{{session('info')}}
	</div>
@endif

@if(session('warning'))
	<div class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Warning! </strong>{{session('warning')}}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error! </strong>{{session('error')}}
	</div>
@endif