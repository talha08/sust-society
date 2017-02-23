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
               <a href="{!! route('slider.index')!!}"><button class="btn btn-success">All Slide</button></a>
               </span>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="panel-body">
									{!! Form::open(array('route' => 'slider.store', 'files'=>true) ) !!}
									<div class="form-group">
										{!! Form::label('slider_title', 'Title :', array('class' => 'control-label')) !!}<br/>
										{!!Form::text('slider_title', '',array('class' => 'form-control','placeholder' =>  'Slider title here'))!!}
									</div>
									<br/>
									<div class="form-group">
										{!! Form::label('slider_desc', 'Short Description (within 2 or 3 sentence) :', array('class' => 'control-label')) !!}<br/>
										{!!Form::textarea('slider_desc', '',array('class' => 'summernote form-control','autofocus'))!!}
									</div>
									<br/>

									<fieldset>
										<label>
											UPLOAD PICTURE:
											<p style="color: red">(height = 1140 , width = 400)</p>
										</label>
										<br/>
										<img class="preview" id="preview" alt=" " src="{!!asset('upload/slider/home.jpg')!!}">
										<br/>
										<br/>
										<input type="file" name="image" id="imgInp" onchange="loadFile(event);">
									</fieldset>

									<div class="form-group">
										{!! Form::submit('New Slider', array('class' => 'btn btn-primary')) !!}
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
		fieldset {
			border:0;
			margin-bottom:20px;
		}
		input {
			display:block;
		}
		img.preview {
			width:960px;
			height:400px;
			clear:both;
			margin:10px 0;
		}
	</style>
@stop

@section('script')
		<!--photo upload-->
	{!! Html::script('js/photo_upload.js') !!}
@stop