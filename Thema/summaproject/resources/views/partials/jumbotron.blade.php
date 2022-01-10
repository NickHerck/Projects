    <?php
    
    $jumbotron_image = get_field('jumbotron');
	$jumbotron_text = get_field('jumbotron_text');

	if ($jumbotron_image != null) { ?>
		<div class="jumbomedia" style="background-image:linear-gradient(rgba(150, 150, 150, 0.4), rgba(150, 150, 150, 0.4)), url('<?php echo $jumbotron_image['url']; ?>');">
    <?php } else {?>
        <div class="jumbomedia">
    <?php } ?>

    <div class="jumbotextbox-limiter">
        <div class="jumbotextbox">
            <h1>
                <?php echo $jumbotron_text ?>
            </h1>
            
        </div>
        <img src="https://i.ibb.co/g6CX7ZB/plakbandjes.png" class="image-tape"/>
    </div>
</div>

<style>

.jumbomedia {
  background-color: grey;
  width: 100%;
  height: 36em;
  background-size: cover;
  margin-bottom: 4em;
}

.image-tape {
    width: 50%;
    height: 24%;
    position: absolute;
    margin-top: 16em;
    margin-left: -2em;
}

.jumbomedia {
    background-image: linear-gradient(rgba(185, 56, 185, 0.9), rgba(150, 150, 150, 0.4)), url(http://localhost/projecten/wp-content/uploads/2019/04/banner-1-def309830d41c0f6af292daff00007c80a3.png) !important;
}

  .jumbomedia .jumbotextbox-limiter {
    width: 1000px;
    max-width: 90%;
    margin: auto;
    height: 100%;
    display: flex;
    position: relative;
  }


  .jumbomedia .jumbotextbox-limiter .jumbotextbox {
      position: relative;
      width: 30em;
      top: 20%;
      display: flex;
  }

      .jumbomedia .jumbotextbox-limiter .jumbotextbox h1 {
        text-transform: uppercase;
        margin-top: 1em;
        font-size: 3.5em;
        color: white;
        text-align: center;
        font-weight: 700;
      }

@media only screen and (max-width: 600px) {
        .jumbomedia .jumbotextbox-limiter .jumbotextbox h1 {
          font-size: 2em;
        }

        .image-tape {
          display: none;
        }
}

@media only screen and (max-width: 583px) {
  .jumbomedia {
    height: 16em;
  }
  .jumbomedia .jumbotextbox-limiter .jumbotextbox h1 {
    font-size: 2.5em;
}
}

</style>