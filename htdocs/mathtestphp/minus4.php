<html>
<head>
<title>�p�ƴ�k����� </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966" );">
<div align="center">
  <p><font size="4" color=black><b>�p�ƴ�k�����</b></font></p>
  <form action="ans3.php" method="post" name="form1" >

<?
$t1 = $mi1+$mi2;

if($t1>=6){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I���t�γ̦h�u�m�ߨ�4��Ʀr����k(�t�p��)......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{

srand((double)microtime()*1000); 
echo "<table  border=0 width=90%><font size=3 color=black>";
for($i=1; $i<=20; $i++){    //���j�鲣�ͳQ�[�ƻP�[��
  $minus1[$i-1] = (rand(pow(10,$t1-1),pow(10,$t1)-1)) / pow(10,$mi2);         //�üƲ��ͳQ���   
  $minus2[$i-1] = (rand(pow(10,$t1-1),pow(10,$t1)-1)) / pow(10,$mi2);         //�üƲ��ʹ��  

  if($minus1[$i-1] < $minus2[$i-1]){                 //�Y�Q��� < ��ơA�h������m
     $tmp = $minus1[$i-1];
     $minus1[$i-1] = $minus2[$i-1];
     $minus2[$i-1] = $tmp;
  };
};
echo "</font>";

echo "<table  border=0 width=90%><font size=3 color=black>";    //�X���D
for($j=1; $j<=20; $j++){              //�X���D���j��
  if ($j % 4 ==1){                    //�e���ҩl�u
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>(",$j,") ",$minus1[$j-1],"��",$minus2[$j-1],"��";
  echo "<br><br><br><br><br><br><br><br><br></td>";
  $ans[$j-1] = $minus1[$j-1] - $minus2[$j-1];       //�p��2�Ӽƪ��t
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //�X���D���j��
echo "</table>";

echo "<br><br><br><br><table  border=0 width=90%><font color=black>�ѵ��G</font>";     //���j��C�ѵ�
for($k=1; $k<=20; $k++){ 
  if($k % 10 == 1){ 
    echo "<tr>";
  };
  echo "<td><font color=black>(",$k,")</font></td>";
  echo "<td><font color=black>",$ans[$k-1],"</font></td>";

  if($k %10 == 0){ 
    echo "</tr>";
  };
};    
echo "</table>";

};   //�X�D���󪺧P�_�A�ŧR�I
?>

</form>
</div>
</body>
</html>


