<?php

class Sql extends PDO
{
    private $conn;

    /**
     * Método contrutor: toda a vez que a classe é instanciada(chamada),
     * o método contrutor é executado, neste caso esta classe se conecta
     * automaticamente ao banco de dados.
     */
    public function __construct()
    {
        $this->conn = new PDO("mysql:host=localhost;dbname=db_php7", "root", "root");
    }

    /**
     * método para setar os dados
     */
    private function setParams($statement, $parameters = array())
    {
        foreach ($parameters as $key => $value)
        {
            $this->setParam($statement, $key, $value);
        }
    }

    /**
     * método que seta, parametros individuais
     */
    private function setParam($statement, $key, $value)
    {
         $statement->bindParam($key, $value);
    }

    /**
     * função que chama outros métodos, que preparam uma query e
     * a executa
     */
    public function query($rawQuery, $params = array())
    {
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);
        
        $stmt->execute();

        return $stmt;
    }

    /**
     * método que faz um select trazendo dados do baco de dados
     * e coloca os dados em um array.
     */
    public function select($rawQuery, $params = array()):array
    {
          $stmt = $this->query($rawQuery, $params);

          return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>