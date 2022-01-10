{{--
  Template Name: company template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

  @endwhile
@endsection


<title> Summa Fashion - Login </title>

<body id="body-bg">

<br/><br/><br/><br/><br/><br/>

<div class="container">
    <div class="login-form col-md-2 offset-md-3">
        <div class="jumbotron" style="padding-top: 5em; width: 25em;">
            <?php

            echo do_shortcode('[contact-form-7 id="2159" title="Contact form 1"]');

            ?>
        </div>
    </div>
</div>
</body>


<style>
#body-bg {
  background: url("https://i.ibb.co/RzFpG1J/Summa-Fashion-37.jpg") center no-repeat fixed;
}

.wpcf7-response-output {
    border: 2px solid #19d51a !important;
}

.wpcf7-display-none {
    border: 2px solid #19d51a !important;
}

.wpcf7-mail-sent-ng {
    border: 2px solid #19d51a !important;
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