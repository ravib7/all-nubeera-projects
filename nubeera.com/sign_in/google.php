<?php require ("../GoogleAPI/vendor/autoload.php");


$g_client = new Google_Client();

$g_client->setClientId("919717845384-ng5g4em1ujdvlcptl41nrgam4maej8n0.apps.googleusercontent.com");
$g_client->setClientSecret("iT4ZqzOni8_JlmEJM-Bvqfpz");
$g_client->setRedirectUri("http://localhost/nubeera.com/User/User.php");
$g_client->setScopes("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$auth_url = $g_client->createAuthUrl();
//echo "<a href='$auth_url'>Login Through Google </a>";

$code = isset($_GET['code']) ? $_GET['code'] : NULL;


if(isset($code)) {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);

    }catch (Exception $e){
        echo $e->getMessage();
    }




    try {
        $pay_load = $g_client->verifyIdToken();


    }catch (Exception $e) {
        echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(isset($pay_load)){

//echo $pay_load['email']."<br>";


 $_SESSION['emailValid'] = $pay_load['email'];


//echo $pay_load['picture'];
//echo $pay_load['given_name'];
//echo $pay_load['name'];

//foreach($pay_load as $value)
//	echo $value."<br>";

}
