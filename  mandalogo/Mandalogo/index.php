<?php
include_once 'Util.php';

if (!isset($_SESSION)) 
	session_start();

protegerAllPage();
?>

<style type="text/css">
<!--
*{ margin:0; padding:0;}
body{
	font:100% normal Arial, Helvetica, sans-serif;
	background:#161712;
	background-color: #000;	
}
form,input,select,textarea{margin:0; padding:0; color:#ffffff;}
div.box {
margin:0 auto;
width:400px;
position:relative;
top:50px;
border:1px solid #262626;
}

div.box h1 {
color:#ffffff;
font-size:18px;
text-transform:uppercase;
padding:5px 0 5px 5px;
border-bottom:1px solid #161712;
border-top:1px solid #161712;
}

div.box label {
width:100%;
display: block;
background:#1C1C1C;
border-top:1px solid #262626;
border-bottom:1px solid #161712;
padding:10px 0 10px 0;
}

div.box label span {
display: block;
color:#bbbbbb;
font-size:12px;
float:left;
width:75px;
text-align:right;
padding:5px 20px 0 0;
}

div.box .input_text {
padding:10px 10px;
width:206px;
background:#262626;
border-bottom: 1px double #171717;
border-top: 1px double #171717;
border-left:1px double #333333;
border-right:1px double #333333;
}


div.box .button
{
margin:-10 0 10px 200;
padding:4px 7px;
background:#CCAA00;
border:0px;
position: relative;
top:10px;
left:96px;
width:100px;
}
div.box .file
{
padding:10px 10px;
width:206px;
background:#AAAAAA;
border-bottom: 1px double #171717;
border-top: 1px double #171717;
border-left:1px double #333333;
border-right:1px double #333333;
}
a:link {
	text-decoration: none;
	color: #FFF;
}
a:visited {
	text-decoration: none;
	color: #FFF;
}
a:hover {
	text-decoration: underline;
	color: #FFF;
}
a:active {
	text-decoration: none;
	color: #FFF;
}
-->
</style>
<div class="box">
<form method="post" action="gameover.php" enctype="multipart/form-data">


UP - Guardians
       <label>
         <span>Arquivo</span>
         <input type="file" name="arquivo" class="file"   align="center" />
         <br />
       </label>
       
		<label>
           <span>Disciplina</span>

                <select name="diretorio" size="1" >

                    <option value="labprog1-t1">LabProg1-t1</option>

                    <option value="labprog1-t2">LabProg1-t2</option>

                    <option value="labprog2-t1">LabProg2-t1</option>

                    <option value="labprog2-t2">LabProg2-t2</option>

                    <option value="labeda" >LabEda</option>

                </select>

            </td>

        </tr>
        </label>
        <input name="Submit" type="submit" class="button" value="Enviar" />

</form>

</div>
<div class="box">
<h6><a href="rodape.php">Manager Files</a></h6>
</div>
