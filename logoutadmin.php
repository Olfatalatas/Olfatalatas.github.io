<?php
    session_start();
    //logout
    session_destroy();
    // arahkan ke halaman loginadmin.php 
    header("location: loginadmin.php");
