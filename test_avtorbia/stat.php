
<?
function format($tema,$d3,$wess,$w_otv,$s_otv,&$sp_t,&$sp_n,&$sp_w,&$sp_o,&$sp_s) 
         { if($tema<10) $sp_t="  ";
           else if($tema<100) $sp_t=" ";
             else if($tema<1000) $sp_t="";
           if($d3<10) $sp_n="   ";
            else if($d3<100) $sp_n="  ";
               else if($d3<1000) $sp_n=" ";
                 else if($d3<10000) $sp_n="";
                    if($wess<10)  $sp_w=" ";
              else if($wess<100)  $sp_w="";
            if($w_otv<10) $sp_o="    ";
              else if($w_otv<100) $sp_o="   ";
                 else if($w_otv<1000) $sp_o="  ";
                   else if($w_otv<10000) $sp_o=" ";
                     else if($w_otv<100000) $sp_o="";
             if($s_otv<10) $sp_s="    ";
                else if($s_otv<100) $sp_s="   ";
                  else if($s_otv<1000) $sp_s="  ";
                    else if($s_otv<10000) $sp_s=" ";
                       else if($s_otv<100000) $sp_s="";
$pro=(integer)($w_otv/$s_otv*100);
           if($pro<10) $sp_pr="  ";
              else if($pro<100) $sp_pr=" ";
                  else $sp_pr="";
$SSS="  numb=".$sp_n.$d3."        wes=".$sp_w.$wess."          верно_otv=".$sp_o.$w_otv."            число_otv=".$sp_s.$s_otv."       процент=".$sp_pr.$pro."         tema=".$sp_t.$tema."\r\n";
return $SSS;
        }
$drdr="base";
$base=$_POST[$drdr];
$fw=fopen("www.txt","w");
$jh=true;
for( $i=1; $jh; $i++){
$drdr="sk".$i;
$ddd=$_POST[$drdr];
if($ddd!=false)  {
      $d1=(integer)($ddd/100);
      $wess=$ddd-$d1*100;
       $wess=(integer)($wess*100)/100;
      $d2=(integer)($d1/10);
       $otv=$d1-$d2*10;
      $d3=(integer)($d2/1000);
       $tema=$d2-$d3*1000;
       $FFF[]=$tema;
        $k="WWW".$tema.".txt";
       $fwr[$tema]=fopen($k,"r"); 
       if($fwr[$tema]) {  if($gg[$tema]!=1) { $dateb[$tema]=fread($fwr[$tema],200000); $gg[$tema]=1; }}
             else { $fwr[$tema]=fopen($k,"w"); $dateb[$tema]=""; }
        $w_otv=$otv; $s_otv=1; $ss0=format($tema,$d3,$wess,$w_otv,$s_otv,$sp_t,$sp_n,$sp_w,$sp_o,$sp_s) ;
       $ffs="numb=".$sp_n.$d3;
        $pp=strpos($dateb[$tema],$ffs);
            if(!$pp)  {  $dateb[$tema]= $dateb[$tema].$ss0; }
         else {   
                  $pp1=strpos($dateb[$tema],"верно_otv=",$pp)+10;
                  $w_otv=substr($dateb[$tema],$pp1,5);
                  $w_otv+=$otv;
                  $pp2=strpos($dateb[$tema],"число_otv=",$pp1)+10;
                  $s_otv=substr($dateb[$tema],$pp2,5);
                  $s_otv++;
                   $pp3=strpos($dateb[$tema],"numb=",$pp+1);
                  $ss0=format($tema,$d3,$wess,$w_otv,$s_otv,$sp_t,$sp_n,$sp_w,$sp_o,$sp_s) ;
                  if($pp3!=0)
                 $dateb[$tema]=substr($dateb[$tema],0,$pp-2).$ss0.substr($dateb[$tema],$pp3-3,strlen($dateb[$tema])-$pp3+6);
                  else
                $dateb[$tema]=substr($dateb[$tema],0,$pp-2).$ss0;
                //   echo $dateb[$tema]."|||||||         ";
                     }
       fputs($fw,"wess=".$wess." otv=".$otv."  tema=".$tema." numb=".$d3."\r\n");
     }
else
 $jh=false;
                                      }
$LL=strlen($fwr);
for($i=1;$i<=$LL;$i++) {$tema=$FFF[$i-1];fclose($fwr[$tema]);}
for($i=1;$i<=$LL;$i++) {$tema=$FFF[$i-1];
                                 $k="WWW".$tema.".txt";
                                 $fwr[$tema]=fopen($k,"w");
                                 fputs($fwr[$tema],$dateb[$tema]);
                                  fclose($fwr[$tema]);
                                        }
fclose($fw);

?>
<script>
location.href="index.php";
</script>
