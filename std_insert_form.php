<!DOCTYPE HTML>
<<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
 
<body>
 
    <form method="post" action="std_manage.php?todo=insert">
        <fieldset class="radius5">
            <legend>เพิ่มนักเรียน</legend>
            <div>
                <label>รหัสนักเรียน</label>
                <input type="text" name="stdID">
            </div>
            <div>
                <label>ชื่อ</label>
                <input type="text" name="stdName">
            </div>
            <div>
                <label>นามสกุล</label>
                <input type="text" name="stdLast">
            </div>
            <div>
                <label>เพศ</label>
                <input type="radio" name="stdGender" value="m"> ผู้ชาย
                <input type="radio" name="stdGender" value="f"> ผู้หญิง
            </div>
            <div>
                <label>เลขประจำตัวประชาชน</label>
                <input type="text" name="stdPerID">
            </div>
            <div>
                <label>ห้องเรียน</label>
                <?
                    include('include/function.php');
                    class_select();
                ?>
            </div>
            <div>
                <label>ชื่อผู้ใช้งาน</label>
                <input type="text" name="sUsername">
            </div>
            <div>
                <label>รหัสผ่าน</label>
                <input type="password" name="sPassword">
            </div>
            <div>
                <input type="submit" value="Submit">
            </div>
        </fieldset>
    </form>
</body>
</html>
