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
						</div><br>



						<div class="panel-body">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12">

									<table class="table table-striped table-bordered" id="datatable">
										<thead>
										<tr>
											<th>id</th>
											<th>Society Name</th>
											<th>Status</th>
											<th>Actions</th>
										</tr>
										</thead>
										<tbody>
										@foreach ($departments as $department)
											<tr>
												<td>{!! $department->id !!}</td>
												<td> <a data-toggle="modal" style="color: teal;" data-target="#myModal_{{$department->id}}" >{!! str_limit($department->name,30) !!}</a></td>
												@if($department->status == true)
													<td>{!! 'Running' !!}</td>
												@else
													<td>{!! 'Inactive' !!}</td>
												@endif


												<td>
													@if($department->status == true)
														<a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('department.statusChange',$department->id)!!}"  style="margin-right: 3px;">Deactive</a>
													@else
														<a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('department.statusChange',$department->id)!!}"  style="margin-right: 3px;">Activate</a>
													@endif
													<a class="btn btn-info btn-xs btn-archive Editbtn" data-toggle="modal" style="color: teal;" data-target="#myModalAddUser_{{$department->id}}" ><i class="fa fa-user" aria-hidden="true"></i></a>
													<a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('department.edit',$department->id)!!}"  style="margin-right: 3px;"><i class="fa fa-edit" aria-hidden="true"></i></a>
													<a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn"  data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $department->id!!}"><i class="fa fa-trash" aria-hidden="true"></i></a>
												</td>
											</tr>




											<!-- USER ADD Modal -->
											<div id="myModalAddUser_{{$department->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content" >
														<center>
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"><img class="" src="" alt="" align="left">
																	<br/><br/>
																Create Admin For {{ $department->name}}
																</h4>
															</div>
															<div class="modal-body" >

																{!! Form::open(array('route' => 'user.adminUserStore', 'method' => 'post')) !!}

																<div class="form-group">
																	{!!Form::select('user_type', $user_type, '',array('class' => 'form-control', 'autofocus','placeholder' => 'Select Designation',))!!}
																</div>

																<div class="form-group ">
																	{!! Form::text('name', '', array('class' => 'form-control', 'placeholder' => 'Full Name', 'autofocus', 'required')) !!}
																</div>

																<div class="form-group ">
																	{!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'autofocus', 'required')) !!}
																</div>


																<div class="form-group ">
																	{!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password', 'required')) !!}
																</div>

																<div class="form-group ">
																	{!! Form::password('password_confirmation', array('class' => 'form-control', 'placeholder' => 'Confirm Password', 'required')) !!}
																</div>

																{!!  Form::hidden('dept_id', $department->id) !!}

															</div>
														</center>
														<div class="modal-footer">
															<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
															{!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
															{!! Form::close() !!}
														</div>
													</div>
												</div>
											</div>
											<!--/USER ADD Modal -->











											<!-- Details View Modal -->
											<div id="myModal_{{$department->id}}" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<!-- Modal content-->
													<div class="modal-content" >
														<center>
															<div class="modal-header">
																<button type="button" class="close" data-dismiss="modal">&times;</button>
																<h4 class="modal-title"><img class="" src="" alt="" align="left">
																	<br/><br/>
																	{{ $department->name}}
																</h4>
															</div>
															<div class="modal-body" >

																<center>
																	<img src="{!! asset($department->logo_path)!!}" alt="Test Image" />
																<br><br>
																<p><b></b>{{ $department->description}}</p><br/>
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
					{!! Form::open(array('route' => array('department.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}
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
				var url = "<?php echo URL::route('department.index'); ?>";
				$(".deleteForm").attr("action", url+'/'+deleteId);
			});

		});
	</script>


@stop







