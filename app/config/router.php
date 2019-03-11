<?php

$router = $di->getRouter();
$router->add('/','guide::index');



/*login*/

// auth
$router->add('/masuk','auth::login');
$router->add('/keluar','auth::logout');
$router->addPost('/auth/loginproses','auth::loginproses');

//
//$router->add('/pendaftar/buat','pendaftaran::create');






$router->handle();



