@extends('layouts.default')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="wrapper wrapper-content animated fadeInRight">
                <center>
                    @if(Auth::user()->hasRole('dept_admin'))
                        <a data-toggle="modal" class="btn btn-primary btn-xs" href="#myModal2"><i class="fa fa-user"></i> Add New Member </a>
                    @endif
                </center>
                <br>
                @if($comLists->count() != 0)
                    @foreach($comLists as $com)

                        <div class="col-lg-3">
                            <div class="contact-box center-version">

                                <a href="{!! route('userProfile', $com->user->id) !!}">
                                    {!!  Html::image($com->user->profile->photo, 'alt', array( 'width' => 80, 'height' => 80, 'class'=>'img-circle' )) !!}
                                    <h3 class="m-b-xs"><strong>{!! $com->user->name !!}</strong></h3>
                                    <div class="font-bold">{!! $com->committeMemberType->name !!}</div>
                                </a>

                                <div class="contact-box-footer">
                                    <div class="m-t-xs btn-group">
                                        {{--<a class="btn btn-xs btn-white"><i class="fa fa-phone"></i> Call </a>--}}
                                        {{--<a class="btn btn-xs btn-white"><i class="fa fa-envelope"></i> Email</a>--}}
                                        <a href="{!! route('userProfile', $com->user->id) !!}" class="btn btn-xs btn-white"><i class="fa fa-user-plus"></i> Profile</a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    @endforeach
                   @else
                   <center> No Member Added Yet </center>
                   @endif

            </div>
        </div>
    </div>




    <!-- Modal For reset -->
    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Add New Committee Member</h4>
                    <small class="font-bold">Add current Committee member</small>
                </div>
                <div class="modal-body">

                    {!! Form::open(array('route' => 'committeeMemberList.store',  'files' => true) ) !!}


                    <div class="form-group">
                        {!! Form::label('member_type_id', 'Member Type :', array('class' => 'control-label')) !!}<br/>
                        {!!Form::select('member_type_id', $type, '',array('placeholder' => 'Please select a type','id'=>'type','class' => 'select2 form-control placeholder-no-fix', 'autofocus'))!!}
                    </div><br/>

                    <div class="form-group">
                        {!! Form::label('user_id', 'Member Name :', array('class' => 'control-label')) !!}<br/>
                        {!!Form::select('user_id', $user, '',array('id'=>'user','class' => 'select2 form-control placeholder-no-fix', 'autofocus'))!!}
                    </div><br/>

                     {!!  Form::hidden('committee_id', $curr->id) !!}

                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                    {!! Form::submit('Submit', array('class' => 'btn btn-success')) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->






@stop

@section('style')
@stop

@section('script')
    <script type="text/javascript" charset="utf-8">
        //depandable dropdown start
        $('#type').on('change', function(e){

            var member_type_id = e.target.value;


            //ajax
            var path =  "<?php echo URL::route('apiroute'); ?>";
            $.get(path+'?member_type_id='+member_type_id, function(data){

                //success data
                $('#user').empty();
                $('#user').append('<option value=""> Please choose one</option>');


                $.each(data, function(key, value) {
                    var option = $("<option></option>")
                        .attr("value", key)
                        .text(value);

                    $('#user').append(option);
                });


//                $.each(data, function(index, subcatObj){
//                   // console.log();
//                    $('#user').append('<option value="' + subcatObj.id+'">'// this returns the value
//                        + subcatObj.name + '</option>'); //this returns the key
//                });

            });
        });
        //depandable dropdown end

    </script>
@stop

