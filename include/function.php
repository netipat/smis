<?
//ฟังค์ชันติดต่อฐานข้อมูล
function connect_db(){
    $link = mysqli_connect('localhost','root','123456','smis');
    if($link == false){
        die('ไม่สามารถติดต่อฐานข้อมูลได้');
    }else{
        mysqli_query($link, 'SET NAMES UTF8');
        return $link;
    }
}

//ฟังก์ชั่นเลือกคณะ
	
	function faculty_select(){
    $dblink = connect_db();
    $strSQL = "SELECT fID, fNameT FROM tblfaculty";
    $resultSQL = mysqli_query($dblink, $strSQL);
    
    echo '<select name="fID">';
    echo '<option value="">---------- เลือกคณะ ----------</option>';
    
    while($rows = mysqli_fetch_array($resultSQL)){
        
        echo '<option value="'.$rows['fID'].'">'.$rows['fNameT'].'</option>';
        
    }
    
    echo '</select>';
}

?>