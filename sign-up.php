<?php 

include 'constant-inc.php';
$conn = connect();
$site_url = base_url();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Bootstrap 5 Admin &amp; Dashboard Template">
    <meta name="author" content="Bootlab">

    <title>Sign Up Page</title>

    <link rel="" href="<?php echo $site_url;?>dashboard.html" />
    <link rel="shortcut icon" href="<?php echo $site_url;?>img/favicon.ico">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500&amp;display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />

    <link class="js-stylesheet" href="<?php echo $site_url;?>css/light.css" rel="stylesheet">
    <script src="<?php echo $site_url;?>js/settings.js"></script>
    <!-- END SETTINGS -->
    <script>
        (function (h, o, t, j, a, r) {
            h.hj = h.hj || function () {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2120269,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-behavior="sticky">
    <div class="main d-flex justify-content-center w-100">
        <main class="content d-flex p-0">
            <div class="container d-flex flex-column">
                <div class="row h-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">

                            <div class="text-center mt-4">
                                <h1 class="h2">Get started</h1>
                                <p class="lead">
                                    Start creating the best ad management system for your ads.
                                </p>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <div class="m-sm-4">
                                        <form>
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input class="form-control form-control-lg" type="text" id="name"
                                                    placeholder="Enter your name" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Company</label>
                                                <input class="form-control form-control-lg" type="text" id="company"
                                                    placeholder="Enter your company name" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control form-control-lg" type="email" id="email"
                                                    placeholder="Enter your email" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control form-control-lg" id="password"
                                                    name="password" type="password" placeholder="Enter password" />
                                            </div>
                                            <div class="text-center mt-3">
                                                <button type="button" class="btn btn-lg btn-primary" id="sign-up">Sign up</button>
                                                <a href="sign-in.php" class="btn btn-lg btn-success">Sign In</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="<?php echo $site_url;?>js/app.js"></script>
	<script src="https://kit.fontawesome.com/bb74ce6b04.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function(){
            $('#sign-up').click(function(){
                let name = $('#name').val()
                let company = $('#company').val()
                let email = $('#email').val()
                let password = $('#password').val()

                if(name != '' && email != '' && password != ''){
                    let dataString = 'name=' + name + '&email=' + email + '&password=' + password

                    $.ajax({
                        url: "api/signup.php",
                        method: 'post',
                        data : dataString,
                        success:function(r){
                            if(r == 'true'){
                                alert("Wellcome to the world's of Ad Campaign!!");
                                window.location.href = 'dashboard.php';
                            }else if(r == 'false'){
                                alert("Please try again!!")
                            }
                        }
                    })
                }else{
                    alert('Please Enter Name, Email and Password to continue!!')
                }
            })
        })
    </script>

</body>



</html>