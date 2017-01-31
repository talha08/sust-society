@extends('layouts.default')
@section('content')

    <div class="wrapper wrapper-content">
        <div class="row animated fadeInRight">
            <div class="col-md-4">
                <div class="ibox float-e-margins">
                    <center>
                    <div class="ibox-title">
                        <h5>Profile Detail</h5>
                    </div>
                    <div>
                        <div class="ibox-content no-padding border-left-right">

                            {{--{!!  Html::image(Auth::user()->profile->photo, 'alt', array( 'width' => 200, 'height' => 200, 'class'=>'img-responsive' )) !!}--}}


                            <fieldset>
                                <br/>
                                <img class="preview" id="preview" alt=" " src="{!!asset($user->profile->photo)!!}">
                                <br/>
                                <br/>
                            </fieldset>




                        </div>
                        <div class="ibox-content profile-content">
                            <h4><strong>{!! $user->name  !!}</strong></h4>
                            <p><i class="fa fa-clock-o"></i>  Joined at {!! $user->created_at->diffForHumans() !!}</p>
                            <hr><h3>
                              {!! $user->dept->name !!}

                            </h3><hr>



                            {{--<div class="user-button">--}}
                                {{--<div class="row">--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>--}}
                                    {{--</div>--}}
                                    {{--<div class="col-md-6">--}}
                                        {{--<button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                    </center>
                </div>
            </div>





            <div class="col-md-8">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Activites</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">

                        <div>
                            <div class="feed-activity-list">





                               @if(Auth::user()->id == $user->id)
                                <div class="feed-element">
                                    <div class="media-body ">

                                        {!!Form::model($user->profile,['route' => ['profile.update',$user->id], 'method' => 'put' , 'files'=>true])!!}

                                        @if(Auth::user()->role == 3)
                                        <div class="form-group">
                                            {!! Form::label('father_name', 'Father Name :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('father_name', null ,array('class' => 'form-control','placeholder' =>  'Father Name....'))!!}
                                        </div><br/>


                                        <div class="form-group">
                                            {!! Form::label('mother_name', 'Mother Name :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('mother_name',null,array('class' => 'form-control','placeholder' =>  'Mother Name.....'))!!}
                                        </div><br/>

                                        <div class="form-group">
                                            {!! Form::label('district', 'District :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('district', null,array('class' => 'form-control','placeholder' =>  'District...'))!!}
                                        </div><br/>

                                        <div class="form-group">
                                            {!! Form::label('high_school', 'High School :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('high_school', null,array('class' => 'form-control','placeholder' =>  'High School....'))!!}
                                        </div><br/>
                                        <div class="form-group">
                                            {!! Form::label('college', 'College :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('college', null,array('class' => 'form-control','placeholder' =>  'College...'))!!}
                                        </div><br/>
                                        <div class="form-group">
                                            {!! Form::label('batch', 'Batch :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('batch', null,array('class' => 'form-control','placeholder' =>  'Batch....'))!!}
                                        </div><br/>
                                        <div class="form-group">
                                            {!! Form::label('reg', 'Registration :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('reg', null,array('class' => 'form-control','placeholder' =>  'Registration...'))!!}
                                        </div><br/>
                                        @endif


                                        <div class="form-group">
                                            {!! Form::label('designation', 'Designation :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::text('designation', null,array('class' => 'form-control','placeholder' =>  'Designation....'))!!}
                                        </div><br/>

                                        <div class="form-group">
                                            {!! Form::label('about_me', 'About Me :', array('class' => 'control-label')) !!}<br/>
                                            {!!Form::textarea('about_me',null,array('class' => 'form-control','placeholder' =>  'About me...'))!!}
                                        </div><br/>

                                        <div class="form-group">
                                            {!! Form::label('photo', 'Change Image :', array('class' => 'control-label')) !!}<br/>
                                            <input type="file" name="photo" id="imgInp " onchange="loadFile(event);">
                                        </div><br/>

                                        <div class="form-group">
                                            {!! Form::submit('Submit', array('class' => 'btn btn-block btn-primary')) !!}
                                        </div>

                                    </div>
                                </div>

                            @else

                                @if($user->role == 3)
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                Father name: {!! $user->profile->father_name !!}
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                Mother Name: {!! $user->profile->mother_name !!}
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                District: {!! $user->profile->district !!}
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                High School: {!! $user->profile->high_school !!}
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                College: {!! $user->profile->college !!}
                                            </div>
                                        </div>
                                        <div class="feed-element">
                                            <div class="media-body ">
                                                Registration: {!! $user->profile->reg !!}
                                            </div>
                                        </div>

                                        <div class="feed-element">
                                            <div class="media-body ">
                                                Batch: {!! $user->profile->batch !!}
                                            </div>
                                        </div>
                                @endif


                                   <div class="feed-element">
                                     <div class="media-body ">
                                         Designation: {!! $user->profile->designation !!}
                                     </div>
                                   </div>

                                    <div class="feed-element">
                                        <div class="media-body ">
                                            About User: {!! $user->profile->about_me !!}
                                        </div>
                                    </div>



                            @endif






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
            width:200px;
            height:200px;
            clear:both;
            margin:10px 0;
        }
    </style>
@stop

@section('script')
        <!--photo upload-->
    {!! Html::script('js/photo_upload.js') !!}
@stop