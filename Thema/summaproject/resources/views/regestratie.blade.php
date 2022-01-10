{{--
  Template Name: register template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

  @endwhile
@endsection
<title> Summa Fashion - Registratie </title>
<?php


$con = mysqli_connect('localhost','root','','project');





$firstname="";
$lastname="";
$email="";
$date="";
$password="";
$c_password="";
$image="";



$msg="";
$msg2="";
$msg3="";
$msg4="";
$msg9="";

if(isset($_POST['submit'])) {
  $firstname=$_POST['fname'];
  $lastname=$_POST['lname'];
  $email=$_POST['mail'];
  $date=$_POST['dob'];
  $password=$_POST['pass'];
  $c_password=$_POST['cpass'];
  $image=$_FILES['image']['name'];
  $tmp_image=$_FILES['image']['tmp_name'];
  $checkbox=isset($_POST['check']);

  if(strlen($firstname)<3)
  {
    $msg="<div class='error'> Voornaam moet minimaal 4 letters bevatten </div>";
  }
  else if(strlen($lastname)<3)
  {
    $msg2="<div class='error'> Achternaam moet minimaal 4 letters bevatten </div>";
  }
  else if(strlen($password)<5) {
    $msg3="<div class='error'> Uw wachtwoord moet langer zijn dan 5 letters</div>";
  }
  else if($password!==$c_password) {
    $msg4="<div class='error'> Uw wachtwoord is niet hetzelfde!</div>";
  }
  else {
    mysqli_query($con, "INSERT INTO users(first_name,last_name,mail,dob,img,password)
    VALUES ('$firstname','$lastname','$email','$date','$image','$password')");
    $msg9="<div class='success'>U bent nu geregistreerd!</div>";
    header("location:login");
  }
}

?>
<body id="body-bg">
<div class="container container-downy">
  <div class="login-form col-md-4 offset-md-4">
    <div class="jumbotron" style="margin-top:20px;padding-top:20px;">
    <h3 style="text-align: center;">Registratie</h3><br/>
      <?php  echo $msg9 ?>
    <form method="post" enctype="multipart/form-data">
    <div class="form-group">
    <label>First Naam : </label>
    <input type="text" name="fname" placeholder="Voornaam" class="form-control" value="<?php echo $firstname; ?>" required>
    <?php  echo $msg ?>
    </div>
    <div class="form-group">
    <label>Achternaam : </label>
    <input type="text" name="lname" placeholder="Achternaam" class="form-control" value="<?php echo $lastname; ?>" required>
    <?php  echo $msg2 ?>
    </div>
    <div class="form-group">
    <label>Email : </label>
    <input type="email" name="mail" placeholder="Email adres" class="form-control" value="<?php echo $email; ?>" required>
    
    </div>
    <div class="form-group">
    <label>Geboortedatum : </label>
    <input type="date" name="dob" class="form-control" required>
    </div>
    <div class="form-group">
    <label>Wachtwoord : </label>
    <input type="password" name="pass" placeholder="Wachtwoord" class="form-control" required>
    <?php  echo $msg3 ?>
    </div>
    <div class="form-group">
    <label>Re-enter Wachtwoord : </label>
    <input type="password" name="cpass" placeholder="Re-enter wachtwoord" class="form-control" required>
    <?php  echo $msg4 ?>
    </div>
    <div class="form-group">
    <label>Profielfoto : </label>
    <input type="file" name="image" value="<?php echo $image; ?>" required/>
    </div>
    <br/>
    <div class="form-group">
    <input type="checkbox" name="check" required/>
    Ik ga akkoord met de voorwaarden.
    </div>
    <br/>
    <input type="submit" value="Verzenden" name="submit" class="btn btn-success" required/>
    </form>
    </div>
    </div>
  </div>
</div> 

</body>

<style>


#body-bg {
  background: url("https://i.ibb.co/RzFpG1J/Summa-Fashion-37.jpg") center no-repeat fixed;
}

.container-downy {
  padding-top: 5em;
}

.formclass2 {
  text-align: center;
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

  .error {
    color: red;
  }

  .success {
    color: green;
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

      .articleclass h2 {
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

  .articleclass {
    margin-top: 3em;
  }


</style>