<!-- Modal -->
<section id="modals">


    <!-- Login Modal -->
    <div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="form-signin-heading modal-title" id="myModalLabel">Login</h2>
                </div>
                    <div class="modal-body">
                        @include('includes.alert')
                        {!! Form::open(array('route' => 'login', 'method' => 'post', 'class' => '', 'id'=>'login')) !!}

                            <div class="form-group">
                                {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus', 'required')) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password','type'=>'text', 'required')) !!}
                            </div>
                            <div class="form-group text-center">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember">  &nbsp; Remember Me</label>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="submit" class="form-control btn btn-success">Login Account</button>

                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="text-center">
                                            <a data-toggle="modal" href="#myModal2"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        {!! Form::close() !!}

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
            </div>
        </div>
    </div>
    <!-- /Logan Modal -->










    <!-- Modal For reset -->
    <div class="modal inmodal" id="myModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content animated flipInY">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <h4 class="modal-title">Forgot Password ?</h4>
                    <small class="font-bold">Recover Your account with your email</small>
                </div>
                <div class="modal-body">
                    <p>Enter your e-mail address below to reset your password.</p>
                    {!! Form::open(array('action' => 'RemindersController@postEmail', 'method' => 'post')) !!}
                    {!! Form::email('email', '', array('class' => 'form-control placeholder-no-fix', 'placeholder' => 'Email Address', 'autocomplete'=>'off',  'required')) !!}
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



















    <!-- Registration Modal -->
    <div class="modal register fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="registrationModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="form-signin-heading modal-title" id="registrationModalLabel">Create a new account</h2>
                </div>
                    <div class="modal-body">

                        {!! Form::open(array('route' => 'user.store', 'method' => 'post', 'class' => '', 'id'=>'register-form')) !!}
                        @include('includes.alert')

                        <div class="row">
                            <div class="form-group">
                                <div class="col-md-6">
                                    {!!Form::select('dept_id', $dept_id, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Society',))!!}
                                </div>
                                <div class="col-md-6">
                                    {!!Form::select('user_type', $user_type, '',array('class' => 'select2 form-control', 'autofocus','placeholder' => 'Select Designation',))!!}
                                </div>
                            </div>
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
                    <div class="form-group">
                        <div class="row">
                            <div class="col-sm-12">
                                <button type="submit" class="form-control btn btn-success btn-block">Register an Account</button>
                            </div>
                        </div>
                    </div>


                    {!! Form::close() !!}

                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
            </div>
        </div>
     </div>
    </div>

    <!-- /Registration Modal -->

</section>