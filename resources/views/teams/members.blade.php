{{-- 팀 멤버 리스트 --}}

@extends('app')

@section('content')
	<div class="container">
		<div class="row">
			{{-- 팀원리스트 --}}
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">팀원 리스트</div>

					<div class="panel-body">
						@if ($members->isEmpty())
							팀원이 없네요
						@else
						<div class="list-group memberList">
							@foreach($members as $member)
								<a class="list-group-item" href="#">{{ $member->name }} ({{ $member->back_number }}) - {{ $member->getPositionName() }}
									<span class="controls pull-right" style="display:none;">
										<button class="btn btn-xs btn-default">수정</button>
										<button class="btn btn-xs btn-default">탈퇴</button>
									</span>
								</a>
							@endforeach	
						</div>
						@endif

						<p>
							<a class="btn btn-primary" href="{{ route('teams.members.create', $team->id) }}">create member</a>
						</p>
					</div>
				</div>
			</div>
			
			{{-- 팀 기본 로스터 (Roster) --}}
			<div class="col-md-6">
				<div class="panel panel-default">
					<div class="panel-heading">
						기본 라인업 <small>LineUp</small>
						<span class="pull-right"><button class="btn btn-xs btn-info">수정</button> </span>
					</div>

					<div class="panel-body">
						<table class="table table-bordered">
							<thead>
								<tr>
									<td>타순</td>
									<td>등번호</td>
									<td>선수명</td>
									<td>포지션</td>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td></td>
									<td></td>
									<td></td>
									<td></td>
								</tr>	
							</tbody>
						</table>

						<div>
							{{ var_dump($team->lineup) }}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@section('script')
	<script type="text/javascript">
		$(document).ready(function() {
			$(".memberList .list-group-item").on('mouseover', function(e) {
				$(this).addClass('list-group-item-info');
				$(this).find(".controls").show();
			});
			$(".memberList .list-group-item").on('mouseout', function(e) {
				$(this).removeClass('list-group-item-info');
				$(this).find(".controls").hide();
			});
		});
	</script>
@endsection