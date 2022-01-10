<?php if( have_rows('blocks') ): ?>

	<div class="blocks d-flex justify-content-around" id="blocks">

	<?php while( have_rows('blocks') ): the_row(); 

		// vars
		$image = get_sub_field('blocks_image');
		$title = get_sub_field('blocks_title');
		$paragraph = get_sub_field('blocks_paragraph');

		?>
        <div class="singleblock">
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
            <div class="thinline"></div>
            <h1><?php echo $title ?></h1>
            <p><?php echo $paragraph ?></p>
        </div>


	<?php endwhile; ?>

    </div>

<?php endif; ?>

<style>

.blocks {
  margin-bottom: 3em;
}

  .blocks .singleblock {
    max-width: 30%;
    width: 30em;
  }

    .blocks .singleblock img {
      object-fit: cover;
      width: 100%;
      height: 16em;
    }

    .blocks .singleblock .thinline {
      background-color: rgb(255, 26, 255);
      width: 100%;
      height: 0.4em;
      margin-bottom: 1.2em;
    }

    .blocks .singleblock h1 {
      text-transform: uppercase;
      font-size: 1.5em;
      font-weight: 600;
      text-align: left;
    }

    .blocks .singleblock p {
      font-weight: 300;
    }

@media only screen and (max-width: 800px) {
  .blocks {
    flex-direction: column;
  }

    .blocks .singleblock {
      margin: 0 auto 4em auto;
      max-width: 90%;
      width: 90%;
    }

      .blocks .singleblock img {
        height: 20em;
      }
  }

@media only screen and (max-width: 1000px) {
  .blocks .singleblock h1 {
        font-size: 1.8em;
      }
}

@media only screen and (max-width: 900px) {

  .blocks .singleblock h1 {
        font-size: 1.7em;
      }
}

</style>