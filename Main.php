<?php

class TestConnexion
{
    public function run()
    {
        // Create an instance of the Connexion class and call the testConnection method
        $connexion = new Connexion();
        $connexion->testConnection();
    }
}

// Create an instance of the Test class and call the run method to test the connection
$test = new TestConnexion();
$test->run();