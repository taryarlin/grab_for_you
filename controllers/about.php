<?php

$page_name = "About Us";

require('views/about.view.php');

session_destroy();

dd($_SESSION);
