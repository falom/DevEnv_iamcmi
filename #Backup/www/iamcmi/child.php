<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" >
<head>
    <title>Untitled Page</title>

<script langauge="javascript"> 
 
function post_value(){ 
    window.opener.document.getElementById("p_name").value = window.document.getElementById("c_name").value;
    window.close();
} 
 
</script> 
 
</head> 
 
<body > 
    <form id="form1" runat="server">
        <table border=0 cellpadding=0 cellspacing=0 width=250> 
         <tr><td align="center"> Your name <input type="text" id="c_name" name="c_name" size="12" value=""><input type="button" value="Submit" onclick="post_value();"> 
          </td></tr> 
        </table> 
    </form> 
</body> 
</html>