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
						<a href="{!! route('notice.index')!!}"><button class="btn btn-success">All Notice</button></a>
                    </span>
					</div>




					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="panel-body">

									{!! Form::open(array('route' => 'notice.upload',  'files' => true) ) !!}

									<div class="form-group">
										{!! Form::label('notice_file_title', 'File Title :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('notice_file_title', '',array('class' => 'form-control','placeholder' =>  'File title here','required'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('notice_id', 'Select Notice :', array('class' => 'col-md-2 control-label')) !!}
										{!!Form::select('notice_id', $notices, '',array('class' => 'select2', 'autofocus','required'))!!}
									</div><br/>


									{!! Form::file('file[]', array('multiple'=>true)) !!}



									<br/><br/><br/>


									<div class="form-group">
										{!! Form::submit('Upload File', array('class' => 'btn btn-primary')) !!}
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

	{!! Html::style('assets/select2/select2.css') !!}


	<style>
		.container{
			width: 100%;

		}
	</style>
@stop


@section('script')


	{!! Html::script('assets/select2/select2.min.js') !!}

	<script type="text/javascript">

		jQuery(document).ready(function() {

			// Select2
			jQuery(".select2").select2({
				width: '100%'
			});
		});

	</script>


@stop











