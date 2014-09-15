<?

    include('include/function.php');
    $dblink = connect_db();
    
    $todo = $_GET['todo'];
    
    $tUsername = $_POST['tUsername'];
    $tPassword = $_POST['tPassword'];
    $tName = $_POST['tName'];
    $tGender = $_POST['tGender'];
    $tAddress = $_POST['tAddress'];
    $fID = $_POST['fID'];
	$tLastname = $_POST['tLastname'];
    
    
    /////////////////////////////////// INSERT ///////////////////////////////////////////////
    
    if($todo == 'insert'){
    
        $strSQL = "
        INSERT INTO tblteacher(tUsername, tPassword, tName, tGender, tAddress, fID, tLastname)
        VALUES('$tUsername', md5('$tPassword'), '$tName', '$tGender', '$tAddress', '$fID', 'tLastname')
        ";
        $result = mysqli_query($dblink, $strSQL);
        
        if($result){
            echo 'Insert Completed';
            echo '<meta HTTP-EQUIV = "refresh" CONTENT = "2; URL=teacher_insert_form.php">';
        }
        
    }
?>