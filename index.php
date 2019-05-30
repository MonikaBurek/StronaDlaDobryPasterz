<?php

	if (isset($_GET['action'])) {
        $action = $_GET['action'];
	} else {
		$action = 'showMain';
	}

   switch ($action) {
        case 'login':
	        include 'phpfiles/login.php';
			break;
		default:
			include 'templates/mainTemplate.php';		
    } 