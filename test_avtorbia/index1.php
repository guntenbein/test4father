<HTML>
<HEAD>

<SCRIPT>
var Y_razdel=false;
var Nu_razdel;
var testWindow=null;
var windowOpened=false;

</SCRIPT>
<SCRIPT  language="JavaScript" src="type_browser.js"></SCRIPT>
<SCRIPT  language="JavaScript" src="fort.js"></SCRIPT>
<SCRIPT  language="JavaScript" src="init_global.js"></SCRIPT>
<SCRIPT>
if(!isIE){alert("тест работает только в Internet Exproler. Пож.смените браузер");close();}
for(i=1;i<=Max_tem;i++) document.write("<SCRIPT  language=\"JavaScript\" src=\"tema"+i+"/"+i+"vopros_otvet.js\"><\/SCRIPT>");
for(i=1;i<=Max_tem;i++) document.write("<SCRIPT  language=\"JavaScript\" src=\"tema"+i+"/"+i+"mas_PHP.js\"><\/SCRIPT>");
</SCRIPT>
<SCRIPT  language="JavaScript" src="func.js"></SCRIPT>

<LINK rel="stylesheet" href="style.css" type="text/css">
<LINK rel="stylesheet" href="style_t.css" type="text/css">

<meta charset="windows-1251">
</HEAD>
<BODY id="mybody" background="ff.jpg">
<!--
<?php 
for($i=1;$i<400;$i++){
$s_dir="tema".$i;
if(is_dir($s_dir)){
$s_mas_PHP=$s_dir."/".$i."mas_PHP.js";
if(!is_file($s_mas_PHP)){
$fw=fopen($s_mas_PHP,"w");
fputs($fw,"mas_PHP[\"".$s_dir."\"]=new Array();\r\n");
$d=0;
for($j=1;$j<256;$j++){
$s_f_v=$s_dir."/".$i."vopros".$j.".gif";
$v_g=0;
if(is_file($s_f_v)) $v_g=1;
else{
$s_f_v=$s_dir."/".$i."vopros".$j."_$.gif";
if(is_file($s_f_v)) $v_g=2;
       }
 $NKD_0=0;$o_g=1; $k0=0;
for($k=1; $k<32&&$o_g>0; $k++){
$o_g=0;
$s_f_o=$s_dir."/".$i."otvet".$j."_".$k.".gif";
if(is_file($s_f_o)) {$o_g=1; $k0++;}
else{
$s_f_o=$s_dir."/".$i."otvet".$j."_".$k."p.gif";
if(is_file($s_f_o)) {$o_g=2; $k0++; }
if($o_g==2) $NKD_0+=pow(2,$k0-1);
}}
if(($k0+$v_g)!=0)
   {
 fputs($fw,"mas_PHP[\"".$s_dir."\"][".$d."]=new Array(".$j.",".$v_g.",".$k0.",".$NKD_0.");\r\n");
   $d++;
	 }
             
}
fclose($fw);
} }}
?>
-->
<SCRIPT>
G_menu();
</SCRIPT>
<DIV class="testHeader"><font size=20><script>document.write(testName);</script></font></DIV>
<table width=100%>
<tr>
<td>
<IMG name="SD" src="entrance.jpg" align="left" height="10" width=10 hspace="30" 
                                vspace="50" border="2" style="border-color: #005522">
</td>
<td valign=bottom>
<P> 
</P>
<EM><B><font color="yellow">Для начала тестирования нажмите на кнопку</font></B></EM>
</td>
</tr>
</table>
<BR>
<CENTER>
<FORM>
<script>

document.write("<INPUT name=b1 type=button value=\"Обучение по теме или тестирование по разделу\" onClick=\"InitRazdel();\"><br>");
if(!Proverka_testa) document.write("<INPUT name=b1 type=button value=\"Итоговое тестирование 1(заочное)\" onClick=\"OW(1);\">");
if(!Proverka_testa) document.write("<INPUT name=b1 type=button value=\"Итоговое тестирование 2 уровня\" onClick=\"OW(2);\"><BR>");
if(Nu_razdel<0){alert("Тест не содержит разделов"); location.href="error.html"}
if(Nu_razdel>0){  location.href="razdel"+Nu_razdel+"/razdel_ini.html";}
</script>
</FORM>
</CENTER>
<DIV class="note">
Вопросы готовили:<BR>
<script>

for(i=1;i<Autor.length;i++){
document.write("© "+Autor[i]+"&nbsp&nbsp&nbsp");
document.write(Kafedra[i]+"<BR>");
document.write(Organisation[i]+"<BR>");
}
</script>

</DIV>
<DIV class="note">
<font color=red size=5>© Новиков В.А.</font>&nbsp&nbsp&nbsp<br>
E-mail:<A class="mail" href="mailto:vanovikov@tut.by">vanovikov@tut.by</A>
</DIV>
<script> medio();</script>
</BODY>
</HTML>