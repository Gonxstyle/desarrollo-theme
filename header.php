<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="<?php bloginfo('description') ?>">
        <title><?php bloginfo('name') ?></title>

    <!-- Bootstrap core CSS -->
    <?php wp_head() ?>
    
   
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
    
  </head>

  <body <?php body_class( 'class-name' ); ?>>

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <?php if ( function_exists( 'the_custom_logo' ) ) {
            the_custom_logo();
            }else{ ?>
      <a class="navbar-brand" href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> <?php } ?>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <?php mostrar_menu_principal() ?>
        </ul>
        <form action='<?php bloginfo('url') ?>' method='get' class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="text" placeholder="Buscar" aria-label="Buscar" name='s' value='<?php the_search_query() ?>'>
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                </form>
      </div>
    </nav>

    <main role="main" class="container-fluid">
    <div class="jumbotron jumbotron-fluid">
  
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  
</div>
      
  
    </main>