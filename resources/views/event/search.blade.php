@extends('layouts.default')
@section('content')

	<div class="row">
		<div class="col-lg-12">
			@include('includes.alert')


			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">


						<div class="panel-heading">

							<h3 class="panel-title">{!!$title!!}</h3>

                                        <span class="pull-right">
                                               <a href="{!! route('event.create')!!}"><button class="btn btn-success">Create Event</button></a>
                                        </span>
						</div><br>



						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">

									<table class="table table-striped table-bordered" id="datatable">
										<thead>
										<tr>
											<th>Title</th>
											<th>Society</th>
											<th>Start Date</th>
											<th>End Date</th>
											<th>Venue </th>
											<th>Registration</th>
											<th>Actions</th>

										</tr>
										</thead>
										<tbody>
										@foreach ($events as $event)
											<tr>
												<td> <a data-toggle="modal" style="color: teal;" data-target="#myModal_{{$event->id}}" >{!!  str_limit($event->headline,30) !!}</a></td>
												<td>{!! $event->dept->name !!}</td>
												<td>{!! $event->start_time !!}</td>
												<td>{!! $event->end_time !!}</td>
												<td>{!! $event->venue !!}</td>
												<td>
													@if($event->open_registration ==1 )
														<a class="btn btn-info btn-xs" href="{!!route('event.status',$event->id)!!}"  style="margin-right: 3px;">Open Registration</a>
													@else
														<a class="btn btn-warning btn-xs" href="{!!route('event.status',$event->id)!!}"  style="margin-right: 3px;">Close Registration</a>
													@endif
												</td>
												<td>
												     <a data-toggle="modal" class="btn btn-success btn-xs btn-archive Editbtn" data-target="#myDataModal_{{$event->id}}" ><i class="fa fa-upload" aria-hidden="true"></i></a>
													<a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('event.edit',$event->id)!!}"  style="margin-right: 3px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
													<a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn"  data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $event->id!!}"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</td>
											</tr>

											<!-- Details View Modal -->
											<div id="myModal_{{$event->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content" >
														<center>
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"><img class="" src="{!! $event->banner !!}" alt="" align="left">
																	<br/><br/>
																	{{ $event->headline}}
																</h4>
															</div>
															<div class="modal-body" >


																<p><b>Details: </b>{{ $event->description}}</p>
																<p><b>Start Date: </b>{{ $event->start_time}}</p>
																<p><b>End Date: </b>{{ $event->end_time}}</p>
																<p><b>Venue: </b>{{ $event->venue}}</p><br/>
																<p><b>Registration: </b>
																@if($event->open_registration ==1 )
																	<a class="btn btn-info btn-xs" href="{!!route('event.status',$event->id)!!}"  style="margin-right: 3px;">Open Registration</a>
																@else
																	<a class="btn btn-warning btn-xs" href="{!!route('event.status',$event->id)!!}"  style="margin-right: 3px;">Close Registration</a>
																@endif
																</p>


																<b>Attachment: </b><br>
																@if($event->eventFile->count() != 0)
																	@foreach($event->eventFile as $file)
																		{!! $file->event_file_title !!}
																		<a class="btn btn-info btn-xs btn-archive" href="{!! $file->event_file!!}" target="_blank">
																			<i class="fa fa-download" aria-hidden="true"></i>
																		</a><br><br/>
																	@endforeach
																@else
																	<p>No Attachment Found</p>
																@endif

															</div>
														</center>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<!--modal -->



											<!-- file upload Modal -->
											<div id="myDataModal_{{$event->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content" >
														<center>
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">
																	<br/><br/>
																	<b>{{ $event->headline}}</b>
																</h4>
															</div>
															<div class="modal-body" >

																{!! Form::open(array('route' => 'event.singleUpload',  'files' => true) ) !!}
																<br/><br/>
																<div class="form-group">
																	{!! Form::label('event_file_title', 'File Title :', array('class' => 'control-label')) !!}<br/>
																	{!!Form::text('event_file_title', '',array('class' => 'form-control','placeholder' =>  'File title here'))!!}
																</div><br/><br/>

																{!! Form::file('file[]', array('multiple'=>true)) !!}
																<br/><br/><br/>
																{{--for pass the value of event--}}
																{!! Form::hidden('id', $event->id) !!}
																<div class="form-group">
																	{!! Form::submit('Upload File', array('class' => 'btn btn-primary')) !!}
																</div>

																{!! Form::close() !!}
															</div>
														</center>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
														</div>
													</div>
												</div>
											</div>
											<!--modal -->

										@endforeach
										</tbody>
									</table>


								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


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
					{!! Form::open(array('route' => array('event.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
					<button type="button" class="btn btn-info" data-dismiss="modal">No</button>
					{!! Form::submit('Yes, Delete', array('class' => 'btn btn-danger')) !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>


@stop


@section('style')

	{!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

	{{--<style>--}}

		{{--.modal-dialog  {width:75%;}--}}
	{{--</style>--}}

@stop

@section('script')

	{!! Html::script('assets/datatables/jquery.dataTables.min.js') !!}
	{!! Html::script('assets/datatables/dataTables.bootstrap.js') !!}


	//for Datatable
	<script type="text/javascript">

		$(document).ready(function() {
			$('#datatable').dataTable();
		});
	</script>



	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			/* do not add datatable method/function here , its always loaded from footer -- masiur */
			$(document).on("click", ".deleteBtn", function() {
				var deleteId = $(this).attr('deleteId');
				var url = "<?php echo URL::route('event.index'); ?>";
				$(".deleteForm").attr("action", url+'/'+deleteId);
			});

		});
	</script>


@stop







