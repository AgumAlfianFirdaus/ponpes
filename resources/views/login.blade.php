<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Luhur Al-Kautsar</title>

    <!-- Bootstrap -->
    <link href="{{ asset("assets/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("assets/gentelella/vendors/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="https://colorlib.com/polygon/gentelella/css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset("assets/gentelella/build/css/custom.min.css") }}" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <  class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form method="post" action="{{url('/login')}}" class="form-login">
              {{csrf_field()}}
              	<div class="msg-text"><br /><br />
					@if(Session::has('message'))
						<span> {{ Session::get('message')}} </span>
					@endif
				</div>
              <h1>Login Form</h1>
              <div>
              <Input type="hidden" name"_token" value="{{csrf_token()}}">
              {{csrf_field()}}
                <input type="text" name="username"  class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div> 

                  <input type="submit" class="btn btn-default submit"  value="Log in">
                <a class="reset_pass" href="#" class="btn btn-default submit">Lost your password?</a>
              </div>

              <div class="clearfix"></div>
                <div class="clearfix"></div>
                <br/>

                <div>
                  <h1><i class="fa fa-institution"></i> Pondok Pesantren Luhur Alkautsar </h1>
                  <p> Luhur Al-Kautsar Islamic Boarding School Cirebon 2016©</p>
                </div>
              </div>
            </form>
          </section>
        </div>

       <!--  <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form method="post" action="{{url('/addLog')}}" enctype="multipart/form-data">
              {{csrf_field()}}
              <h1>Create Account</h1>
              <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" name="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" class="btn btn-default submit" value="Submit" style=" position: relative; left: 27%;">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Indosystem CMS</h1>
                  <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div> -->
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>