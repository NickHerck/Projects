<?php
    $video_title = get_field('logos_title');
?>

<div class="workwith" id="work">
    <div class="work_text">
        <h1><?php echo $video_title ?></h1>
    </div>
    <?php if( have_rows('logos') ): ?>

	<div class="work_logos d-flex flex-wrap">

	<?php while( have_rows('logos') ): the_row(); 

		// vars
		$image = get_sub_field('image');

		?>
        <div class="work_logo">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
        </div>

	<?php endwhile; ?>

	</div>

<?php endif; ?>
</div>

<style>

.workwith {
  width: 100%;
  padding: 2em;
}

  .workwith .work_text {
    justify-content: center;
    display: flex;
    margin: 1em 0 2em 0;
    color: black;
    text-transform: uppercase;
    text-align: center;
  }

    .workwith .work_text h1 {
      font-weight: 600;
    }

    .workwith .work_logos {
    width: 100%;
    max-width: 1400px;
    margin: auto;
    justify-content: center;
    }

    .workwith .work_logos .work_logo {
      justify-content: center;
      display: flex;
      flex-direction: column;
      width: 13em;
      color: black;
      margin: 1em 0;
    }

      .workwith .work_logos .work_logo img {
        width: auto;
        max-width: 100%;
        margin: 1em auto;
      }

</style>