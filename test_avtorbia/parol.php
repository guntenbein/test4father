
<?
if($_POST["abc"]==$_POST["abc1"]) {
$fw=fopen("init_global.js","r");
$FFF=fread($fw,40000);
$p=strpos($FFF,"var Server=")+11;
$pp=strpos($FFF,";",$p);
$s=substr($FFF,$p,$pp-$p);
$s=$s=="false"?"true":"false";
$FFF=substr($FFF,0,$p).$s.substr($FFF,$pp,strlen($FFF)-$pp+2);
//echo $FFF;
fclose($fw);
$fw=fopen("init_global.js","w");
fputs($fw,$FFF);
fclose($fw);
                                        }
?>
<script>
location.href="index.php";
</script>
