var event;

function isJsEnabled() {
  if (typeof document.jsEnabled == 'undefined') {
    // Note: ! casts to boolean implicitly.
    document.jsEnabled = !(
     !document.getElementsByTagName ||
     !document.createElement        ||
     !document.createTextNode       ||
     !document.documentElement      ||
     !document.getElementById);
  }
  return document.jsEnabled;
}

// Global Killswitch on the <html> element
if (isJsEnabled()) {
  document.documentElement.className = 'js';
}

/**
 * Make IE's XMLHTTP object accessible through XMLHttpRequest()
 */
if (typeof XMLHttpRequest == 'undefined') {
  XMLHttpRequest = function () {
    var msxmls = ['MSXML3', 'MSXML2', 'Microsoft']
    for (var i=0; i < msxmls.length; i++) {
      try {
        return new ActiveXObject(msxmls[i]+'.XMLHTTP')
      }
      catch (e) { }
    }
    throw new Error("No XML component installed!");
  }
}

/**
 * Creates an HTTP GET request and sends the response to the callback function.
 *
 * Note that dynamic arguments in the URI should be escaped with encodeURIComponent().
 */
function HTTPGet(uri, callbackFunction, callbackParameter) {
  var xmlHttp = new XMLHttpRequest();
  var bAsync = true;
  if (!callbackFunction) {
    bAsync = false;
  }

  xmlHttp.open('GET', uri, bAsync);
  xmlHttp.send(null);

  if (bAsync) {
    xmlHttp.onreadystatechange = function() {
      if (xmlHttp.readyState == 4) {
        callbackFunction(xmlHttp.responseText, xmlHttp, callbackParameter);
      }
    }
    return xmlHttp;
  }
  else {
    return xmlHttp.responseText;
  }
}

function $(id)
{
return document.getElementById(id);
}
var event;
function show_info(e,type,id)
{
  
	if($('info')==null)
	{

	//alert(type+'::'+id);
	var http=HTTPGet('ajax.php?act='+type+'&id='+id);

	box = document.createElement("div");
	box.innerHTML=http;
	

    if (e== undefined)
	   {
	     box.id="info";
	      // IE case
	      var d= (document.documentElement &&
	      document.documentElement.scrollLeft != null) ?
	      document.documentElement : document.body;
	     
	     docX= x + d.scrollLeft;
	     docY= y + d.scrollTop;
	      box.style.left=docX;
	      box.style.top=(docY+2);
	      box.style.position='absolute';
	      
	   }
	   else
	   {
	     box.setAttribute("id","info");
	      // all other browsers
	      docX= e.pageX;
	      docY= e.pageY;
	      box.setAttribute("style", "position:absolute;left:"+docX+";top:"+(docY+2));
	   }
	
	document.body.appendChild(box);
   	}
}

function hide_info()
{
document.body.removeChild($("info"));
}
function allow_all_cb()
{
if(confirm("Sure want disable security patterns for all agents? "))
	{
		return true;
	}else{
		return false;
	}
}
function block_all_cb()
{
if(confirm("Sure want enable all security patterns for all agents?"))
	{
       return true;
	}else{
		return false;
	}
}
function request_more_info(id)
{
var http=HTTPGet('ajax.php?act=request_more_info&id='+id+'&result_num='+result_num);
var box=$('request_tbl_box');
var div=document.createElement("div");
div.setAttribute("class","request_tbl_div");
div.innerHTML=http;
box.appendChild(div);
result_num+=100;

if(result_num>results_count)
	{
		$('more_btn').style.display='none';
	}
}
function confirm_form(url,text)
{
	if(confirm(text))
	document.location=url;
	else return false;
}
function more_variables4test()
{
	var el=$('variables').getElementsByTagName('li');
	var next=el.length;
   var li=document.createElement("li");
   li.innerHTML="Custom variable:<input name='names["+next+"]' type='text'>&nbsp;=&nbsp;Value:<input type='text' name='values["+next+"]' value=''>";
   $('variables').appendChild(li);
}
    function getAttributes(node)  
    {  
      var ret = new Object();  
      if(node.attributes)  
      for(var i=0; i<node.attributes.length; i++)  
      {  
        var attr = node.attributes[i];  
        ret[attr.name] = attr.value;  
      }  
      return ret;  
    }  
