<?php if( have_rows('bullet_points') ): ?>

	<div class="bullet_points d-flex flex-row justify-content-around" id="bullets">

	<?php while( have_rows('bullet_points') ): the_row(); 

		// vars
		$text = get_sub_field('point_text');

        ?>
        
        <div class="bullet_point">
            <p><?php echo $text ?></p>
        </div>


	<?php endwhile; ?>

    </div>

<?php endif; ?>

<style>

.bullet_points {
  margin-bottom: 3em;
  flex-shrink: 0;
  flex-flow: column wrap;
}

  .bullet_points .bullet_point {
    margin: 10px;
    border-radius: 50%;
    background-color: rgb(255, 26, 255);
    width: 8em;
    height: 8em;
    display: flex;
    padding: 1em;
  }

  .bullet_points .bullet_point p {
      margin: auto;
      text-align: center;
      color: white;
      font-weight: 600;
}

@media only screen and (max-width: 1000px) {
    .bullet_points .bullet_point {
      width: 7em;
      height: 7em;
    }

    .bullet_points .bullet_point p {
        font-size: 0.9em;
      }
    }

@media only screen and (max-width: 800px) {
  .bullet_points {
    width: 90%;
    margin: 0 auto 3em;
  }
}

</style>