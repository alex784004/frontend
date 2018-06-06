<html>
<head>

<script type="text/javascript">
  
function insert(num)
{
  document.form.textview.value=document.form.textview.value+num;
}

function res()
{
  document.form.textview.value="";
}
function eva()

{  var chec=document.form.textview.value.slice(0,1);
  var val=document.form.textview.value.length;
  var left=document.form.textview.value.slice(1, val);
  if(chec=='√')
  {
     document.form.textview.value=Math.sqrt(left);
   
   }                      
  else {
  document.form.textview.value=eval(document.form.textview.value);
}
}
</script>

</head>

<style>
body{
  background-color:#404040;
  padding-top: 200px;
}
.textview{
  height:70px;
  width: 400px;

  background-color: #e6ffe6;
  font-size: 40px;
  text-align: right;
}
/*.button
{
  width:30;
 height:30;
  font-size:;
  margin:2;
  border-bottom-right-radius: 50
  background-color: #4CAF50;
}*/
.button {
    background-color: grey;
    border-radius: 16px;
    
color: white;
    width: 80px;
    padding: 20px 20px;
    text-align: center;
     font-size: 16px;
}
.cool{
  
  perspective: 532px;
  perspective-origin:
}
#sym{
  background-color: #ff6600;
}
table{
  background-color: #222;
 border-radius: 8px;
 padding-top: 10px;
}
</style>
</head>
  <body>
    <form name="form">
     <center>
      <table cellpadding="8">
        <tr >
      <td class="cool" colspan="4">     <input class="textview" name="textview" id="cc">
     </td>
     <tr>

      
        <tr>
          <td><input type="button" class="button" id="sym" value="√" onClick="insert('√')"></td>
          <td><input type="button" class="button" value="(" id="sym" onClick="insert('(')"></td>
          <td><input type="button" class="button" value=")" id="sym" onClick="insert(')')"></td>    
          <td><input type="button" class="button" value="/" id="sym" onClick="insert('/')"></td>
        </tr>
          <tr>
          <td><input type="button" class="button" value="7" onClick="insert(7)"></td>
          <td><input type="button" class="button" value="8" onClick="insert(8)"></td>
          <td><input type="button" class="button" value="9" onClick="insert(9)"></td>
          <td><input type="button" class="button" value="*" id="sym" onClick="insert('*')"></td>
        </tr>
        <tr>
          <td><input type="button" class="button" value="4" onClick="insert(4)"></td>
          <td><input type="button" class="button" value="5" onClick="insert(5)"></td>      
          <td><input type="button" class="button" value="6" onClick="insert(6)"></td>
          <td><input type="button" class="button" value="-" id="sym" onClick="insert('-')"></td>
        </tr>
        <tr>
          <td><input type="button" class="button" value="1" onClick="insert(1)"></td>
          <td><input type="button" class="button" value="2" onClick="insert(2)"></td>
          <td><input type="button" class="button" value="3" onClick="insert(3)"></td>
          <td><input type="button" class="button" value="+" id="sym" onClick="insert('+')"></td>
        </tr>
         <tr>
          <td><input type="button" class="button" value="0" onClick="insert(0)"></td>
          <td><input type="button" class="button" value="." onClick="insert('.')"></td>
          <td><input type="button" class="button" value="C" onClick="res()"></td>     
          <td><input type="button" class="button" value="=" id="sym" onClick="eva()"></td>
        </tr>
      </table>
    </center>
    </form>
   
  </body>
</html>