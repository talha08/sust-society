<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-md-6 text-left">
                <p><i class="fa fa-graduation-cap"></i> Best learning management template for ever.</p>
            </div><!-- end left -->

            <div class="col-md-6 text-right">
                <ul class="list-inline">
                    <li>
                        <a class="social" href="#"><i class="fa fa-facebook"></i></a>
                        <a class="social" href="#"><i class="fa fa-twitter"></i></a>
                        <a class="social" href="#"><i class="fa fa-google-plus"></i></a>
                        <a class="social" href="#"><i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"><i class="fa fa-lock"></i> Login & Register</a>
                        <div class="dropdown-menu">
                            {!! Form::open(array('route' => 'login', 'method' => 'post')) !!}
                                <div class="form-title">
                                    <h4>Login Area</h4>
                                    <hr>
                                </div>
                            {!! Form::text('email', '', array('class' => 'form-control', 'placeholder' => 'Email Address', 'type'=>'text','autofocus', 'required')) !!}
                                <div class="formpassword">
                                    {!! Form::password('password', array('class' => 'form-control', 'placeholder' => '********','type'=>'text', 'required')) !!}
                                </div>
                                <div class="clearfix"></div>
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                                <hr>
                                <h4><a href="{!! route('login') !!}">Create an Account</a></h4>
                            {!! Form::close() !!}
                        </div>
                    </li>
                    

                </ul>
            </div><!-- end right -->
        </div><!-- end row -->
    </div><!-- end container -->
</div><!-- end topbar -->