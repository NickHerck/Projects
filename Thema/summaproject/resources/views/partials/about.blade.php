<?php
    $about_image = get_field('about_image');
    $about = get_field('about_fields');

?>

<div class="about_section d-flex" id="about">
    <div class="about_left" style="background-image: url('<?php echo $about_image['url']; ?>');">
    </div>
    <div class="about_right">
        <div class="about_right_restrain">
            <h1><?php echo $about['title'] ?></h1>
            <h3><?php echo $about['paragraph_one'] ?></h3>
            <p><?php echo $about['paragraph_two'] ?></p>
        </div>
    </div>
</div>

<style>
.about_section {
  min-height: 30em;
}
.about_section .about_left {
    width: 47%;
    background-size: cover;
  }

  .about_section .about_right {
    background-color: rgb(238, 238, 238);
    width: 53%;
    display: flex;
    padding: 2em 0 2em 0;

  }

  .about_section .about_right .about_right_restrain {
      display: flex;
      flex-direction: column;
      width: 50%;
      margin: auto;
  }

  .about_section .about_right .about_right_restrain h1 {
        font-size: 2em;
        text-align: left;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 1em;
      }

      .about_section .about_right .about_right_restrain h3 {
        font-size: 1.3em;
        font-weight: 300;
        margin-bottom: 1em;
      }

      .about_section .about_right .about_right_restrain p {
        font-size: 1em;
        font-weight: 300;
        margin-bottom: 1em;
      }

@media only screen and (max-width: 800px) {
  .about_section {
    flex-direction: column;
  }
  .about_section .about_left {
      margin: auto;
      height: 15em;
      width: 90%;
    }

    .about_section .about_right {
      margin: auto;
      width: 90%;
    }
}

</style>