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
								   <a href="{!! route('committee.create')!!}"><button class="btn btn-success">Create New Committee</button></a>
							</span>
						</div><br>



						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">

									<table class="table table-striped table-bordered" id="datatable">
										<thead>
										<tr>
											<th>id</th>
											<th>Society</th>
											<th>Year</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
										</thead>
										<tbody>
										@foreach ($committees as $committee)
											<tr>
												<td>{!! $committee->id !!}</td>
												<td> <a data-toggle="modal" style="color: teal;" data-target="#myModal_{{$committee->id}}" >{!! $committee->year  !!}</a></td>
												<td>{!!$committee->department->name !!}</td>
												<td>{!!$committee->is_current !!}</td>
												<td>
													<a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('committee.edit',$committee->id)!!}"  style="margin-right: 3px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
													<a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn"  data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $committee->id!!}"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</td>
											</tr>

											<!-- Details View Modal -->
											<div id="myModal_{{$committee->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content" >
														<center>
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title">
																	<br/><br/>
																	<h2>{{ $committee->year}}</h2>
																</h4>
															</div>
															<div class="modal-body" >

																<center>
																	<img src="{!! $committee->department->logo_path !!}" alt="Test Image" />
																<br><br>
																<p><b></b>{{ $committee->is_current}}</p><br/>
																</center>

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
					{!! Form::open(array('route' => array('committee.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
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
				var url = "<?php echo URL::route('committee.index'); ?>";
				$(".deleteForm").attr("action", url+'/'+deleteId);
			});

		});
	</script>


@stop







