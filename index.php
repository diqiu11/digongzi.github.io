<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kindle专卖———开学大放送</title>
<link rel="stylesheet" href="CSS/oen.css" type="text/css" />
<script src="JS/jquery-3.2.1.min.js" type="text/javascript"></script>
<script src="JS/two.js"></script>
</head>

<body>

<!--header-->
<div class="header_pic">
	<img src="IMAGES/pic01.jpg" width="100%" />
</div>


<!--main-->
<div class="main">
	<div class="main_left">
    	 <ul class="nav" id="a">
            <li class="active"><a href="#" id="a.jsp" class="function">Kindle</a></li>
            <li><a href="javascript:;" id="a.jsp" >Kindle3保护套</a></li>
            <li><a href="#">列表二</a></li>
            <li><a href="#">列表三</a></li>
            <li><a href="#">列表四</a></li>
            <li><a href="#">列表五</a></li>
        </ul>
    </div>
    
    <div class="login">
    		<a href="#" class="a1"> 请登录 </a>
    		<a href="#" class="a1"> 我的账户 </a>
    		<a href="#" class="a1"> 我的购物车 </a>
    </div>
    
	<div class="main_rigth" id="page">
    	<div class="inmain page" id="this_mian">
        <!--第一-->
    		<div class="pic1" id="1111">
        		<img src="IMAGES/pic02.jpg"  height="200" width="200" />
        		<label class="branSalary">Kindle3</label>
                <label class="Salary">190$</label>
        		<button class="min" onclick="sendRequest('1111')">商品详细</button>
        	</div>
        
    		<div class="pic1" id="2222">
            	<img src="IMAGES/pic03.jpg"  height="200" width="200"/>
            	<label class="branSalary">Kindle2</label>
                <label class="Salary">150$</label>
            	<button class="min" onclick="sendRequest('2222')">商品详细</button>
            </div>
            
    		<div class="pic1" id="3333">
        		<img src="IMAGES/pic04.jpg"  height="200" width="200"/>
        		<label class="branSalary">Kindle1</label>
                <label class="Salary">100$</label>
        		<button class="min" onclick="sendRequest('3333')">商品详细</button>
        	</div>
            
    		<div class="pic1" id="4444">
            	<img src="IMAGES/pic05.jpg"  height="200" width="200"/>
            	<label class="branSalary">Kindle标</label>
                <label class="Salary">80$</label>
            	<button class="min" onclick="sendRequest('4444')">商品详细</button>
            </div>
            
    	</div>
    
    	<div class="inmain page" style="display:none" id="this_main">
        <!--第二-->
    		<div class="pic1" id="5555">
            	<img src="IMAGES/pic06.jpg"  height="200" width="200"/>
            	<label class="branSalary">Kindle3保护套</label>
                <label class="Salary">70$</label>
            	<button class="min" onclick="sendRequest('5555')">商品详细</button>
            </div>
            
    		<div class="pic1" id="6666">
            	<img src="IMAGES/pic07.jpg"  height="200" width="200"/>
            	<label class="branSalary">Kindle2保护套</label>
                <label class="Salary">20$</label>
            	<button class="min" onclick="sendRequest('6666')">商品详细</button>
            </div>
            
    		<div class="pic1" id="7777">
            	<img src="IMAGES/pic08.jpg"  height="200" width="200"/>
            	<label class="branSalary">Kindle1保护套</label>
                <label class="Salary">50$</label>
            	<button class="min" onclick="sendRequest('7777')">商品详细</button>
            </div>
            
    		<div class="pic1" id="8888">
            	<img src="IMAGES/pic09.jpg"  height="200" width="200"/>
            	<label class="branSalary">Kindle标保护套</label>
                <label class="Salary">12$</label>
            	<button class="min" onclick="sendRequest('8888')">商品详细</button>
            </div>
            
    	</div>
    </div>
</div>




<div class="wrapper row5">
  <footer id="footer" class="clear">
  
    <div class="one_quarter">
      <h6 class="title">Quick Links</h6>
      <ul class="nospace linklist">
        <li><a href="#">Home Page</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">Gallery</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
    
    <div class="footer_main">
    	<label class="wenzi">
        Amazon Kindle是由亚马逊Amazon设计和销售的电子书阅读器（以及软件平台）。第一代Kindle于2007年11月19日发布，用户可以通过无线网络使用Amazon Kindle购买、下载和阅读电子书、报纸、杂志、博客及其他电子媒体
        </label>
    </div>
    
    <div class="one_quarter">
      <h6 class="title">Keep in Touch</h6>
      <form class="btmspace-50" method="post" action="#">
        <fieldset class="is_long">
          <input class="btmspace-15" type="text" value="" placeholder="Email">
          <button type="submit" value="submit" style="background-color:#333">Submit</button>
        </fieldset>
      </form>

    </div>
    
  </footer>
</div>
</body>
</html>
<script type="text/javascript">
	
	var ldq = $("#a li");
	var page = $("#page .inmain")
	ldq.click(function(){
			var id = $(this).index();
			var url = $(this).find("a").attr("id");
			var ha = $(this).attr("data-id");
			if(ha==1){
				page.eq(id).show().siblings(".inmain").hide();
				}else{
					page.eq(id).load(url).show().siblings(".inmain").hide();
					$(this).attr("data-id","1");
				}
		});
	
	$(document).ready(function () {
            $('ul.nav > li').click(function () {
                $('ul.nav li > a').removeClass('function');
                $('ul.nav > li').removeClass('active');
                $(this).addClass('active');
            });
	});
</script>