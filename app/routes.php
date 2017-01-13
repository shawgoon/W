<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/articles/', 'Articles#afficher', 'articles'],
		['GET|POST', '/signup/', 'UsersSignup#afficher', 'users_signup'],
		['GET|POST', '/validSignup/', 'UsersValidSignup#afficher', 'users_validSignup'],
		['GET|POST', '/login/', 'UsersLogin#afficher', 'users_login'],
		['GET|POST', '/account/', 'UsersAccount#afficher', 'users_account'],
		['GET', '/logout/', 'UsersLogout#afficher', 'users_logout'],

	);
