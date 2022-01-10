<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
    <nav class="navbar navbar-expand-md navbar-light page-header">
        <div class="container epic-container">
            <img src="https://www.summacollege.nl/images/default-source/logo's/logo-summa-fashion.jpg?sfvrsn=2e4f4d85_2" class="navbar-logo-2"/>
            <img src="https://i.ibb.co/4t8wwQb/tmm.png" class="navbar-logo"/>
        </div>
        <div class="navbar-flex justify-content-end">
        <nav class="navbar-main navbar navbar-expand-lg navbar-light" role="navigation" id="appendme">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar-collapse" aria-controls="main-navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars menu-2"></span>
            </button>
            
        <div class="navbar-collapse" id="navmover">
                <ul class="navbar-nav mr-inherit">
                <?php if(has_nav_menu('primary_navigation')): ?>
                <?php echo wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'depth' => 2,
                        'container' => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'main-navbar-collapse',
                        'menu_class' => 'navbar-nav mr-auto',
                        'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                        'walker' => new WP_Bootstrap_Navwalker()
                    ]); ?>

                <?php endif; ?>
                </ul>
        </div></nav>
    </div>
    </nav>

    <style>

.page-header {
  background-color: white;
  width: 100%;
  height: 6em;
  position: fixed;
  top: 0;
  letter-spacing: 0.5px;
  z-index: 300;
}

.mr-inherit {
  margin-right: inherit;
}

.navbar-logo {
  width: 13em;
  height: 4.5em;
  margin-left: 2em;
}

.navbar-logo-2 {
  width: 8em;
  height: 3em;
}

.nav-item a {
  font-size: 16px;
  font-weight: 500;
}

@media (max-width: 420px) {
.navbar-logo {
    margin-left: 2em;
    width: 4em;
    height: 1.7em;
}

  .page-header {
    height: unset;
  }
}

@media (max-width: 767px) {
  .navbar-collapse {
    padding-left: 10px;
    left: 0;
    margin-top: 0.98em;
    margin-right: 10em;
    width: 100%;
    background-color: white;
    position: absolute;
    margin-left: 0 !important;
  }
}

@media (min-width: 767px) {
  .navbar-expand-lg {

  }
}

.ml-auto {
  margin-left: 0 !important;
}

.navbar-collapse {
  margin-left: 15px;
}

.fa .fas {
  font-weight: 900;
  font-family: 'Font Awesome\ 5 Free', sans-serif;
}

.fa-bars::before {
  content: "\F0C9";
}

@media (min-width: 320px) {
  .epic-container {
    margin: 0;
    width: 42%;
  }
}

@media (max-width: 810px) {
  .nav-link {
    font-size: 14px !important;
  }
}

.nav-link {
  color: #231f20 !important;
}

.navbar-nav {
  -ms-flex-direction: column;
  -webkit-box-direction: normal;
  -webkit-box-orient: vertical;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  flex-direction: column;
  list-style: none;
  margin-bottom: 0;
  padding-left: 0;
}

@media (min-width: 1000px) {
  .nav-item {
    margin-left: 1em;
    margin-right: 1em;
  }

  .navbar-collapse {
    margin-left: 0;
    margin-right: 15px;
  }
}

@media (min-width: 1200px) {
  .nav-item {
    margin-left: 0.5rem;
    margin-right: 0.5rem;
  }

  .epic-container {
    margin-left: 3em;
  }

  .navbar-logo {
    margin-left: auto;
    margin-right: 5em;
  }

  .navbar-logo-2 {
    margin-left: auto;
    margin-right: 5em;
  }

  .navbar-collapse {
    margin-right: 3em;
  }
}

    </style>
