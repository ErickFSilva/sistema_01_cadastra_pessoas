<?php // db_cadastra_pessoas

    class ConexaoDb {

        // Atributos de conexão
        private $host = 'localhost';
        private $dbname = 'db_cadastra_pessoas';
        private $user = 'root';
        private $pass = '';

        // Métodos para estabelecer a conexao com o DB
        public function conectar() {

            try {

                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;

            }
            catch(PDOException $e) {

                echo "<p>$e->getMessage()</p>";

            }

        }

    }

?>