<?php
    $advertisers_image = get_field('advertisers_image');
    $advertisers = get_field('advertisers_texts');
?>

<div class="advertiser_section d-flex" id="advertisers">
    <div class="advertiser_right">
        <div class="advertiser_right_restrain">
            <h1><?php echo $advertisers['title'] ?></h1>
            <h3><?php echo $advertisers['paragraph_one'] ?></h3>
            <p><?php echo $advertisers['paragraph_two'] ?></p>
            <form method="get" action="<?php echo $advertisers['button_link'] ?>" style="justify-content: center; display: flex;">
                <button class="signup"><?php echo $advertisers['button_text'] ?></button>
            </form>
        </div>
    </div>
</div>

<style>
  .advertiser_section .advertiser_left {
    //height: 100%;
    width: 47%;
    background-size: cover;
  }

  .advertiser_section .advertiser_right {
    background-color: rgb(255, 26, 255);
    height: 100%;
    width: 100%;
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
        color: white;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain h3 {
        font-size: 1.3em;
        font-weight: 300;
        margin-bottom: 1.5em;
        color: white;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain p {
        font-size: 1em;
        font-weight: 300;
        margin-bottom: 1em;
        color: white;
        line-height: 22px;
      }

      .advertiser_section  .advertiser_right .advertiser_right_restrain .signup {
        border-radius: 50%;
        height: 6em;
        width: 6em;
        margin: 0 auto;
        border: none;
        outline: 0 !important;
        color: rgb(255, 26, 255);
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

  .epic-register {
    color: white;
    text-decoration: underline;
  }

</style>