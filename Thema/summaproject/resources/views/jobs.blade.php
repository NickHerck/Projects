{{--
  Template Name: jobs template
--}}

@extends('layouts.app')
@section('content')
  @while(have_posts()) @php the_post() @endphp
    @include('partials.page-header')

  @endwhile
@endsection

<br/>
<br/>
<br/>
<br/>

<div style="text-align: center;">
    	<h1 class="jobstitle"> Werk </h1>
</div>
<br/>
<br/>


<?php
    $advertisers_image = get_field('advertisers_image');
    $advertisers = get_field('advertisers_texts');
?>


<?php
if ( have_rows('werk_sections') ):
  while ( have_rows('werk_sections') ): the_row(); 
  
  $image = get_sub_field('section_image');
  $image1 = get_sub_field('image_1');
  $image2 = get_sub_field('image_2');
  ?>

<div class="advertiser_section d-flex" id="advertisers">
    <div class="advertiser_right">
    <img src="<?php echo $image ?>" style="height: 10em; width: 11em; margin-left: 3em;"/>
        <div class="advertiser_right_restrain">
        <h1> <?php the_sub_field('section_titel'); ?> </h1>
            <h3> <?php the_sub_field('section_desc'); ?> </h3>
            <button id="myBtn">Lees Meer</button>
            <br/>
            <br/>


            <div id="myModal" class="modal">

              <!-- Modal content -->
              <div class="modal-content">
                <span class="close">&times;</span>
                <p><?php the_sub_field('grote_tekst'); ?></p>
                <div class="row">

                <img src="<?php echo $image1 ?>" style="height: 20%; width: 20%; margin-right: 1em; margin-left: 1em;"/>



                <img src="<?php echo $image2 ?>" style="height: 20%; width: 20%;"/>

                </div>
              </div>

            </div>


            <div class="btn-wrapper">

              
            <?php echo do_shortcode( '[contact-form-7 id="2165" title="Buttons Werk"]' ); ?>
              
              </form>
              

            </div>
        </div>
    </div>
</div>
<br/>
<br/>

<?php endwhile; ?>
<?php endif; ?>

<style>

.wpcf7-validation-errors {
  display: none !important;
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
  .advertiser_section .advertiser_left {
    //height: 100%;
    width: 47%;
    background-size: cover;
  }

  .advertiser_section .advertiser_right {
    background-color: white;
    border: 3px solid black;
    height: 100%;
    width: 50%;
    margin-left: 30em;
    display: flex;
    padding: 2em 0 2em 0;
  }

  .advertiser_section  .advertiser_right .advertiser_right_restrain {
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: auto;
  }

      .advertiser_section  .advertiser_right .advertiser_right_restrain h1 {
        font-size: 2em;
        font-weight: 800;
        text-align: left;
        text-transform: uppercase;
        margin-bottom: 1em;
        color: black;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain h3 {
        font-size: 1.3em;
        font-weight: 300;
        margin-bottom: 1.5em;
        color: black;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain p {
        font-size: 1em;
        font-weight: 300;
        margin-bottom: 1em;
        color: black;
        line-height: 22px;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain .signup {
        border-radius: 50%;
        height: 6em;
        width: 6em;
        margin: 0 auto;
        border: none;
        outline: 0 !important;
        color: blue;
        background-color: white;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain .signup:hover {
        cursor: pointer;
      }

@media only screen and (max-width: 800px) {
  .advertiser_section {
    flex-direction: column;
  }

    .advertiser_section .advertiser_left {
      margin: auto;
      height: 15em;
      width: 90%;
    }

    .advertiser_section .advertiser_right {
      margin: auto;
      width: 90%;
    }
  }

  .jobstitle {
    font-size: 4em;
  }

  .btn-wrapper {
    position: relative;
    overflow: hidden;
    display: inline-block;
  }

  .btn-wrapper input[type=file] {
    position: absolute;
    left: 0;
    top: 0;
    opacity: 0;
  }

  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 85% !important;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

</style>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>