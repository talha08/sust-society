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
                                            <th>Name</th>
                                            <th>Designation</th>
                                            {{--<th>Actions</th>--}}
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{!! $user->name  !!}</td>
                                                <td>{!! $user->designation  or "Not Given Yet" !!}</td>
                                                {{--<td>--}}
                                                {{--<a class="btn btn-warning btn-xs btn-archive Editbtn" href="{!!route('department.edit',$department->id)!!}"  style="margin-right: 3px;"><i class="fa fa-edit" aria-hidden="true"></i></a>--}}
                                                {{--<a href="#" class="btn btn-danger btn-xs btn-archive deleteBtn"  data-toggle="modal" data-target="#deleteConfirm" deleteId="{!! $department->id!!}"><i class="fa fa-trash" aria-hidden="true"></i></a>--}}
                                                {{--</td>--}}
                                            </tr>





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


    {{--<!-- Modal -->--}}
    {{--<div class="modal fade" id="deleteConfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">--}}
    {{--<div class="modal-dialog">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>--}}
    {{--<h4 class="modal-title" id="myModalLabel">Confirmation</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--Are you sure to delete?--}}
    {{--</div>--}}
    {{--<div class="modal-footer">--}}
    {{--{!! Form::open(array('route' => array('department.delete', 0), 'method'=> 'delete', 'class' => 'deleteForm')) !!}--}}
    {{--<button type="button" class="btn btn-info" data-dismiss="modal">No</button>--}}
    {{--{!! Form::submit('Yes, Delete', array('class' => 'btn btn-danger')) !!}--}}
    {{--{!! Form::close() !!}--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}


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





@stop







