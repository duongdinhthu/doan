<?php
session_start();
session_unset();
session_destroy();
header("Location:http://localhost:63342/Doan/frontend/home.html");
exit();


