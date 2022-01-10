{{--
  Template Name: profile template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

  @endwhile
@endsection

<?php

$con = mysqli_connect('localhost','root','','project');

session_start();

$email=$_SESSION['mail'];
$result = mysqli_query($con,"SELECT first_name,last_name,img,mail,dob FROM users WHERE mail='$email'");
$retrive=mysqli_fetch_array($result);

$firstname=$retrive['first_name'];
$mail=$retrive['mail'];
$dob=$retrive['dob'];
$lastname=$retrive['last_name'];
$image=$retrive['img'];
?>

<title> Summa Fashion - Profiel </title>
<body id="body-bg">
<div class="container" style="border: 3px solid gray; margin-top: 10em;height: 800px; background-color: white;">
<h2 style="text-align: center;"> Welkom <?php echo ucfirst($firstname)." ".ucfirst($lastname) ?> </h2>
  <br/>
  <div style="text-align: center;">
  <img class="img-fluid img-thumbnail" src="https://yt3.ggpht.com/a/AGF-l7-b9ul2WBePE-Z7icp9CL4dhJKxV_iJ9oq0Kw=s240-mo-c-c0xffffffff-rj-k-no" style="width:350px;"/>
  <br/>
  <br/>
    <h5>
      Email adres : <?php echo ucfirst($mail) ?>
    </h5>
    <br/>
    <h5>
      Geboortedatum : <?php echo ucfirst($dob) ?>
    </h5>
  <br/>
  <br/>
  <button class="btn btn-outline-success"> <a href="http://localhost/projecten/werk"> Jobs </a></button> 
  <br/>
  <br/>
  <button class="btn btn-outline-success"> <a href="http://localhost/projecten/home"> Uitloggen </a></button> 
  </div>
</div>
<br/>
<br/>
</body>

<style>


#body-bg {
  background: url("https://i.ibb.co/RzFpG1J/Summa-Fashion-37.jpg") center no-repeat fixed;
}

</style>