<?php 

namespace app\model;

use app\Core\Model;
use Exception;

class SessionModel extends Model {

    private $db;

    public function __construct(){

        $connection = $this->connect();

        $this->db = $connection->initializeQueryBuilder();
    }

    public function signIn() {
        try{
            // Aqui você precisa implementar a comunicação com o banco através da variável $db
            // $db é a variável que contem todos os métodos para manipular o banco. Diferente das outras Models
            // Essa não implementa o initializeDatabase() mas sim o initializeQueryBuilder.
            // Siga o link para saber como funciona o queryBuilder: https://github.com/rafaelwendel/phpsupabase#querybuilder-class 

            // Lembre que é necessário para fazer signIn, verificar se o e-mail e a senha recebida pela controladora, existe
            // na tabela de school, ou teacher, ou student. Logo você terá que fazer 3 requisições diferentes para verificar em cada
            // tabela qual que tem as credenciais. Caso o email e senha seja de um estudante por exemplo, você deve armazenar o e-mail e senha no LocalStorage ou Cookies usando o PHP. Junto a isso tem que salvar a informação do tipo de perfil. Por exemplo, se deu sucesso de signIn na tabela de estudante, então você cria um campo 'perfil'='student' para ser armazenado junto com as demais informações retornadas no banco.

            // Para que esse Sign Ocorra, basta fazer um filtro no tabela, criando uma lógica para que seja cumprido com o seguinte
            // instrução: Me retorne o registro o qual contenha o email e senha iguais a esses aqui blaablabla., tendeu?
            // Um exemplo disso está na documentação do Supabase PHP, então leia ela que tu vai achar:  https://github.com/rafaelwendel/phpsupabase#querybuilder-class 
            
            // Seria um Where Like por exemplo, tipo SQL mesmo.

            // Após guardar nos cookies ou no localStorage, você retorna os dados para a controller e a controller redireiciona o usuário para a tela de dashboard
        }
        catch(Exception $e){

            // Aqui será mostrado os erros caso algum ocorra. o comando "echo" printa o resultado na tela do navegador
            echo $e->getMessage();
        }
    }

    public function logOut() {
        try{
            // Sua única função aqui é destruir o LocalStorage ou Cookies que estão garantindo a sessão do usuário
            // Após destruir os dados do LocalStorage ou Cookies, a controller irá redirecionar o usuário pra tela de signIn
        }
        catch(Exception $e){

            // Aqui será mostrado os erros caso algum ocorra. o comando "echo" printa o resultado na tela do navegador
            echo $e->getMessage();
        }
    }
}