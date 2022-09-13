<?php 

$this->get('/', function() {
    (new \app\controller\TesteController)->index();
});
 
# Demais rotas irão aqui