function chk_pattern_form()
{
if(document.pattern_form.op.value=='cancel'){return true;}
  if(document.pattern_form.name.value.trim().length==0){document.pattern_form.name.focus();alert("Name of pattern cannot be empty!");return false;}
   if(document.pattern_form.code.value.trim().length==0){document.pattern_form.code.focus();alert("Code of pattern cannot be empty!");return false;}
   return true;
}
function send_test_form()
{
var myform=document.createElement("form");var testform=document.test_form;
if(testform.url.value.length==0)
{
testform.url.focus();alert("Url of target cannot be empty");
}
 myform.setAttribute("action", testform.url.value);myform.setAttribute("method", testform.method.value);collection=testform.getElementsByTagName("input");
 for(i=0;i<collection.length;i++)
 {
 if((collection[i].name.substr(0,5)=='names')||(collection[i].name.substr(0,6)=='values'))
 {
  if(collection[i].name.substr(0,5)=='names')
    {
    if(collection[i].value.length==0){collection[i].focus();alert("Variable name cannot be empty");}
    new_element=document.createElement("input");new_element.type = 'hidden';new_element.name = collection[i].value;
    }else if(collection[i].name.substr(0,6)=='values')
    {
    new_element.value = collection[i].value; 
    myform.appendChild(new_element);      
    }
 }
 }
document.test_form.appendChild(myform);myform.submit();
}
function chk_user_edit_form()
{
  var fo=document.user_edit;
  if(fo.name.value.length==0){alert("Please type name of user");fo.name.focus();return false;}
  if(fo.email.value.length==0){alert("Please type email of user");fo.email.focus();return false;}
  
  if((fo.password1.value.length==0)&&(fo.id.value==0)){alert("Please type password for new user");fo.password1.focus();return false;}
  if((fo.password1.value.length>0)&&(fo.password1.value!=fo.password2.value)){alert("passwords typed  for user not equal");fo.password1.value='';fo.password2.value='';fo.password1.focus();return false;}
  return true;
}
function chk_pass_chg_form()
{
  var fo=document.pass_chg;if(fo.password1.value.length==0){alert("Please type password");fo.password1.focus();return false;}if(fo.password1.value!=fo.password2.value){alert("passwords typed  for user not equal");fo.password1.value='';fo.password2.value='';fo.password1.focus();return false;}return true;
}
function item_disable(item){item.title='Please buy software for full options access ';item.disabled=1;}
function system_init(){var answer=HTTPGet('ajax.php?act=chk_lic');if(answer!='true'){if($('templates_tbl')!=null){var inputs=$('templates_tbl').getElementsByTagName('input');for(var i=0;i<inputs.length;i++)item_disable(inputs.item(i));} 
  if(document.getElementsByClassName("tbl_form").item(0)!=null){var btns=document.getElementsByClassName("tbl_form").item(0).getElementsByTagName('input');for(var i=0;i<btns.length;i++)item_disable(btns.item(i));var textareas=document.getElementsByClassName("tbl_form").item(0).getElementsByTagName('textarea');for(var i=0;i<textareas.length;i++)item_disable(textareas.item(i));}
 if($('user_edit')!=null){var inputs=$('user_edit').getElementsByTagName('input');for(var i=0;i<inputs.length;i++){item_disable(inputs.item(i));}}}}


jQuery.noConflict();
var x,y;
jQuery(document).ready(function(){
   jQuery(document).mousemove(function(e){
     x=e.pageX ;
     y=e.pageY;
   }); 
});
document.addEventListener("DOMContentLoaded", system_init, false);
