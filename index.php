
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Contact Form with reCaptcha</title>

    <!-- Bootstrap 3.3 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3>Contact Form with reCaptcha</h3>
                <hr>
            </div><!-- /.col -->
            <div class="col-xs-12">
                <p class="lead">
                    Thank you for contacting us.
                    <small>We will respond as soon as possible</small>
                </p>
            </div><!-- /.col -->
            <div class="col-xs-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form id="contact-form" method="post" action="submit/contact_process.php">
                            <div class="messages"></div>
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="first-name">First Name:</label>
                                    <input type="text" class="form-control" name="first-name" id="first-name" placeholder="Given Name">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="last-name">Last Name:</label>
                                    <input type="text" class="form-control" name="last-name" id="last-name" placeholder="Family Name">
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="email">Email address: <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" name="email" id="email" value="" placeholder="name@example.com" required="required" data-error="Valid email is required.">
                                    <small class="form-text text-muted">Please make sure it's correct.</small>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label for="message">Your Message: <span class="text-danger">*</span></label>
                                    <textarea class="form-control" name="message" id="message" rows="4" placeholder="Type your message here." required="required" data-error="Message required."></textarea>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <!-- Google reCaptcha -->
                                    <div class="g-recaptcha" data-sitekey="YourReCaptchaSiteKey"></div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <button name="submit" id="submit" type="submit" class="btn btn-lg btn-primary">Submit</button>
                                </div><!-- /.form-group -->
                            </div><!-- /. col -->
                            <div class="col-xs-12 col-sm-6"><p class="text-muted"><strong>*</strong> These fields are required.</p></div>
                        </form><!-- /form -->
                    </div><!-- /.panel-body -->
                </div><!-- /.panel -->

            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container -->

    <!-- /Page Content -->
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <!-- Google ReCaptcha -->
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!-- Validator -->
    <script src="submit/validator.js"></script>
    <!-- Contact -->
    <script src="submit/contact.js"></script>
</body>
</html>