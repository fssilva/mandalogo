<form name=”frmLogin” method=”POST” action=”#”>
<div class=”divLogin”>
<div class=”linha1″>
Efetuar Login
</div>

<div class=”linha2″>
<div class=”col1″>
Usuário
</div>

<div class=”col2″>
<input type=”text” class=”txt” title=”Digite o nome de usuário” onfocus=”this.className=’cxOn’” onblur=”this.className=’cxOff’”>
</div>
</div>

<div class=”linha3″>
<div class=”col1″>
Senha
</div>

<div class=”col2″>
<input type=”password” class=”txt” title=”Digite a sua senha” onfocus=”this.className=’cxOn’” onblur=”this.className=’cxOff’”>
</div>
</div>

<div class=“linha4″>
<input type=“reset” value=“Limpar” title=“Clique para limpar os dados”> 
<input type=“submit” value=“ Login ” title=“Clique para efetuar login”>
</div>
</div>
</form>
2° O estilo

<style type=”text/css”>
.divLogin {
border:solid 2px #F60;
width:260px;
margin:100px auto auto;
}

.linha1,.linha2,.linha3,.linha4 {
font:bold 12pt “Trebuchet Ms”,”Verdana”, “Arial”;
width:auto;
text-align:center;
}

.linha1 {
margin-bottom:20px;
font:bold 16pt “Trebuchet Ms”,”Verdana”, “Arial”;
color:#FFF;
background-color:#F60;
}

.linha2 {
margin-bottom:5px;
}

.linha4 {
margin-top:25px;
margin-bottom:10px;
}

.col1,.col2,.col3,.col4 {
width:auto;
margin:auto;
}

.col1 {
float:left;
width:75px;
height:22px;
text-align:right;
padding-right:5px;
color:#F60;
}

.txt,.cxOn,.cxOff {
border:solid 1px #f60;
}

.cxOn {
background-color:#EEFAFD;
}

.cxOff {
background-color:#FFF;
}
</style>