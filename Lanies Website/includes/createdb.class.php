<?php
//this class create database and table for lanie's website
class CreateDb {
    private $con;

    public function __construct($dbname = "lanies_website",$servername = "localhost",$username = "root",$password = ""){
        $this->dbname = $dbname;
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;

        //create connection
        $this->con = mysqli_connect($servername, $username, $password);
        //check connection
        if (!$this->con){
            die("Connection failed : " . mysqli_connect_error());
        }

        $this->querySqli("CREATE DATABASE IF NOT EXISTS $dbname;");
        $this->con = mysqli_connect($servername, $username, $password, $dbname);
        $this->querySqli("CREATE TABLE IF NOT EXISTS products(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, user_id VARCHAR (255), product_image VARCHAR (225), product_name VARCHAR (255) NOT NULL, product_price VARCHAR(255), product_quantity VARCHAR(255), product_status VARCHAR(255));");
        $this->querySqli("CREATE TABLE IF NOT EXISTS menu_products(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, product_image VARCHAR (225), product_name VARCHAR (255) NOT NULL, product_price VARCHAR(255), product_quantity VARCHAR(255), product_description VARCHAR(255), UNIQUE(product_name));");
        $this->querySqli("CREATE TABLE IF NOT EXISTS user_registration(id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL);");

    }
    //query sql commands
    private function querySqli($query) {
        if(!mysqli_query($this->con, $query)){
            echo "Error query: " . mysqli_error($this->con); 
        }
    }
    // restore/add menu products 
    public function restoreMenuProducts() {
        $this->querySqli("INSERT IGNORE INTO `menu_products` (`id`, `product_image`, `product_name`, `product_price`, `product_quantity`, `product_description`) VALUES (NULL, 'images/menu_empanada.jpg', 'Empanada', '60.00', '1', '1 piece empanada ₱60.00');");
        $this->querySqli("INSERT IGNORE INTO `menu_products` (`id`, `product_image`, `product_name`, `product_price`, `product_quantity`, `product_description`) VALUES (NULL, 'images/menu_miki.jpg', 'Miki', '50.00', '1', '1 piece miki ₱50.00');");
        $this->querySqli("INSERT IGNORE INTO `menu_products` (`id`, `product_image`, `product_name`, `product_price`, `product_quantity`, `product_description`) VALUES (NULL, 'images/menu_kwek kwek.jpg', 'Kwek kwek', '45.00', '1', '4 pcs Ilocos kwek kwek ₱45.00');");
        $this->querySqli("INSERT IGNORE INTO `menu_products` (`id`, `product_image`, `product_name`, `product_price`, `product_quantity`, `product_description`) VALUES (NULL, 'images/menu_longganisa.jpg', 'Longganisa', '150.00', '1', '3 pcs longganisa with salted egg');");
    }
    //return connection
    public function con() {
        return $this->con;
    }
}

?>