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
	
	function class_select(){
    $dblink = connect_db();
    $strSQL = "SELECT cID, cName, cRoom, cEdu FROM tblclass";
    $resultSQL = mysqli_query($dblink, $strSQL);
    
    echo '<select name="cID">';
    echo '<option value="">---------- เลือกระดับชั้น ----------</option>';
    
    while($rows = mysqli_fetch_array($resultSQL)){
        
        echo '<option value="'.$rows['cID'].'">'.$rows['cName'].'  ห้อง  '.$rows['cRoom'].'  ระดับ'.$rows['cEdu'].'</option>';
        
    }
    
    echo '</select>';
}

?>