// JavaScript Document
function createXMLHttpRequest() {
        if(window.XMLHttpRequest) { //Mozilla 浏览器
            XMLHttpReq = new XMLHttpRequest();
        }
        else if (window.ActiveXObject) { // IE浏览器
            try {
                XMLHttpReq = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    XMLHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {}
            }
        }
	}



function sendRequest(obj) {  

			var element=document.getElementById(obj);//拿到实际标签
			var xx=element.lastElementChild;
			var Salary = xx.previousElementSibling;
			var branSalary = Salary.previousElementSibling;
			var KindleImage = element.firstElementChild;
			
			sessionStorage.setItem('KindleImage',KindleImage.getAttribute("src"));
			sessionStorage.setItem('branSalary', branSalary.innerHTML);
			sessionStorage.setItem('Salary', Salary.innerHTML);
			sessionStorage.setItem('kindleId',obj);
			

              
            var url = "detail.php";
			createXMLHttpRequest();  	//定制php页面
            XMLHttpReq.open("POST", url, true);  
            XMLHttpReq.onreadystatechange = processResponse;//指定响应函数  
            XMLHttpReq.send(null);  // 发送请求  
        }  
        // 处理返回信息函数  
        function processResponse() {  
            if (XMLHttpReq.readyState == 4) { // 判断对象状态  
                if (XMLHttpReq.status == 200) { // 信息已经成功返回，开始处理信息  
                    var tr=XMLHttpReq.responseText;					
					document.getElementById("this_mian").innerHTML=tr;//index
					
					//detail
					document.getElementById("kindle_Img").setAttribute("src",sessionStorage.getItem('KindleImage'));
					document.getElementById("kindle_Saler").innerHTML=sessionStorage.getItem('branSalary');
					document.getElementById("kindle_Salary").innerHTML=sessionStorage.getItem('Salary');
                    //setTimeout("sendRequest()", 1000);  //如果断线，尝试重新连接
                } else { //页面不正常  
                    window.alert("您所请求的页面有异常。");  
                }  
            }  
        } 


 function addTokindleT()
 {
	 //alert("two");
	 createXMLHttpRequest();
	 var kindleId = sessionStorage.getItem('kindleId');
	 var KindleImageSrc=sessionStorage.getItem('KindleImage');
	 var branSalary=sessionStorage.getItem('branSalary');
	 var Salary=sessionStorage.getItem('Salary');
	 
	 var url="displayKindleT.php?kindleId="+kindleId+"&KindleImageSrc="+KindleImageSrc+"&Salary="+Salary+"&branSalary="+branSalary;	 
     XMLHttpReq.open("POST", url, true); 
     XMLHttpReq.onreadystatechange =processResponseDisplayKindleT;//指定响应函数
     XMLHttpReq.send(null); 
 }
 function processResponseDisplayKindleT()
 {
	 if (XMLHttpReq.readyState == 4)
	 {			
        if (XMLHttpReq.status == 200)
	    {
			var tr=XMLHttpReq.responseText;					
			document.getElementById("this_mian").innerHTML=tr;
			
        }
		else
		{ 
            alert("您所请求的页面有异常。");
        }
     }
 }




function back(){
		window.location.reload();
	}
function clean(){
		cleanTokindle();
	}

/*function turnpage(url) {  
        var url0 = document.URL;  
        var num = url0.indexOf('didi.html');  
        var oldurl;  
        if(num == -1) {  
            oldurl = url0;  
        } else {  
            oldurl = url0.slice(0, num);  
        }  
        var newurl = oldurl + 'didi.html' + url;  
        history.pushState(null, null, newurl);  
        var ajaxurl = url + '.html'  
        $.ajax({  
            type: "post",  
            url: ajaxurl,  
            success: function(html) {  
                $('.inmain').html(html);  
            }  
        }); 
}  */


 
/*function f0(){
		$('#iframe0').attr("src", "diqiu.html");
	}

function f1(){
		$('#iframe1').attr("src", "didi.html");
		$('#iframe0').removeAttr("")
	}
*/