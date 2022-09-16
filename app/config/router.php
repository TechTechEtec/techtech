<?php 

$this->get('/', 'RouteController@home');

$this->get('/teste', 'RouteController@teste');

$this->get('/modelteste', 'SoloStudentController@fetch');
# Demais rotas irão aqui