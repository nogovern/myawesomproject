{{-- 팀 리스트 --}}

@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">팀리스트</div>

					<div class="panel-body">
						<ul class="list-group">
							@foreach($teams as $team)
								<a class="list-group-item" href="{{ route('teams.members.index', $team->id)}}">
									{{ $team->name }}
								</a>
							@endforeach	
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection