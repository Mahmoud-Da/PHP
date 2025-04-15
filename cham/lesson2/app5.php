<?php
if (true) {
  echo "this message will display";
}


if (false) {
  echo "this message will not display";
}

$server_status = "ok";
if ($server_status === "ok") {
  echo "Welcome to the website";
}

$server_status = "maintenance";
if ($server_status === "ok") {
  echo "Welcome to the website";
} elseif ($server_status === "maintenance") {
 echo "We are currently fixing some issues";
} 


$server_status = "error";
if ($server_status === "ok") {
  echo "Welcome to the website";
} elseif ($server_status === "maintenance") {
 echo "We are currently fixing some issues";
} else {
  echo "Error please contact us";
}
