<?php
  function error($msg){
    $response = [];
    $response['success'] = false;
    $response['message'] = $msg;

    return json_encode($response);
  }
  session_start();
  $accessToken = $_SESSION['my_access_token'];

  if($accessToken == ""){
    die('Error: Invalid Access Token');
  }
  $URL = "https://api.github.com/user";
  $authHeader = "Authorization: token " . $accessToken;
  $userAgentHeader = "User-Agent: NubeEra";
  echo $authHeader. "<br />";

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL,$URL);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER,array('Accept: application/json',$authHeader,$userAgentHeader));
  $response = curl_exec($ch);
  curl_close ($ch);
  //var_dump($response);
  $data = json_decode($response);
  
  echo json_encode($data->login);
  $_SESSION['emailValid'] = 'email';
  header('Location:../User/User.php');
?>
