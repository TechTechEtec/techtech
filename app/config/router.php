<?php 

$this->get('/', 'RouteController@home');

$this->get('/teste', 'RouteController@teste');

$this->get('/getstudent', 'SoloStudentController@fetch');

$this->get('/registudent', 'SoloStudentController@insert');
# Demais rotas irão aqui