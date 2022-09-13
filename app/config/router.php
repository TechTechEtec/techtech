<?php 

$this->get('/', function() {
    (new \app\controller\RouteController)->index();
});
 
# Demais rotas irão aqui