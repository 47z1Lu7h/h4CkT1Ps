<?php

    $currency = '&#8364; '; //Currency
    
    $host="localhost";
    $user="root";
    $password="";
    $db="hacktips";

    $shipping_cost      = 56.98; //shipping cost
    $taxes              = array( //List your Taxes percent here.
                                'VAT' => 35, 
                                'Service Tax' => 5
                                );	

    $conn = new mysqli($host,$user,$password,$db);

?>