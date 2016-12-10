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

									{!! Form::open(array('route' => 'album.store',  'files' => true) ) !!}

									<div class="form-group">
										{!! Form::label('album_title', 'Album Title :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('album_title', '',array('class' => 'form-control','placeholder' =>  'Album title here'))!!}
									</div><br/>


									<div class="form-group">
										{!! Form::label('album_details', 'Album Details :', array('class' => 'control-label')) !!}<br/>
										{!!Form::textarea('album_details', '',array('class' => 'form-control','id'=>'editor','placeholder' =>  'Album Details Here...'))!!}
									</div><br/>







									<div class="form-group">
										{!! Form::label('file', 'Photo Upload :', array('class' => 'control-label')) !!} <br>
										{!! Form::file('file[]', array('id' =>'choose', 'multiple'=>true)) !!}
									</div><br/>

									<div id="uploadPreview"></div><br><br>


									{!! Form::hidden('dept_id', \Auth::user()->dept->id) !!}
									<div class="form-group">
										{!! Form::submit('Create Album', array('class' => 'btn btn-primary')) !!}
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

	<style>
		#uploadPreview img{
			height: 64px;
		}
	</style>
	@stop


	@section('script')



	{!! Html::script('js/ckeditor/ckeditor.js') !!}

			<!--photo upload-->
	{!! Html::script('js/multipleImage.js') !!}


	<script type="text/javascript">

		CKEDITOR.replace( 'editor', {
			"filebrowserImageUploadUrl": "{!!asset('js/ckeditor/plugins/imgupload.php')!!}"
		} );
	</script>

@stop











