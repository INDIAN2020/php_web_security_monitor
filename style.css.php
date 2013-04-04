<?
$base_url='http://'.$_SERVER['SERVER_NAME'].substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
#print substr($_SERVER['SCRIPT_NAME'],0,strrpos($_SERVER['SCRIPT_NAME'],"/")+1);
?>BODY{
background-color:#333333;
text-decoration:none;
}
* html BODY{
	text-align:center;
}
a{text-decoration:none;}

.header{
z-index:0px;
position:relative;
padding:10px;
border:solid black 1px;
width:980px;
margin:0 auto;

    -webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;
    -webkit-box-shadow: #666 0px 5px 5px;-moz-box-shadow: #666 0px 5px 5px;box-shadow: #666 0px 5px 5px;
    background: #666666;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#666666), to(#333333));
    background: -webkit-linear-gradient(#666666, #333333);background: -moz-linear-gradient(#666666, #333333);
    background: -ms-linear-gradient(#666666, #333333);background: -o-linear-gradient(#666666, #333333);
    background: linear-gradient(#666666, #333333);-pie-background: linear-gradient(#666666, #333333);
    behavior: url("<?=$base_url;?>img/pie/PIE.php");

}
* html .header{
height:80px;
}

.header h1{
margin-bottom:15px; 
margin-top:5px;
color:#CCCCFF;
text-shadow: 1px 1px 2px black, 0 0 1em black ;
font-family:Simplified Arabic Fixed;
font-size:26px;
text-align:center;
height:100px;
position:relative;
}
* html .header h1{
margin-bottom:27px; 
}
.logo{
  float:left;
  margin-right:25px;
 
}
.menu{
border:solid white 0px;
width:800px;
border-collapse:collapse;
margin:0px;
position:relative;
}

* html .menu{
width:770px;
}

 .menu td {
 padding:0 5px;
 }

.menu a{
text-decoration:none;
font-weight:bold;
border-style:ridge;
border-width:10px;
font-weight:bold;
padding:3px 7px;
margin:0px;
font: bold 15px;
display: inline-block;
text-align: center;
color: #CCCCFF;
border: 1px solid #000066;
text-shadow: 0 1px 0 rgba(0,0,0,0.4);
box-shadow: 0 0 4px rgba(0,0,0,0.4);
-moz-box-shadow: 0 0 1px rgba(0,0,0,0.4);
-webkit-box-shadow: 0 0 1px rgba(0,0,0,0.4);
border-radius:18px;
font-family:Simplified Arabic Fixed;
text-shadow: 1px 1px 2px black, 0 0 1em #ffffff ;
background-color:#0033CC;
/* opacity: 0.9;
-moz-opacity:0.9; */

-webkit-box-shadow: #gray 1px 0px 4px 4px;-moz-box-shadow: #gray 1px 0px 4px 4px;box-shadow: #gray 1px 0px 4px 4px;

background: #0033CC;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#0033CC), to(#333));
    background: -webkit-linear-gradient(#0033CC, #333);background: -moz-linear-gradient(#0033CC, #333);
    background: -ms-linear-gradient(#0033CC, #333);background: -o-linear-gradient(#0033CC, #333);
    background: linear-gradient(#0033CC, #333);-pie-background: linear-gradient(#0033CC, #333);
behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.menu a:hover{
color:#00FF99;
	
	background: #0099CC;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#0099CC), to(#0033CC));
    background: -webkit-linear-gradient(#0099CC, #0033CC);background: -moz-linear-gradient(##0099CC, #0033CC);
    background: -ms-linear-gradient(#0099CC,#0033CC);background: -o-linear-gradient(#0099CC, #0033CC);
    background: linear-gradient(#0099CC, #0033CC);-pie-background: linear-gradient(#0099CC, #0033CC);
behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.content{
padding:10px 10px;
width:1000px;
border:solid black 1px;
margin:0px auto;
background-color:#FFFFCC;
position:relative;

-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius: 10px;
    -webkit-box-shadow: #666 0px 5px 5px;-moz-box-shadow: #666 0px 5px 5px;box-shadow: #666 0px 5px 5px;
	behavior: url(<?=$base_url;?>img/pie/PIE.php);

}

.row{
margin-bottom:20px;
margin-top:20px;
text-align:left;
position:relative;
}

.row1{
text-align:center;
margin:10px auto;
}
*html .row1{
margin-top:20px;
}
.new_div{
padding:10px 0; 
position:relative;
text-align:left;

}




.footer{
border-bottom:dotted 1px black;
font-size: 13px;
text-align:left;
margin:0 auto;
padding:7px 13px;
width: 1000px;
font-family:Simplified Arabic Fixed;
text-shadow: 1px 1px 2px black, 0 0 1em #ffffff ;
border-radius:10px;
behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.footer a{
font-family:Simplified Arabic Fixed;
font-size: 13px;
color:#CCCCFF;
text-shadow: 1px 1px 2px black, 0 0 1em #ffffff ;
margin-left:20px;
behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
#info{
position:absolute;
border:solid dimgray 1px;
background:#999999;
border-radius:10px;
box-shadow:0px 5px 5px black;
font-family:Simplified Arabic Fixed;
color:#ffffff;
padding:0 7px;
font-size:14px;
}
#info ul{
margin:0px;
padding:2px;
list-style:none;


}
#info table {
color:#fff;
}

.label_btn{
cursor:hand;
}
.label_btn:hover{
color:lime;

}
.templates_tbl{
width:100%;
border-collapse:collapse;
background:#fff;
}
.templates_tbl th{
text-align:left;

}
.status{
color:white;
display:block;
padding:1px;
border:solid black 1px;
}
.status_inline{
color:white;
display:inline;
padding:2px;
border:solid black 1px;
margin:10px;
 -webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;

}
.green{
background:green;
behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.red{
background:red;
behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
.mixed{
background:white ;
color:black;
position:relative;
-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;
	behavior: url(<?=$base_url;?>img/pie/PIE.php);

}

.request_tbl_div{
border-bottom:dimgray 1px;
background-color:#333333;
padding:0 10px 10px 10px;
box-sizing:content-box;
position:relative;
margin-top:10px;

 -webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;
    -webkit-box-shadow: #666 2px 3px 3px;-moz-box-shadow: #666 2px 3px 3px;box-shadow: #666 2px 3px 3px;
behavior: url(<?=$base_url;?>img/pie/PIE.php);
}

.request_tbl{
width:100%;
background:none repeat scroll 0 0 #FFFFFF;
border-collapse: collapse;
border-color:#333333;
position:relative;
background-color:#333; 
-webkit-border-radius: 7px;-moz-border-radius: 7px;border-radius: 7px;
-webkit-box-shadow: #666 0 2px 3px;-moz-box-shadow: #666 0 2px 3px;box-shadow: #666 0 2px 3px;
behavior: url(<?=$base_url;?>img/pie/PIE.php);
}

#more_btn{
border:solid black 1px;
display:block;
margin-left:450px;
width:70px;
padding:1px 5px;
color:white;
background:maroon;
font-weight:bold;
font-size:22px;
text-decoration:none;
-webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;
    -webkit-box-shadow: #666 0px 5px 5px;-moz-box-shadow: #666 0px 5px 5px;
	behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
#more_btn:hover{
color:red;
}
.count{
background-color:lightgreen;
}
.count td{
padding-left:50px;
color:navy;
font-weight:bold;
}
*html .url_w{
overflow-x:scroll;
} 
.url_w{
overflow-x:auto;
 width:300px;
}
.query_string_w{
overflow-x:auto;
width:300px;
}
*html .query_string_w{
overflow-x:scroll;
}
.copy_box{
display:inline;

}
.status_w{
width:65px;
}
.method_w{
width:56px;
}
.remote_addr_w{
width:95px;
}
.date_w{
width:85px;
font-size:14px;
}
#url{
width:300px;

}
.request_tbl td{
background:#fff;
padding:5px;
}

.request_tbl_header{
font-weight:bold;
font-size:12px;
vertical-align:top;
background-color:#333333;
color:#ffffff;

}
#templates_tbl td label{
color:blue;
}
#templates_tbl td label:hover{
color:#fff;
}

.request_tbl_header th{
color:#fff;
background-color:#333;
padding:5px;

}
.request_tbl_header td{
color:#fff;
background-color:#333;
padding:5px;

}

.request_tbl_header label{
cursor:pointer;
}
.file_code{
color:maroon;
background-color:#F0FDAF;
overflow-x:auto;
border:inset black 2px;
}
.error{
border:solid #990000 1px;
text-shadow: 1px 2px 2px black, 0 0 1em #666;
margin:10px auto;
padding:10px;
position:ralative;
text-align:center;
  -webkit-border-radius: 25px;-moz-border-radius: 25px;border-radius:25px;
    -webkit-box-shadow: #666 0px 5px 5px;-moz-box-shadow: #666 0px 5px 5px;box-shadow: #666 0px 5px 5px;
    background: #990000;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#990000), to(#660000));
    background: -webkit-linear-gradient(#990000, #660000);background: -moz-linear-gradient(#990000, #660000);
    background: -ms-linear-gradient(#990000, #660000);background: -o-linear-gradient(#990000, #660000);
    background: linear-gradient(#990000, #660000);-pie-background: linear-gradient(#990000, #660000);
    behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
* html .error{
padding:13px 10px 7px 10px;
}
.error h3,.error h5{
color:#ffffff;
text-align: center;
font-family:Simplified Arabic Fixed;
position:relative;
font-size:16px;
//margin-top:30px;
}
h3.error a,.h3.error a:visited{
color:darkblue;
}
h3.error{
width:600px;
}

* html .error h5{

}


.folder_link{
text-decoration:none;
color:blue;
}
.folder_link:hover{
color:blue;
text-decoration:none;
font-family:Simplified Arabic Fixed;
}
.file_link{
text-decoration:none;
}
.file_link:hover{
text-decoration:underline;
color:red;
}
.message{
border:solid red 1px;
padding:10px 20px;
margin:5px auto;
width:800px;
background-color:#FFAEFF;
color:#000;
-webkit-border-radius: 20px;-moz-border-radius: 20px;border-radius:20px;
   -webkit-box-shadow: #000 2px 2px 2px;-moz-box-shadow: #000 2px 2px 2px;box-shadow: #000 2px 2px 2px;
}
.start_btn{
background-color:white;
border:inset black 1px;
font-weight:bold;
width:150px;
margin-top:20px;
-webkit-border-radius: 10px;-moz-border-radius: 10px;border-radius:10px;
   -webkit-box-shadow: #000 0px 2px 2px;-moz-box-shadow: #000 0px 2px 2px;box-shadow: #000 0px 2px 2px;
}

}
.start_btn:hover{
background-color:gray;
border:outset black 1px;
font-weight:bold;
width:150px;
color:white;
}
.remove_btn{
border:inset #990033 1px;
border-radius:6px;
font-weight:bold;
width:250px;
margin-top:20px;
color:#fff;
cursor:pointer;
font-family:Simplified Arabic Fixed;
text-align:center;
	behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
.remove_btn:hover{
background-color:#FF6666;
border:outset black 1px;
font-weight:bold;
color:wight;
font-family:Simplified Arabic Fixed;
}
#info h5{
margin:0px;
padding:0 15px;
color: RGB(50, 0, 100);
font-family:Simplified Arabic Fixed;
}



.box,.tbl_form{
background-color:#fff;
border:solid navy 1px;
padding:5px;
box-shadow:4px 4px 4px  black;
font-family:Simplified Arabic Fixed;
font-size:15px;
 -webkit-border-radius: 13px;-moz-border-radius: 13px;border-radius: 13px;
    -webkit-box-shadow: #666 4px 4px 4px;-moz-box-shadow: #666 4px 4px 4px;box-shadow:#666 4px 4px 4px;
   behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
.tbl_form{
  width:590px;
}
.tbl_form td input{
width:185px;
}

.box th,.tbl_form th{
text-align:left;
}

.tbl_form td h5{
margin:0px;
color:navy;
font-family:Simplified Arabic Fixed;
font-size:15px;
}

.forma{
background-color:#fff;
border:solid 1px gray;
    border: 1px solid navy;
    border-radius: 13px 13px 13px 13px;
    font-size: 15px;
    padding: 5px;
    width: 627px;
font-family:Simplified Arabic Fixed;
    -webkit-border-radius: 13px;-moz-border-radius: 13px;border-radius: 13px;
    -webkit-box-shadow: #666 4px 4px 4px;-moz-box-shadow: #666 4px 4px 4px;box-shadow: #666 4px 4px 4px;
    behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
.forma td{
font-family:Simplified Arabic Fixed;
font-size:14px;
}
.forma li input{
width:133px;
}

.red_cl, .remove_btn{
color:#fff;
font-weight:bold;
text-align:center;
    -webkit-box-shadow: #666 0px 1px 1px;-moz-box-shadow: #666 0px 1px 1px;box-shadow: #666 0px 1px 1px;
	background: #CC0000;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#CC0000), to(#990033)); 
    background: -webkit-linear-gradient(#CC0000, #990033);background: -moz-linear-gradient(#CC0000, #990033);
    background: -ms-linear-gradient(#CC0000, #990033);background: -o-linear-gradient(#CC0000, #990033);
    background: linear-gradient(#CC0000, #990033);-pie-background: linear-gradient(#CC0000, #990033); 
	position:relative;
 }

.red_cl1{
position:relative;
color:#fff;
font-weight:bold;
text-align:center;
    -webkit-box-shadow: #666 0px 1px 1px;-moz-box-shadow: #666 0px 1px 1px;box-shadow: #666 0px 1px 1px;
	background: #CC0000;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#CC0000), to(#990033)); 
    background: -webkit-linear-gradient(#CC0000, #990033);background: -moz-linear-gradient(#CC0000, #990033);
    background: -ms-linear-gradient(#CC0000, #990033);background: -o-linear-gradient(#CC0000, #990033);
    background: linear-gradient(#CC0000, #990033);-pie-background: linear-gradient(#CC0000, #990033); 
}

.green_cl{
color:#fff;
font-weight:bold;
position:relative;
-webkit-box-shadow: #666 0px 1px 1px;-moz-box-shadow: #666 0px 1px 1px;box-shadow: #666 0px 1px 1px;
    background: #33CC33;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#33CC33), to(#333333));
    background: -webkit-linear-gradient(#33CC33, #333333);background: -moz-linear-gradient(#33CC33, #333333);
    background: -ms-linear-gradient(#33CC33, #333333);background: -o-linear-gradient(#33CC33, #333333);
    background: linear-gradient(#33CC33, #333333);-pie-background: linear-gradient(#33CC33, #333333);


}

.gray_cl{
background-color:#333333;
position:relative;
font-weight:bold;
-webkit-box-shadow: #666 0px 1px 1px;-moz-box-shadow: #666 0px 1px 1px;box-shadow: #666 0px 1px 1px;
 background: #666666;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#666666), to(#333333));
    background: -webkit-linear-gradient(#666666, #333333);background: -moz-linear-gradient(#666666, #333333);
    background: -ms-linear-gradient(#666666, #333333);background: -o-linear-gradient(#666666, #333333);
    background: linear-gradient(#666666, #333333);-pie-background: linear-gradient(#666666, #333333);
    behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.btn{
 border: 1px solid #003300;
font-family:Simplified Arabic Fixed;
color:#ffffff;
font-size:14px;
padding:0 5px;
cursor:pointer;
-webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;
 behavior: url(<?=$base_url;?>img/pie/PIE.php);
}

.copy_lnk{
font-size:11px;
font-weight:bold;
border: 1px solid #003300;
font-family:Simplified Arabic Fixed;
color:#ffffff;
font-size:14px;
margin:5px;
padding:2px;
position:relative;
-webkit-border-radius: 8px;-moz-border-radius: 8px;border-radius: 8px;
-webkit-box-shadow: #666 0px 2px 2px;-moz-box-shadow: #666 0px 2px 2px;box-shadow: #666 0px 2px 2px;
background: #33CC33;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#33CC33), to(#333333));
    background: -moz-linear-gradient(#33CC33, #333333);
    background: -ms-linear-gradient(#33CC33, #333333);
	background: -o-linear-gradient(#33CC33, #333333);
   background: linear-gradient(#33CC33, #333333);-pie-background: linear-gradient(#33CC33, #333333);
	behavior: url(<?=$base_url;?>img/pie/PIE.php);
	
	
 }
 
.copy_lnk:hover{
color:red;
} 



.loginbox{
margin:0 auto;
width:300px;
background-color:#ffffff;
box-shadow: 0 5px 5px black;
padding:10px;
border-radius:15px;
}
.left{
text-align:left;
}
.butblack{
background: -moz-linear-gradient(top, #666, #333); /* Firefox 3.6+ */
    /* Chrome 1-9, Safari 4-5 */
    background: -webkit-gradient(linear, left top, left bottom,
                color-stop(0%,#666), color-stop(100%,#333));
    /* Chrome 10+, Safari 5.1+ */
    background: -webkit-linear-gradient(top, #666, #333);
    background: -o-linear-gradient(top, #666, #333); /* Opera 11.10+ */
    background: -ms-linear-gradient(top, #666, #333); /* IE10 */
    background: linear-gradient(top, #666, #333); /* CSS3 */

	color:#ffffff;
	border-radius:15px;
	padding:2px 10px;
	font-weight:bold;
	}
 .new_btn{
margin: 10px;
display: inline-block;
font-size:14px;

}

.green_link, .new_btn{
	color:#ffffff;
	border-radius:20px;
	padding:8px;
	font-weight:bold;
	text-align: center;
	font-size:14px;
	position:relative;
font-family:Simplified Arabic Fixed;
border:solid 1px #003300;
background: #33CC33;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#33CC33), to(#333333));
    background: -webkit-linear-gradient(#33CC33, #333);background: -moz-linear-gradient(#33CC33, #333);
    background: -ms-linear-gradient(#33CC33, #333);background: -o-linear-gradient(#33CC33, #333);
    background: linear-gradient(#33CC33, #333);-pie-background: linear-gradient(#33CC33, #333);
behavior: url(<?=$base_url;?>img/pie/PIE.php);
}

.green_link:hover, .new_btn:hover{
background: #00FF33;background: -webkit-gradient(linear, 0 0, 0 bottom, from(#00FF33), to(#33CC33)); 
     background: -webkit-linear-gradient(#00FF33, #33CC33);background: -moz-linear-gradient(#00FF33, #33CC33);
    background: -ms-linear-gradient(#00FF33, #33CC33);background: -o-linear-gradient(#00FF33, #33CC33);
    background: linear-gradient(#00FF33, #33CC33);-pie-background: linear-gradient(#00FF33, #33CC33); 
	position:relative;
    behavior: url(<?=$base_url;?>img/pie/PIE.php);

}

.green_link:hover{
margin:10px;
padding:8px;
position:relative;
 behavior: url(<?=$base_url;?>img/pie/PIE.php);
}
.usr {
width:100px;
margin:10px auto;
behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.usr a{
color:#fff;
font-size:15px;
padding:5px;
font-family:Simplified Arabic Fixed;


}



.users_list{
  width:300px;
margin:0px auto;
padding:5px;
background:white;
list-style:none;
border-radius:20px;
box-shadow:0 2px 2px dimgray;
 border:solid gray 1px;
 behavior: url(<?=$base_url;?>img/pie/PIE.php);

}
.users_list li{

  box-shadow:0 2px 2px gray;
  border-radius:10px;
  padding:5px;
  margin:0 auto 5px auto;
  width:150px;
  border:solid gray 1px;
}
#user_edit{
  margin:0 auto 5px auto;

}
