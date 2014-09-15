<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>แสดงผลนักเรียน</title>
<link  rel="stylesheet" type="text/css" href="css/style.css">
</head>
 
<body>
 
<table class="mytable">
    <caption>ตารางแสดงข้อมูลเรียน</caption>
    <thead>
        <tr>
            <th>No.</th>
            <th>รหัสนักเรียน</th>
            <th>ชือ</th>
            <th>นามสกุล</th>
            <th>เพศ</th>
            <th>เลขประชาชน</th>
            <th>ห้องเรียน</th>
            <th>ชื่อผู้ใช้งาน</th>
        </tr>
    </thead>
    
    <tbody>
    
    <?
        $rowno = 0;
        include('include/function.php');
        $dblink = connect_db();
        $strSQL = "SELECT sID, stdID, stdName, stdLast, stdGender, stdPerID, cID, sUsername FROM tblstd";
        $resultSQL = mysqli_query($dblink,$strSQL);
        while($rows = mysqli_fetch_array($resultSQL)){
        $rowno++;
    ?>
        <tr>
            <td><?=$rowno?></td>
            <td><?=$rows['stdID']?></td>
            <td><?=$rows['stdName']?></td>
            <td><?=$rows['stdLast']?></td>
            <td><?=$rows['stdGender']?></td>
            <td><?=$rows['stdPerID']?></td>
            <td><?=$rows['cID']?></td>
            <td><?=$rows['sUsername']?></td>
        </tr>
    <? 
        } // end loop
    ?>    
    </tbody>
 
</table>
 
 
/*
<table class="mytable">
    <caption>ตารางแสดงรายชื่อชั้น</caption>
    <thead>
        <tr>
            <th>ที่</th>
            <th>ชื่อชั้น</th>
            <th>ห้อง</th>
        </tr>
    </thead>
    
    <tbody>
    
    <?
        $strSQLf = "SELECT cID, cName, cRoom FROM tblclass ORDER BY cID";
        $resultSQLf = mysqli_query($dblink,$strSQLf);
        while($rowsf = mysqli_fetch_array($resultSQLf)){
    ?>
        <tr>
            <td><?=$rowsf['cID']?></td>
            <td><?=$rowsf['cName']?></td>
            <td><?=$rowsf['cRoom']?></td>
        </tr>
    <? 
        } // end loop
    ?>    
    </tbody>

 
</table>
 
<div>
 
 
</body>
</html>