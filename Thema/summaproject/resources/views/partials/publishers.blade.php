<?php
    $publishers_image = get_field('publishers_image');
    $publishers = get_field('publishers_texts');
?>

<div class="publishers_section d-flex" id="publishers">
    <div class="publishers_left">
        <div class="publishers_left_restrain">
            <h1><?php echo $publishers['title'] ?></h1>
            <h3><?php echo $publishers['paragraph_one'] ?></h3>
            <p><?php echo $publishers['paragraph_two'] ?></p>
            <form method="get" action="<?php echo $publishers['button_link'] ?>" style="justify-content: center; display: flex;">
                <button class="signup"><?php echo $publishers['button_text'] ?></button>
            </form>
        </div>
    </div>
    <div class="publishers_right" style="background-image: url('<?php echo $publishers_image['url']; ?>');">
    </div>
</div>

<style>

.publishers_section .publishers_right {
    width: 47%;
    background-size: cover;
  }

  .publishers_section .publishers_left {
    height: 100%;
    width: 53%;
    display: flex;
    padding: 2em 0 2em 0;
  }

  .publishers_section .publishers_left .publishers_left_restrain {
      display: flex;
      flex-direction: column;
      width: 85%;
      margin: auto;
  }

  .publishers_section .publishers_left .publishers_left_restrain h1 {
        font-size: 2em;
        text-align: left;
        font-weight: 800;
        text-transform: uppercase;
        margin-bottom: 1em;
        color: black;
      }

      .publishers_section .publishers_left .publishers_left_restrain h3 {
        font-size: 1.3em;
        font-weight: 300;
        margin-bottom: 1.5em;
        color: black;
      }

      .publishers_section .publishers_left .publishers_left_restrain p {
        font-size: 1em;
        font-weight: 300;
        margin-bottom: 1em;
        color: black;
      }

      .publishers_section .publishers_left .publishers_left_restrain .signup {
        border-radius: 50%;
        height: 6em;
        width: 6em;
        margin: 0 auto;
        border: none;
        outline: 0 !important;
        color: white;
        background-color:rgb(255, 26, 255);
        margin-top: 2em;
      }

      .publishers_section .publishers_left .publishers_left_restrain .signup:hover {
        cursor: pointer;
      }

@media only screen and (max-width: 800px) {
  .publishers_section {
    flex-direction: column;
  }

    .publishers_section .publishers_left {
      margin: auto;
      width: 90%;
    }

    .publishers_section .publishers_right {
      margin: auto;
      height: 15em;
      width: 90%;
    }
  }

</style>