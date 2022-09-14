<?php 

$this->get('/', 'RouteController@home');

$this->get('/teste', 'RouteController@teste');

$this->get('/registerperfil', 'RouteController@chooseRegisterPerfil');

# Demais rotas irão aqui