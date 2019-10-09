<html>

 <head>
     <meta charset="UTF-8" />
     <title>修改會員資料</title>
 </head>
 <body>

 <form action="" method="post" name="formAdd" id="formAdd">
      
     請輸入背號：<input type="int" name="cnumber" id="cnumber" value=" <?php echo $number ?>"><br/>
     請輸入分數：<input type="int" name="cscore" id="cscore" value="<?php echo $score ?>"><br/>
     <input type="hidden" name="action" value="update">
     <input type="submit" name="button" value="修改資料">
 </form>
 </body>
 </html>