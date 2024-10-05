<?php
  $code = $_GET['code'];
  if($code == ""){
    header('localhost://nubeera.com');
    exit;
  }

  $CLIENT_ID = "30076d3f4f3eac96271f";
  $CLIENT_SECRET = "bcb26bd5d5bf0d6e561d3a1604633eed63d1fc52";
  $URL = "https://github.com/login/oauth/access_token";
  $ch = curl_init();

  $postParam = [
    'client_id' => $CLIENT_ID,
    'client_secret' => $CLIENT_SECRET,
    'code' => $code
  ];

  curl_setopt($ch, CURLOPT_URL,$URL);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS,$postParam);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept: application/json'));
  $response = curl_exec($ch);
  curl_close ($ch);
  //var_dump($response);
  $data = json_decode($response);
  if($data->access_token != ""){
    session_start();
    $_SESSION['my_access_token'] = $data->access_token;
	header('Location:gitdetails.php');

  }
  
?>