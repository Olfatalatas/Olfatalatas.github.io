<?php
session_start();
//logout
session_destroy();
// arahkan ke halaman login.php 
header("location: login.php");
