@extends('partials.master')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<a class="btn button" href="{{ route('create') }}">Create</a>
				<div class="panel-body">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Price</th>
								<th>Active</th>
								<th>Delete</th>
							</tr>
						</thead>
						<tbody>
							@if(count($lists) != 0)
							@foreach($lists as $list)
							<tr>
								<td>
									{{ $list->name }}
								</td>
								<td>{{ $list->price }}</td>
								<td>@if($list->active == 1) active @else not active @endif</td>
								<td>
									<a href="{{ route('delete',['id' => $list->id]) }}">Delete</i></a>
								</td>
							</tr>
							@endforeach
							@else
							<tr>
								<td>
									No Results
								</td>
							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
