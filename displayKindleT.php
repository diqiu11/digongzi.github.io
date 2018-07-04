<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>displayKindleT</title>
<link href="CSS/oen.css" type="text/css" />
<script src="JS/two.js" type="text/javascript"></script>

</head>

<body>



<?php
	class KindleInfo{
			public $_kindleId;
			public $_KindleImageSrc;
			public $_branSalary;
			public $_Salary;
		}
		
		$kindle = new KindleInfo();
		$kindle->_kindleId = $_GET['kindleId'];
		$kindle->_KindleImageSrc = $_GET['KindleImageSrc'];
		$kindle->_branSalary = $_GET['branSalary'];
		$kindle->_Salary = $_GET['Salary'];
		

		
		session_start();
		if(isset($_SESSION['kindlet'])){//kindlet的变量哪里来
				$kindlet = $_SESSION['kindlet'];
				array_push($kindlet,$kindle);
				$_SESSION['kindlet']=$kindlet;
			}
		else{
				$kindlet=array();
				array_push($kindlet,$kindle);
				$_SESSION['kindlet']=$kindlet;
			}
			$kindlet = $_SESSION['kindlet'];
			
		
?>
	<div class="translate"><!--<marquee behavior="alternate" direction="right/left"></marquee> -->
    	<div class="kindlet_top">
    		<img class="img_ kindle_detail" />
            <div class="kindle_detail">商品名称</div>
            <div class="kindle_detail">商品价格</div>
    	</div>
<?php
	foreach($kindlet as $a){
?>
        <div class="kindlet_cente">
        	<img class="img_ kindle_detail" src="<?php echo $a->_KindleImageSrc;?>">
            <div class="kindle_detail"><?php echo $a->_branSalary;?></div>
            <div class="kindle_detail"><?php echo $a->_Salary;?></div>
        </div>
<?php
	}
?>
	</div>
   
		

        
        
		<div class="kindlet_bot">
        		
                <div class="detail_bot">
                	<button value="" onclick="back()" class="bot_bu">继续买买买</button>
                </div>
              
				<div class="detail_bot">
                		<button type="button" class="bot_bu" onclick="clean()">清空购物车</button>
<?php
function cleanTokindle(){

		unset($_SESSION['KindleImageSrc']);
		unset($_SESSION['branSalary']);
		unset($_SESSION['Salary']);
		session_destroy();

}
?>
                </div>
                
				<div class="detail_bot">合计:<span id="sum"></span></div>
        </div>
     
        
 
</body>
</html>