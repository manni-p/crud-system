@extends('partials.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<form class="form-horizontal" method="POST" action="@if(isset($edit)) {{ route('edit', ['id' => $edit->id]) }}
				@else {{ route('create') }} @endif">
				{{ csrf_field() }}

				<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
					<label for="name" class="col-md-3 control-label">Name</label>

					<div class="col-md-8">
						<input id="name" type="text" class="form-control" name="name" value="@if(isset($edit) && $edit->name){{ $edit->name }}@else{{ old('name') }}@endif" required autofocus>

						@if ($errors->has('name'))
						<span class="help-block">
							<strong>{{ $errors->first('name') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
					<label for="description" class="col-md-3 control-label">Description</label>

					<div class="col-md-8">
						<textarea name="description" autofocus>@if(isset($edit) && $edit->description){{ $edit->description }}@else{{ old('description') }}@endif</textarea>

						@if ($errors->has('description'))
						<span class="help-block">
							<strong>{{ $errors->first('description') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
					<label for="price" class="col-md-3 control-label">Price</label>

					<div class="col-md-8">
						<input id="price" type="text" class="form-control" name="price" value="@if(isset($edit) && $edit->price){{ $edit->price }}@else{{ old('price') }}@endif" required autofocus>

						@if ($errors->has('price'))
						<span class="help-block">
							<strong>{{ $errors->first('price') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group{{ $errors->has('offer_price') ? ' has-error' : '' }}">
					<label for="price" class="col-md-3 control-label">Offer Price</label>


					<div class="col-md-8">
						<input id="price" type="text" class="form-control" name="offer_price" value="@if(isset($edit) && $edit->offer_price){{ $edit->offer_price }}@else{{ old('offer_price') }}@endif" required autofocus>
						<small>(Leave blank if no offer on)</small>
						@if ($errors->has('offer_price'))
						<span class="help-block">
							<strong>{{ $errors->first('offer_price') }}</strong>
						</span>
						@endif
					</div>
				</div>

				<div class="form-group">
					<label for="price" class="col-md-3 control-label">Active</label>


					<div class="col-md-8">
						<input type="checkbox" name="active" value="1">

					</div>
				</div>

				<div class="form-group">
					<div class="col-md-8 col-md-offset-3">
						<button type="submit" class="btn btn-primary">
							Submit
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
