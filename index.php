<?php
  use Jenssegers\Blade\Blade;

  include_once __DIR__."/vendor/autoload.php";
  
  $dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
  $dotenv->load();
  
  $app_url = getenv('APP_URL');
  $app_path = getenv('APP_PATH');
  $cms_url = getenv('CMS_URL');
  $cms_page_slug = getenv('CMS_PAGE_SLUG');

  include_once __DIR__."/app/helpers.php";
  include_once __DIR__."/app/services/CmsService.php";

  $uri = str_replace($app_path, '', $_SERVER['REQUEST_URI']);
  $cms = new CmsService();

  include(__DIR__."/routes.php");
  
  function render($url){
    global $blade;
    global $cms;
    global $cms_page_slug;

    $frac_url = [...array_filter(explode("/",$url), function($frac){
      return !!$frac;
    })];

    if(count($frac_url) == 0){
      include_once __DIR__."/app/controllers/HomeController.php";
      $controller = new HomeController($cms, $cms_page_slug);

      return $controller->index();
    }
    else{
      if($frac_url[0] == 'blog'){
        include_once __DIR__."/app/controllers/PostController.php";
        $controller = new PostController($cms, $cms_page_slug);

        if(count($frac_url) == 1) return $controller->index();
        else if(count($frac_url) == 2) return $controller->show($frac_url[1]);
      }
    }

    return $blade->make('error-404');
  }

  echo render($uri);