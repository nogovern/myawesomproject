
@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{!! Form::open([
					'action' => ['TeamsController@saveLineUp', $team->id]
				]) !!}
					<div class="page-title"><h2>라인업</h2></div>

					<table class="table">
						<thead>
							<tr>
								<th></th>
								<th>수비위치</th>
								<th>이름 (배번)</th>
								<th></th>
							</tr>
						</thead>

						<tbody>
							@for($i=1; $i <= 9; $i++)
							<tr>
								<td style="padding:14px 20px; width:50px;">{{ $i }}</td>
								<td style="width:150px;">{!! Form::select("data[$i][pos]", $def_positions, null, ['class' => 'form-control']) !!}</td>
								<td>{!! Form::select("data[$i][member]", $member_list, null, ['class' => 'form-control']) !!}</td>
								<td style="padding:14px 20px; width:100px;"></td>
							</tr>
							@endfor
						</tbody>
					</table>

					<div class="form-group">
						{!! Form::submit('저장', ['class' => 'btn btn-primary form-control']) !!}	
					</div>
				
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection