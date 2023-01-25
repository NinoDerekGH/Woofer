<?php

setcookie('user_id', "", time() - 3600, "/");
setcookie('user', "", time() - 3600, "/");
header("location: ../index.php");