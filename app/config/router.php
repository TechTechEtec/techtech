<?php 

$this->get('/', 'RouteController@home');

$this->get('/student', 'RouteController@student');

$this->get('/teste', 'RouteController@teste');

# Demais rotas irão aqui