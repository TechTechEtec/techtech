<?php 

$this->get('/', 'RouteController@home');

$this->get('/student', 'RouteController@student');

$this->get('/classs','RouteController@class');

$this->get('/teste', 'RouteController@teste');

$this->get('/registerperfil', 'RouteController@chooseRegisterPerfil');

# Demais rotas irão aqui