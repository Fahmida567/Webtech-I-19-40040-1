<?php

require_once 'db_connect.php';
function showAllAdvertisementsView(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `sortedadd` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showPendingsAddView(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `pendingadd` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showReceivePaymentView(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `bachelor_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showSendPaymentView(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `flatOwners_info` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showPaymentReceive($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `bachelor_info` where ID = ?";
// $selectQuery = "SELECT * FROM `pendingadd` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showAllAddView(){
    $conn = db_conn();
    $selectQuery = 'SELECT * FROM `sortedAdd` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}
function showPaymentSend($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `flatOwners_info` where ID = ?";
// $selectQuery = "SELECT * FROM `pendingadd` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}





function showProduct($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `sortedadd` where ID = ?";
// $selectQuery = "SELECT * FROM `pendingadd` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}
function showPendingAdd($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `pendingadd` where ID = ?";
// $selectQuery = "SELECT * FROM `pendingadd` where ID = ?";
    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}





function searchUsername($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `data_table` WHERE USERNAME = '$uname'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}



function updatePasswordStudent($uname, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE data_table set PASSWORD = '$password' where USERNAME = '$uname'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function deleteProduct($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `sortedadd` WHERE `ID` = ?";
    //  $selectQuery = "DELETE FROM `pendingadd` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function deleteAdd($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `pendingadd` WHERE `ID` = ?";
    //  $selectQuery = "DELETE FROM `pendingadd` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function deleteAdv($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `flatOwners_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function deleteAddd($id){
    $conn = db_conn();
    $selectQuery = "DELETE FROM `bachelor_info` WHERE `ID` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}
function CreateUser($data){
    $conn = db_conn();
    $selectQuery = "INSERT into data_table (Username, Full_Name, Email, Phone, Address, Password)
VALUES (:uname, :fname, :email, :phone, :address, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            ':uname' => $data['uname'],
            ':fname' => $data['fname'],
            ':email' => $data['email'],
            ':phone' => $data['phone'],
            ':address' => $data['address'],
            ':pass' => $data['pass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function SearchUser($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Username FROM `data_table` WHERE Username = '$uname'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function VerifyPassword($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `data_table` WHERE Username = '$uname'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_COLUMN, 5);
    return $rows[0];
}

function showUser($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `data_table` WHERE Username = '$uname'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
function editUser($uname, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `data_table` set Full_Name = ?, Email = ?, Phone = ?, Address = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
            $data['fname'], $data['email'], $data['phone'], $data['address'], $uname
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}
function showLocation($id){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `add_details` WHERE ID = '$id'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
