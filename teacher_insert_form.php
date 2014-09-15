<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ระบบเพิ่มอาจารย์</title>

<link  rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
	<form method="post" action="teacher_manage.php?todo=insert">
    	<fieldset>
        	<legend>เพิ่มอาจารย์</legend>
            <div>
            	<label>ชื่อผู้ใช้งาน</label>
                <input type="text" name="tUsername" >
           	</div>
            <div>
            	<label>รหัสผ่าน</label>
                <input type="password" name="tPassword" >
          	</div>
            <div>
            	<label>ชื่อ</label>
                <input type="text" name="tName" >
			</div>
            <div>
            	<label>นามสกุล</label>
                <input type="text" name="tLastname" >
			</div>
            <div>
            	<label>เพศ</label>
                <input type="radio" name="tGender" value="m" >ผู้ชาย
                <input type="radio" name="tGender" value="f" >ผู้หญิง
            </div>
            <div>
            	<label>ที่อยู่</label>
                <textarea name="tAddress"> </textarea>
            </div>
            <div>
            	<label>คณะ</label>
                <?
                    include('include/function.php');
                    faculty_select();
                ?>
            </div>
            <div>
            	<input type="submit" value="ส่งข้อมูล" >
            </div>
           </fieldset>
         </form>
</body>
</html>