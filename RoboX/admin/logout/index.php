<?php
session_start();
session_destroy();
header('Location: /RoboX/admin');
?>