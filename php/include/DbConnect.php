<?php
/**
 * RetrofitExample
 * https://github.com/quintuslabs/RetrofitExample
 * Created on 10-june-2018.
 * Created by : Santosh Kumar Dash:- http://santoshdash.epizy.com
 */

/**
 * Handling database connection
 *
 * @author Santosh Kumar Dash
 * 
 */
class DbConnect {

    private $conn;

    function __construct() {        
    }

    /**
     * Establishing database connection
     * @return database connection handler
     */
    function connect() {
        include_once dirname(__FILE__) . '/Config.php';

        // Connecting to mysql database
        $this->conn = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

        // Check for database connection error
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }

        // returing connection resource
        return $this->conn;
    }

}

?>
