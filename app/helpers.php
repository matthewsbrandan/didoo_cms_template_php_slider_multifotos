<?php
  use Jenssegers\Blade\Blade;
  
  $blade = new Blade('views', 'cache');

  function dd(){ // DUMP DIE
    $style = "background: #333; color: #bbd; border-radius: .4rem; padding: .8rem; overflow: auto; margin: 1rem 0;";
    foreach(func_get_args() as $arg){
      echo "<pre style='$style'>";
      var_dump($arg);
      echo "</pre>";
    }
    die;
  }
  function jd(){ // JSON DIE
    $style = "background: #333; color: #bbd; border-radius: .4rem; padding: .8rem; overflow: auto; margin: 1rem 0;";
    echo "<pre style='$style'>";
    echo json_encode(func_get_args());
    echo "</pre>";
    die;
  }
  function asset($path, $referer_cms = false){
    global $cms_url;
    $app_url = getenv('APP_URL');

    if($referer_cms) return $cms_url.$path;
    return $app_url."/"."public/".$path;
  }
  function getContent($content){
    if(preg_match( "/\/[a-z]*>/i",$content) != 0) return $content;
    return nl2br($content);
  }
  function innerStyle($prop, $value = null, $default = null, $valeuFormatted = null){
    if($value) return $valeuFormatted ? "$prop: $valeuFormatted;" : "$prop: $value;";
    else if($default) return "$prop: $default;";
    return "";
  }
  function view($name, $params = []){
    global $blade;
    return $blade->make($name, $params);
  }
  function frac_url($url){
    $frac_url = [...array_filter(explode("/",$url), function($frac){
      return !!$frac;
    })];
    return $frac_url;
  }
  function numberWhatsappFormat($phone){
    $phone = str_replace(' ','',
      str_replace('-','',
        str_replace('(','',
          str_replace(')','',
            str_replace('+','',$phone)
          )
        )
      )
    );
    if(strlen($phone) <= 11) $phone = "55" . $phone;
    return $phone;
  }