

<footer class="page-footer">
  <div class="footer-title-container">
    <p class="footer-title"> GENERAL INFORMATION </p>
    <div class="row footer-row">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="footer-col">
          Adres:
          <div class="adresgegevens">
            <div class="name-footer"> 
              <?php $naamstad = get_field('naamstad'); 
              echo $naamstad
              ?>
            </div>
            <div class="adres-footer">
            <?php $adres = get_field('adres'); 
              echo $adres
              ?>
            </div>
            <div class="postcode-footer">
            <?php $postcode = get_field('postcodestad'); 
              echo $postcode
              ?>
            </div>
          </div>
          <div class="adresgegevens">
            <div class="name-footer">
            <?php $naamstad2 = get_field('naamstad2'); 
              echo $naamstad2
              ?> 
            </div>
            <div class="adres-footer">
            <?php $adres2 = get_field('adres2'); 
              echo $adres2
              ?>
            </div>
            <div class="postcode-footer">
            <?php $postcode2 = get_field('postcodestad2'); 
              echo $postcode2
              ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
        <div class="footer-col">
          <div class="bottom-distance"> Informatie: </div>
          <?php

          $footerlink = get_field('footer_link'); ?>
          <a class="footer-link" href="https://www.summacollege.nl/over-deze-website/privacyverklaring">Privacyverklaring</a>
          <br/>
          <a class="footer-link" href="https://www.summacollege.nl/over-deze-website/disclaimer">Disclaimer</a>
          <br/>
        
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="footer-col">
            Keep in touch:
            <div class="social">
		            <ul>
		                <li><a href="<?php the_field('facebook'); ?>" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
		                <li><a href="<?php the_field('instagram'); ?>" target="_blank" title="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
		                <li><a href="<?php the_field('linkedin'); ?>" target="_blank" title="LinkedIn"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
		            </ul>
		        </div>
          </div>
      </div>
    </div>

  </div>
</footer>

<style>

.contact-div {
  background-color: #f1f1f2;
  width: 100%;
  min-width: 100%;
  padding-right: 5em;
  padding-left: 5em;
}

.container-contact p {
  white-space: pre-wrap;
  width: max-content;
}

.contact-row {
  padding-bottom: 2rem;
}

.container-contact {
  margin-left: 3em;
  margin-right: 3em;
  margin-bottom: 2em;
}

.page-footer {
  background-color: rgb(255, 26, 255);
  width: 100%;
  min-width: 100%;
}

.footer-title-container {
  text-align: center;
}

.footer-title {
  font-size: 1.5em;
  padding-top: 0.5em;
  padding-bottom: 1em;
  font-weight: 600;
  letter-spacing: 0.2rem;
  color: white;
}

.contact-title {
  font-size: 2em;
  padding-top: 0.5em;
  padding-bottom: 1em;
  font-weight: 600;
  letter-spacing: 0.2rem;
  color: black;
}

.footer-row {
  text-align: left;
  margin-left: 6em;
  margin-right: 4em;
}

footer .social ul {
  padding-left: 0;
  margin-top: 1em;
}

footer .social ul li {
  border-radius: 2px;
  width: 25px;
  height: 25px;
  margin-right: 1em;
  text-align: center;
  display: inline-block;
}

footer .social ul li a {
  color: white;
  font-size: 23.4px;
}

.adresgegevens {
  margin-top: 1em;
  margin-bottom: 2em;
  color: white;
}

.bottom-distance {
  margin-bottom: 1em;
}

.copyright-footer {
  background-color: white;
  width: 100%;
  height: 8em;
  bottom: 0;
}

.footer-link {
  color: white;
}

.footer-col {
  color: white;
}

.copyright-text {
  font-size: 2em;
  font-weight: 600;
  letter-spacing: 3px;
}

.footer-link:hover {
  color: #231f20;
}

.copyright-container {
  text-align: center;
}

@media (max-width: 767px) {
  .footer-col {
    margin-bottom: 3em;
  }
}

@media (max-width: 379px) {
  .footer-row {
    margin-left: 1em;
    margin-right: 1em;
  }
}

@media (max-width: 550px) {
  .contact-div {
    padding-right: 0;
    padding-left: 0;
  }

  .contact-row {
    margin-right: 0;
    margin-left: 0;
  }
}

@media (max-width: 485px) {
  .container-contact p {
    display: inline;
  }

  .container-contact {
    margin-left: 0;
    margin-right: 0;
  }
}

@media (max-width: 390px) {
  .testimonials_title h1 {
    font-size: 1.8rem;
  }
}


</style>
