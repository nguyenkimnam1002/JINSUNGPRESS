<?php
session_start();
session_destroy(); // Xóa session
header('Location: login.php');
