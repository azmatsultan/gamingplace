<?php
class Product {
 
    
    // Initiate db variable
    
    
    private $db;
    
    /*
    create constructor    
    */
    
    public function __construct() {
    $this->db = new Database;
    }
    
    /*
    Get all of products
    */
    public function allProducts() {
        $this->db->query('SELECT * FROM products');
       $results =  $this->db->resultset();
        return $results;
    }


    public function getProduct($id) {
        $this->db->query("SELECT * FROM products where id=:id");
        $this->db->bind(':id',$id);
        $row = $this->db->single();
        return $row;
        
    }
  
}
