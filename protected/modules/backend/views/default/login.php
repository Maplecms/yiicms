<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Logn In - Stilearn Admin Bootstrap</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="stilearning" />

        <!-- google font -->
        <link href="http://fonts.googleapis.com/css?family=Aclonica:regular" rel="stylesheet" type="text/css" />
        
        <!-- styles -->
        <link href="/assets/backend/css/bootstrap.css" rel="stylesheet" />
        <link href="/assets/backend/css/bootstrap-responsive.css" rel="stylesheet" />
        <link href="/assets/backend/css/stilearn.css" rel="stylesheet" />
        <link href="/assets/backend/css/stilearn-responsive.css" rel="stylesheet" />
        <link href="/assets/backend/css/stilearn-helper.css" rel="stylesheet" />
        <link href="/assets/backend/css/stilearn-icon.css" rel="stylesheet" />
        <link href="/assets/backend/css/font-awesome.css" rel="stylesheet" />
        <link href="/assets/backend/css/animate.css" rel="stylesheet" />
        <link href="/assets/backend/css/uniform.default.css" rel="stylesheet" />
        
        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

    <body>
        <!-- section header -->
        <header class="header" data-spy="affix" data-offset-top="0">
            <!--nav bar helper-->
            <div class="navbar-helper">
                <div class="row-fluid">
                    <!--panel site-name-->
                    <div class="span2">
                        <div class="panel-sitename">
                            <h2><a href="index.html"><span class="color-teal">Sti</span>learn</a></h2>
                        </div>
                    </div>
                    <!--/panel name-->
                </div>
            </div><!--/nav bar helper-->
        </header>
        
        <!-- section content -->
        <section class="section">
            <div class="container">
                <div class="signin-form row-fluid">
                    <!--Sign In-->
                    <div class="span5 offset1">
                        <div class="box corner-all">
                            <div class="box-header grd-teal color-white corner-top">
                                <span>Sign in:</span>
                            </div>
                            <div class="box-body bg-white">
                                <form id="sign-in" method="post" />
                                    <div class="control-group">
                                        <label class="control-label">Username</label>
                                        <div class="controls">
                                            <input type="text" class="input-block-level" data-validate="{required: true, messages:{required:'Please enter field username'}}" name="login_username" id="login_username" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Password</label>
                                        <div class="controls">
                                            <input type="password" class="input-block-level" data-validate="{required: true, messages:{required:'Please enter field password'}}" name="login_password" id="login_password" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <div class="pull-right helper-font-32">
                                            <a href="#" rel="tooltip-left" title="Sign in using twitter account"><i class="socialico-twitter-sign color-blue"></i></a>
                                            <a href="#" rel="tooltip-left" title="Sign in using facebook account"><i class="socialico-facebook-sign color-sky"></i></a>
                                        </div>
                                        <label class="checkbox">
                                            <input type="checkbox" data-form="uniform" name="remember_me" id="remember_me_yes" value="yes" /> Remember me
                                        </label>
                                    </div>
                                    <div class="form-actions">
                                        <input type="submit" class="btn btn-block btn-large btn-primary" value="Sign into account" />
                                        <p class="recover-account">Recover your <a href="#modal-recover" class="link" data-toggle="modal">username or password</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div><!--/Sign In-->
                    
            
            <!-- modal recover -->
            <div id="modal-recover" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="modal-recoverLabel" aria-hidden="true">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 id="modal-recoverLabel">Reset password <small>Username Or Email Address</small></h3>
                </div>
                <div class="modal-body">
                    <form id="form-recover" method="post" />
                        <div class="control-group">
                            <div class="controls">
                                <input type="text" data-validate="{required: true, email:true, messages:{required:'Please enter field email', email:'Please enter a valid email address'}}" name="recover" />
                                <p class="help-block helper-font-small">Enter your username or email address and we will send you a link to reset your password.</p>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <input type="submit" form="form-recover" class="btn btn-primary" value="Send reset link" />
                </div>
            </div><!-- /modal recover-->
        </section>

        <!-- javascript
        ================================================== -->
        <script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
        <script src="/assets/backend/js/jquery.js"></script>
        <script src="/assets/backend/js/bootstrap.js"></script>
        <script src="/assets/backend/js/uniform/jquery.uniform.js"></script>
        
        <script src="/assets/backend/js/validate/jquery.metadata.js"></script>
        <script src="/assets/backend/js/validate/jquery.validate.js"></script>
        
        <script type="text/javascript">
            $(document).ready(function() {
                // try your js
                
                // uniform
                $('[data-form=uniform]').uniform();
                
                // validate
                $('#sign-in').validate();
                $('#sign-up').validate();
                $('#form-recover').validate();
            })
        </script>
    </body>
</html>
