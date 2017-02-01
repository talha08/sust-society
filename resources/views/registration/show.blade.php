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
                                            <th>Name</th>
                                            <th>Registration</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach ($regis as $reg)
                                            <tr>
                                                <td>{!! $regis->id !!}</td>
                                                <td>{!! $regis->user->name !!}</td>
                                                <td>{!! $regis->user->profile->reg !!}</td>
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





@stop







