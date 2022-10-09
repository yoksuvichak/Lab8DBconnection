<?php include "connect.php" ?>
<html>
<head><meta charset="utf-8"></head>
<body>
<div style="display:flex">
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();


while ($row = $stmt->fetch()) {
?>
<a href="dbworkshop4.php?username=<?=$row["username"]?>">
<img src="member_img/<?=$row["username"]?>.jpg" height = 100px><br></a>
<div style="padding: 15px; text-align: center">
ชื่อสมาชิก: <?=$row ["name"]?><br>
ที่อยู่: <?=$row ["address"]?><br>
อีเมล: <?=$row ["email"]?><br>


<hr>
</div>
<?php } ?>
</div>
</body>
</html>