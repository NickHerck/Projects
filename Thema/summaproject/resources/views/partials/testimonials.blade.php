<div class="testimonials_block d-flex flex-column" id="testimonials">
    <div class="testimonials_title">
        <h1><?php the_field("testimonials_title") ?></h1>
    </div>

    <?php if( have_rows('testimonials') ): ?>

	<div class="testimonials">

    <?php

    $i = 1;

    while( have_rows('testimonials') ): the_row(); 

		// vars
		$image = get_sub_field('image');
		$paragraph = get_sub_field('paragraph');
		$name = get_sub_field('name');
        $position = get_sub_field('position');

		?>
        <?php if ($i % 2 == 0) { ?>
            <div class="testimonial_single d-flex text-right justify-content-end" id="test-right">
                <div class="testimonial_text d-flex flex-column justify-content-center">
                    <div class="paragraph_container">
                        <p><?php echo $paragraph ?></p>
                    </div>
                    <div class="person_container">
                        <h2><?php echo $name ?>, <?php echo $position ?></h2>
                    </div>
                </div>
                <div class="testimonial_image">
                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                </div>
            </div>
        <?php } else { ?>
        <div class="testimonial_single d-flex justify-content-start">
            <div class="testimonial_image">
		        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            </div>
            <div class="testimonial_text d-flex flex-column justify-content-center">
                <div class="paragraph_container">
                    <p><?php echo $paragraph ?></p>
                </div>
                <div class="person_container">
                    <h2><?php echo $name ?>, <?php echo $position ?></h2>
                </div>
            </div>
        </div>
        <?php $i++ ?>

        <?php } ?>

	<?php endwhile; ?>

	</div>

<?php endif; ?>
</div>

<style>

.testimonials_block {
  background-color: white;
  padding: 2em;
}

  .testimonials_block .testimonials_title {
    margin: auto;
    text-align: center;
    text-transform: uppercase;
    margin-top: 1em;
  }

    .testimonials_block .testimonials_title h1 {
      font-weight: 600;
    }

    .testimonials_block .testimonials {
    width: 100%;
    max-width: 1200px;
    margin: auto;
    }

    .testimonials_block .testimonials .testimonial_single {
      margin: 2em auto 3em auto;
    }

    .testimonials_block .testimonials .testimonial_single .testimonial_image img {
          border-radius: 50%;
          border: 7px solid rgb(255, 26, 255);
          margin: 2em;
          width: 10em;
          height: 10em;
          object-fit: cover;
        }

        .testimonials_block .testimonials .testimonial_single .testimonial_text p {
          font-style: italic;
          font-weight: 300;
          font-size: 1.2em;
        }

        .testimonials_block .testimonials .testimonial_single .testimonial_text h2 {
          font-weight: 400;
          font-style: italic;
          font-size: 1.4em;
        }

@media only screen and (max-width: 800px) {
  .testimonials_block .testimonials .testimonial_single {
        flex-direction: column;
        margin: 0 auto 4em auto;
  }

  .testimonials_block .testimonials .testimonial_single .testimonial_image img {
            margin: 2em auto;
            display: flex;
          }

          .testimonials_block .testimonials .testimonial_single .testimonial_text {
          text-align: left;
        }
}

</style>