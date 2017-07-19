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

									{!!Form::model($department,['route' => ['department.update',$department->id], 'method' => 'put' ])!!}

									<div class="form-group">
										{!! Form::label('name', 'Organization Name :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('name', null,array('class' => 'form-control','placeholder' =>  'Event title here'))!!}
									</div><br/>

									<div class="form-group">
										{!! Form::label('description', 'Description :', array('class' => 'control-label')) !!}<br/>
										{!!Form::textarea('description', null,array('class' => ' form-control','placeholder' =>  '...................'))!!}
									</div><br/>

									<div class="form-group">
										{!! Form::label('email', 'Email :', array('class' => 'control-label')) !!}<br/>
										{!!Form::email('email', null,array('class' => ' form-control','placeholder' =>  '...................'))!!}
									</div><br/>

									<div class="form-group">
										{!! Form::label('fax', 'Fax Number :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('fax', null,array('class' => ' form-control','placeholder' =>  '...................'))!!}
									</div><br/>

									<div class="form-group">
										{!! Form::label('phone', 'Phone/Mobile :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('phone', null,array('class' => ' form-control','placeholder' =>  '...................'))!!}
									</div><br/>

									<div class="form-group">
										{!! Form::label('location', 'Location :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('location', null,array('class' => ' form-control','placeholder' =>  '...................'))!!}
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

	{!! Html::style('assets/summernote/summernote.css') !!}

@stop


@section('script')

	{!! Html::script('assets/summernote/summernote.min.js') !!}


	<script type="text/javascript">

		jQuery(document).ready(function() {


			$('.summernote').summernote({
				height: 200,                 // set editor height

				minHeight: null,             // set minimum height of editor
				maxHeight: null,             // set maximum height of editor

				focus: true                 // set focus to editable area after initializing summernote
			});




		});

	</script>

@stop











