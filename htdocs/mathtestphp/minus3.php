<html>
<head>
<title>������k����� </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>������k�����</b></font></p>
  <form action="minus3.php" method="post" name="form1" >

<?
if($m1<1 or $m2<1){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I�ֶ̤��� 1 ��ƪ���k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($m1 < $m2){
    echo "<font color=red>�X�D������~�I�Q��ƻݤj����......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($m1>4 or $m2>4){
    echo "<font color=red>�X�D������~�I���{���u�m�ߨ� 4 ��ƪ���k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{

srand((double)microtime()*1000);          //�{���}�l
for($i=1; $i<=20; $i++){                  //���j�鲣�ͳQ��ƻP���
  $minus1[$i-1] = rand(pow(10,$m1-1),pow(10,$m1)-1);         //�üƲ��ͳQ���   
  $minus2[$i-1] = rand(pow(10,$m2-1),pow(10,$m2)-1);         //�üƲ��ʹ��  

  if($minus1[$i-1] < $minus2[$i-1]){                 //�Y�Q��� < ��ơA�h������m
     $tmp = $minus1[$i-1];
     $minus1[$i-1] = $minus2[$i-1];
     $minus2[$i-1] = $tmp;
  };
};


echo "<table  border=0 width=90%><font size=3 color=black>";    //�X���D
for($j=1; $j<=20; $j++){              //�X���D���j��
  if ($j % 4 ==1){                    //�e���ҩl�u
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>�@�@�@�� ",$j," �D<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$minus1[$j-1],"<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��";
  for($m=abs($m1 - $m2); $m>=0; $m--){             //���j��ɴ�k�䪺�ť�
    echo "&nbsp;&nbsp;";  
  };
  echo $minus2[$j-1],"<br>","�@�@------------------","<br><br><br></td>";
  $ans[$j-1] = $minus1[$j-1] - $minus2[$j-1];       //�p��2�Ӽƪ��t
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //�X���D���j��
echo "</font></table>";



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
