<?
    include('include/function.php');
    $dblink = connect_db();
    
    $todo = $_GET['todo'];
    
    $stdID = $_POST['stdID'];
    $stdName = $_POST['stdName'];
    $stdLast = $_POST['stdLast'];
    $stdGender = $_POST['stdGender'];
    $stdPerID = $_POST['stdPerID'];
    $cID = $_POST['cID'];
    $sUsername = $_POST['sUsername'];
    $sPassword = $_POST['sPassword'];
    
    
    /////////////////////////////////// INSERT ///////////////////////////////////////////////
    
    if($todo == 'insert'){
    
        $strSQL = "
        INSERT INTO tblstd(stdID, stdName, stdLast, stdGender, stdPerID, cID, sUsername, sPassword)
        VALUES('$stdID', '$stdName', '$stdLast', '$stdGender', '$stdPerID', '$cID', '$sUsername', md5('$sPassword'))
        ";
        $result = mysqli_query($dblink, $strSQL);
        
        if($result){
            echo 'Insert Compleated';
            echo '<meta HTTP-EQUIV = "refresh" CONTENT = "2; URL=std_insert_form.php">';
        }
        
    }
 
?>