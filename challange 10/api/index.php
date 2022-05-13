<?php
$servername = "localhost:3306";
$username = "joeypfoster";
$password = "8tY2brQE5C7JN9J";
$dbname = "joeypfoster_";

$URL_token = $_GET['token'];

$URL_name = $_GET['name'];
$URL_mail = strtolower($_GET['mail']);
$URL_pass = $_GET['password'];
$URL_pin = $_GET['pin'];
$URL_Userid = $_GET['ID'];

$URL_app = strtolower($_GET['appName']);
$URL_app_mail = strtolower($_GET['appMail']);
$URL_app_pass = $_GET['appPassword'];
$URL_app_Delete = $_GET['appDelete'];


$mail = md5($URL_mail);
$pass = md5($URL_pass);

header('Content-type: application/json');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$query = $conn->query("SELECT TOKEN FROM Sessions");
$array;
$array["tets"] = $query->fetch_all(MYSQLI_ASSOC);

function generateRandomString($length = 35) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
            if ($array == $randomString){
              $randomString = '';
              $i = 0;
            }
      }
      return $randomString;
}


if (isset($URL_token) && isset($URL_pin)){
  $query = $conn->query("SELECT PIN FROM Sessions WHERE TOKEN = '{$URL_token}'");
  $pin = $query->fetch_assoc();
  $countdig = strlen($URL_pin);

  if($pin["PIN"] === NULL && $countdig == 4){
    $query = $conn->query("UPDATE Sessions SET PIN = $URL_pin WHERE TOKEN = '{$URL_token}'");
  } else if($countdig > 4) {
    echo json_encode(["error" => "pin code is to big"]);
  } else if ($pin["PIN"] == $URL_pin) {
    echo json_encode(["pin" => "TRUE"]);
  }

}else if (isset($URL_token)){
  $query = $conn->query("SELECT * FROM Sessions s LEFT JOIN Users u ON s.USERID = u.ID WHERE s.TOKEN = '{$URL_token}'");
  if (mysqli_num_rows($query) < 0){
    echo json_encode(["error" => "session is not valid"]);
  }else {

    $user = $query->fetch_assoc();
    $expireDatetime = new DateTime($user['EXPIRES']);

    $payload = [
      'user' => $user
    ];

    if($expireDatetime > new DateTime()) {

      $query = $conn->query("SELECT * FROM USERDATA WHERE USERID = {$user['ID']}");
      $payload['data'] = $query->fetch_all(MYSQLI_ASSOC);

      echo json_encode($payload);

    } else {
      echo json_encode(['error' => 'The token has expired']);
    }
  }
}else if (isset($URL_mail) && isset($URL_pass) && !isset($URL_name)) {

  $query = $conn->query("SELECT * FROM Users u WHERE u.MAIL = '{$mail}'");
  $user = $query->fetch_assoc();
  $userid = $user['ID'];
  if ($user['PASSWORD'] == $pass){
    $token = generateRandomString();
    $currentdate = new DateTime();
    $expires = new DateTime();
    $expires->add(new DateInterval('P1Y0M0DT10H0M0S'));
    $ex = $expires->format('Y-m-d H:i:s');
    $cu = $currentdate->format('Y-m-d H:i:s');
    $query = $conn->query("INSERT INTO Sessions (ID, TOKEN, PIN, USERID, EXPIRES, CREATED) VALUES (null, '$token', null, '$userid', '$ex', '$cu')");
    echo json_encode(["token" => $token]);

  }else {
    echo json_encode(["error" => "your password or email is wrong"]);
  }
}else if(isset($URL_name) && isset($URL_mail) && isset($URL_pass)) {
  
  $query = $conn->query("SELECT * FROM Users WHERE MAIL = '{$mail}'");
  if (mysqli_num_rows($query) > 0){
    echo json_encode(["error" => "this mail is already in use!"]);
  }else {
    
    $query = $conn->query("INSERT INTO Users (ID, NAME, MAIL, PASSWORD) VALUES (null, '$URL_name', '$mail', '$pass')");
    $query = $conn->query("SELECT * FROM Users u WHERE u.MAIL = '{$mail}'");
    $user = $query->fetch_assoc();
    $userid = $user['ID'];
    $token = generateRandomString();
    $currentdate = new DateTime();
    $expires = new DateTime();
    $expires->add(new DateInterval('P1Y0M0DT10H0M0S'));
    $ex = $expires->format('Y-m-d H:i:s');
    $cu = $currentdate->format('Y-m-d H:i:s');
    $query = $conn->query("INSERT INTO Sessions (ID, TOKEN, PIN, USERID, EXPIRES, CREATED) VALUES (null, '$token', null, '$userid', '$ex', '$cu')");
    echo json_encode(["token" => $token]);
  }

}

if (isset($URL_app) && isset($URL_app_mail) && isset($URL_app_pass) && isset($URL_Userid) && !isset($URL_app_Delete)) {
  $query = $conn->query("SELECT * FROM USERDATA u WHERE u.APP = '{$URL_app}' && u.USERID = $URL_Userid");
  if (mysqli_num_rows($query) > 0){
    echo json_encode(["error" => "You already have an app named like ".$URL_app]);
  }else {
    $query = $conn->query("INSERT INTO USERDATA (ID, APP, APPMAIL, APPPASSWORD, USERID) VALUES (null, '$URL_app', '$URL_app_mail', '$URL_app_pass', '$URL_Userid')");
    $Query = $conn->query("SELECT * FROM USERDATA WHERE USERID = $URL_Userid");
    $data = $Query->fetch_all(MYSQLI_ASSOC);
    echo json_encode(["data" => $data]);
  }
} else if(isset($URL_app_Delete) && isset($URL_app) && isset($URL_Userid)){
  if($URL_app_Delete == "True") { 
    $query = $conn->query("DELETE FROM USERDATA WHERE USERID=$URL_Userid && APP='{$URL_app}'");
    $Query = $conn->query("SELECT * FROM USERDATA WHERE USERID = $URL_Userid");
    $data = $Query->fetch_all(MYSQLI_ASSOC);
    echo json_encode(["data" => $data]);
  } else {
    echo json_encode(["error" => "app data can't be deleted try again or reach out to "]);
  }
}


$conn->close();
?> 