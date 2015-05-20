{{-- 팀 멤버 등록 양식 --}}

@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-heading">팀원 등록 양식</div>

					<div class="panel-body">
						@if ($errors->any())
							<ul class="alert alert-danger">
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						@endif

						{!! Form::open(['url' => action('TeamMembersController@store', $team_id)]) !!}

							<div class="form-group">
								{!! Form::label('name', '이름', null, ['class' => 'control-label']) !!}
								{!! Form::text('name', null, ['class' => 'form-control']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('back_number', '백넘버', null, ['class' => 'control-label']) !!}
								{!! Form::text('back_number', null, ['class' => 'form-control']) !!}
							</div>

							<div class="form-group">
								{!! Form::label('position', '주포지션', null, ['class' => 'control-label']) !!}
								{!! Form::select('position', \App\Member::$def_positions, null, ['class' => 'form-control']) !!}
							</div>

							<hr>

							<div class="form-group">
								<button type="submit" class="btn btn-primary">저장</button>
								<button type="reset" class="btn btn-default">취소</button>
							</div>

						{!! Form::close() !!}
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection