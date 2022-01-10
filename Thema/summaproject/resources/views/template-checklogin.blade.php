{{--
  Template Name: login template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

  @endwhile
@endsection

<?php

include("C:\Wamp\www\projecten\wp-content/themes/pocketmedia/resources/views/functions/functions.php");

session_start();

$msgemail = '';
$email = '';
$con = mysqli_connect('localhost','root','','project');


if(isset($_POST['submit'])) 
{
  $email=$_POST['mail'];
  $password=$_POST['pass'];


if(email_exists($email,$con)) {

  $pass=mysqli_query($con, "SELECT password FROM users WHERE mail='$email'");
  $pass_w=mysqli_fetch_array($pass);
  $dpass=$pass_w['password'];

  if($password!==$dpass){
    $msgerror="<div class='error'> Wachtwoord is fout! </div>";
  }
  else {
    $_SESSION['mail']=$email;
    header("location:profile");
  }

} else {
  $msgemail = "<div class='error'> Email bestaat niet! </div>";
}
}


?>
<title> Summa Fashion - Login </title>
<body id="body-bg">
<br/><br/><br/><br/><br/><br/>
<div class="container">
  <div class="login-form col-md-4 offset-md-4">
    <div class="jumbotron" style="padding-top: 5em;">
      <h2 style="text-align: center;"> Login </h2>
      <form method="post">
        <div class="form-group">
          <label>Email : </label>
          <input type="email" name="mail" class="form-control" required/>
          <?php  echo $msgemail ?>
        </div>
        <div class="form-group">
          <label>Wachtwoord : </label>
          <input type="password" name="pass" class="form-control" required/>
          <?php  echo $msgerror ?>
        </div>
        <div class="form-group">
          <input type="checkbox" name="check"/>
          &nbsp; Hou mij logged in
        </div> <br/>

      <div class="form-group">
        <input type="submit" name="submit" value="Login" class="btn btn-success"/>
      </div>

      <br/>
      <br/>
      <a href="http://localhost/projecten/registration/"> Nog geen account? </a>

      </form>
    </div>
  </div>
</div>
<br/>
</body>
<style>

#body-bg {
  background: url("https://i.ibb.co/RzFpG1J/Summa-Fashion-37.jpg") center no-repeat fixed;
}

.formclass {
    text-align: center;
}

.inloggen-h1 {
    margin-top: 2em;
    text-align: center;
}


.login_section .advertiser_left {
    //height: 100%;
    width: 47%;
    background-size: cover;
  }

  .login_section .login_right {
    background-color: #ffff;
    height: 100%;
    width: 100%;
    display: flex;
    padding: 2em 0 2em 0;
  }

  .login_section  .login_right .login_right_restrain {
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: auto;
  }

      .login_section  .login_right .login_right_restrain h1 {
        font-size: 2em;

        font-weight: 800;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 1em;
        color: rgb(255, 26, 255);
      }

      .login_section .login_right .login_right_restrain h3 {
        font-size: 1.3em;
        font-weight: 300;
        margin-bottom: 1.5em;
        color: white;
      }

      .login_section .login_right .login_right_restrain p {
        font-size: 1em;
        font-weight: 300;
        margin-bottom: 1em;
        color: white;
        line-height: 22px;
      }

      .login_section .login_right .login_right_restrain .signup {
        border-radius: 50%;
        height: 6em;
        width: 6em;
        margin: 0 auto;
        border: none;
        outline: 0 !important;
        color: rgb(255, 26, 255);
        background-color: white;
      }

      .login_section .login_right .login_right_restrain .signup:hover {
        cursor: pointer;
      }

@media only screen and (max-width: 800px) {
  .login_section {
    flex-direction: column;
  }

    .login_section .login_left {
      margin: auto;
      height: 15em;
      width: 90%;
    }

    .login_section .login_right {
      margin: auto;
      width: 90%;
    }
  }

  .error {
    color: red;
  }



</style>