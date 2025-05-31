<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=student_management_system" , 'root' , '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION) ;
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE , PDO::FETCH_ASSOC) ;
} catch (PDOException $e) {
    echo $e->getMessage() ;
    die() ;
}