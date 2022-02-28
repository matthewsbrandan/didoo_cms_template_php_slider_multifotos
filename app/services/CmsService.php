<?php

class CmsService{
  protected $base_url;
  protected $access_token;

  function __construct(){
    $this->base_url = getenv('CMS_URL');
    $this->access_token = getenv('CMS_ACCESS_TOKEN');
  }

  function get($url) {
    $curl = curl_init();
    curl_setopt_array($curl, [
      CURLOPT_URL => $this->base_url."api/".$url,
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => "",
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 30,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => "GET",
      CURLOPT_POSTFIELDS => "",
      CURLOPT_HTTPHEADER => ["access_token: ".$this->access_token],
    ]);

    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    $response = json_decode($response);
    return [$response, $err];
  }
}