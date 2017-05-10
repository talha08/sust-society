@extends('frontend.layouts.default')
@section('content')




    <div class="breadcrumb-wrapper">
        <div class="pattern-overlay">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <h2 class="title" style="font-size: 13pt">{!!$title!!}</h2>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xs-12 col-sm-6">
                        <div class="breadcrumbs pull-right">
                            <ul>
                                <li>You are Now on:</li>
                                <li><a href="{!! URL::to('/') !!}">Home</a></li>
                                <li><a href="#">Events Reg.</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.alert')













    <!-- Main Content -->
    <div class="main-content">
        <div class="container">
            <div class="col-sm-offset-1 col-md-10 wow fadeIn">
                <table class="table table-striped table-bordered" id="datatable">
                        <thead>
                        <tr>
                            <th>Serial</th>
                            <th>Name</th>
                            <th>Registration/ Designation</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $cnt = 1; ?>
                        @foreach ($regis as $reg)
                            <tr>
                                <td><?php echo $cnt; $cnt++;?></td>
                                <td>{!! $reg->user->name !!}</td>
                                @if($reg->user->hasRole('teacher'))
                                    <td><b>Faculty Member</b></td>
                                @else
                                <td>{!! $reg->user->profile->reg or 'Not Available' !!}</td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /Main Content -->



@stop


@section('style')

    {!! Html::style('assets/datatables/jquery.dataTables.min.css') !!}

    <style>

    /*.modal-dialog  {width:75%;}*/
        .input-sm{
            height: 35px; !important;
        }

    </style>

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







