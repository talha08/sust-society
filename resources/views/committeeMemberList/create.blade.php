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

									{!! Form::open(array('route' => 'committee.store',  'files' => true) ) !!}



									@if(Auth::user()->id ==1)
									<div class="form-group">
										{!! Form::label('dept_id', 'Department Name :', array('class' => 'control-label')) !!}<br/>
										{!!Form::select('dept_id', $departments, '',array('class' => 'select2', 'autofocus'))!!}
									</div><br/>
									@endif

									<div class="form-group">
										{!! Form::label('year', 'Committee Year :', array('class' => 'control-label')) !!}<br/>
										{!! Form::selectYear('year', 2013, 2019,'' ,array('class' => 'select2', 'autofocus'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('is_current', 'Status :', array('class' => 'control-label')) !!}<br/>
										{!!Form::select('is_current', $is_current, '',array('class' => 'select2', 'autofocus'))!!}
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











