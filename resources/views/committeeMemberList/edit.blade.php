@extends('layouts.default')
@section('content')



	<div class="wraper container-fluid">

		@include('includes.alert')

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">

					<div class="panel-heading">

						<h3 class="panel-title">{!!$title!!}</h3>

                    <span class="pull-right">

                    </span>
					</div>




					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="panel-body">

									{!!Form::model($comList,['route' => ['committeeMemberList.update',$comList->id], 'method' => 'put' ])!!}

									<div class="form-group">
										{!! Form::label('committee_id', 'Committee Year :', array('class' => 'control-label')) !!}<br/>
										{!!Form::select('committee_id', $com, '',array('class' => 'select2', 'autofocus'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('member_type_id', 'Member Type :', array('class' => 'control-label')) !!}<br/>
										{!!Form::select('member_type_id', $type, '',array('class' => 'select2', 'autofocus'))!!}
									</div><br/>

									<div class="form-group">
										{!! Form::label('user_id', 'Member Name :', array('class' => 'control-label')) !!}<br/>
										{!!Form::select('user_id', $user, '',array('class' => 'select2', 'autofocus'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::submit('Submit', array('class' => 'btn btn-primary')) !!}
									</div>



									{!! Form::close() !!}

								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>





@stop



@section('style')
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
@stop


@section('script')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


	<script type="text/javascript">

		jQuery(document).ready(function() {

			$(".select2").select2({
				width: '100%',
				theme: "classic"
			});

		});

	</script>

@stop








