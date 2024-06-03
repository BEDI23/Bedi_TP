<?php

class Connexion
{
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "bediTP";
    private $conn;

    public function Connexion()
    {
        try {
            // Create a new mysqli connection
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

            // Check connection
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            } else {
                echo "Connected successfully to the database!";
            }

        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        } finally {
            // Close the connection when done, if it was established
            if ($this->conn && !$this->conn->connect_error) {
                $this->conn->close();
            }
        }
    }
}

