<?php

namespace app\classes;

# Quando for chamar precisa estar na seguinte estrutura: Input::get(<param>) ou Input::post(<param>)
# No lugar de <param>, por o parâmetro que você quer buscar na URL

class Input {

    /**
     * 
     * Retorna um valor via parâmetro GET
     * 
     * @param string $param
     * @param int $filter
     * @return mixed
     */
    public static function get(string $param, int $filter = FILTER_SANITIZE_STRING) {
        return filter_input(INPUT_GET, $param, $filter); # Jeito de fazer $_GET ou $_POST porém passando um filtro para o retorno.
    }

     /**
     * Retorna um valor via parâmetro POST
     * 
     * @param string $param
     * @param int $filter
     * @return mixed
     */
    public static function post(string $param, int $filter = FILTER_SANITIZE_STRING) {
        return filter_input(INPUT_POST, $param, $filter); # Jeito de fazer $_GET ou $_POST porém passando um filtro para o retorno.
    }
}