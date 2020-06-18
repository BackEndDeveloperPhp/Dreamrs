<?php

class About{

    // database connection and table name
    private $conn;
    private $table_name = "about_part";

    // object properties
    public $id;
    public $title;
    public $description;
    public $client;
    public $project;
    public $member;


    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
        $query = "SELECT * FROM " . $this->table_name . " LIMIT 1";

        $stmt = $this->conn->query( $query );
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
}

?>