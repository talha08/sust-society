@extends('layouts.default')
@section('content')
	@include('includes.alert')


	<center><br><br>
		<div class="album">
			@foreach($albums as $album)
				<a href="{!! route('album.search',$album->id) !!}"><button class="btn btn-default">{!! $album->album_title !!}</button></a>
			@endforeach
		</div><br>
		Photos From  <b>{!!  $al->album_title or ' All '  !!}</b> Album
		<br>
		<hr>

		@if(Route::currentRouteName() == 'album.index')
			<a href="{!! route('album.create') !!}"><button class="btn btn-success">Create New Album</button></a>
		@else
			<button type="button" class="btn btn-warning btn-sm btn--edit" data-for="" data-toggle="modal" data-target="#gallery{!! $al->id !!}">
				<i class="fa fa-pencil-square-o" aria-hidden="true"> Insert New Photo</i>
			</button>
		@endif




		<br><br>
		<div id="bg-primary" class="panel-collapse collapse in">
			<div class="portlet-body">
				<!-- Internal panel Start -->
				<div class="row">
					<div class="">
						<div class="widget-panel widget-style-2 white-bg">
							@if(!empty(count($photos)))
								@foreach($photos as $photo)

									<img height="200" width="220" data-target="#myModal_{!!$photo->id!!}" data-toggle="modal" class="id_check"
										 src='{!!asset($photo->album_photo)!!}' alt='' />

									<!-- Modal -->
									<div id="myModal_{!!$photo->id!!}" class="modal fade" role="dialog">
										<div class="modal-dialog">
											<!-- Modal content-->
											<div class="modal-content" >
												<center>
													Album : {!! $photo->album->album_title !!}<br><br>
													<img height="400" width="420" src='{!!asset($photo->album_photo)!!}' alt='' />
												</center>
												<div class="modal-footer">
													<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
													<a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn" data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $photo->id !!}" >Delete</a>
												</div>
											</div>
										</div>
									</div>
									<!--modal -->
								@endforeach
							@else
								No Photo Found!!
							@endif
						</div>
					</div>
				</div>
				<!-- Internal panel end -->
			</div>
		</div>







		<!-- Modal -->
		<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Confirmation</h4>
					</div>
					<div class="modal-body">
						Are you sure to delete?
					</div>
					<div class="modal-footer">
						{!! Form::open(array('route' => array('photo.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
						<button type="button" class="btn btn-danger" data-dismiss="modal">No</button>
						{!! Form::submit('Yes, Delete', array('class' => 'btn btn-success')) !!}
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>


	</center>





	@if(Route::currentRouteName() == 'album.index')
	@else
			<!-- Skill ADD modal -->
	<div class="modal fade" id="gallery{!! $al->id!!}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">Upload New Photo</h4>
				</div>
				<div class="modal-body">
					{!! Form::open(array('route' => 'album.update', 'method' => 'post',  'files' => true)) !!}

					<div class="form-group">
						{!! Form::label('file', 'Photo Upload :', array('class' => 'control-label')) !!} <br>
						{!! Form::file('file[]', array('id' =>'choose', 'multiple'=>true)) !!}
					</div><br/>

					<div id="uploadPreview"></div><br><br>

					{!!  Form::hidden('user_id', Auth::user()->id) !!}
					{!!  Form::hidden('album_id', $al->id) !!}

				</div>
				<div class="modal-footer">
					{!! Form::submit('Cancel', array('data-dismiss'=>'modal','type'=>'button', 'class' => 'btn btn-info')) !!}
					{!! Form::submit('Update', array('class' => 'btn  btn-success ', 'type'=>'submit')) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>

	@endif

@stop



@section('style')

	<style>
		#uploadPreview img{
			height: 64px;
		}
	</style>
@stop


@section('script')

	{!! Html::script('js/multipleImage.js') !!}
	<script>
		//		$(document).ready(function () {
		//			$('img').on('click', function () {
		//				var image = $(this).attr('src');
		//				//alert(image);
		//				$('#myModal').on('show.bs.modal', function () {
		//					$(".showimage").attr("src", image);
		//				});
		//			});
		//		});


		$('.deleteBtn').click(function() {

			var deleteId = $(this).attr('deleteId');
			//window.alert(deleteId);
			var url = "<?php echo URL::route('album.index'); ?>";
			$(".deleteForm").attr("action", url+'/'+deleteId);
		});



	</script>


@stop











