<html>
<head>
<title>�������k����� </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>�������k�����</b></font></p>
  <form action="multi3.php" method="post" name="form1" >

<?
if($mm1 < $mm2){                 //�Y�Q���� < ���ơA�h������m
     $tmp = $mm1;
     $mm1 = $mm2;
     $mm2 = $tmp;
};
if($mm1<1 or $mm2<1){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I�ֶ̤��� 1 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($mm1>4 or $mm2>4){
    echo "<font color=red>�X�D������~�I���{���u�m�ߨ� 4 ��ƪ���k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{


srand((double)microtime()*1000);          //�{���}�l
for($i=1; $i<=20; $i++){                  //���j�鲣�ͳQ���ƻP����
  $multi1[$i-1] = rand(pow(10,$mm1-1),pow(10,$mm1)-1);         //�üƲ��ͳQ����   
  $multi2[$i-1] = rand(pow(10,$mm2-1),pow(10,$mm2)-1);         //�üƲ��ͭ���  
  if($multi2[$i-1] == 1){
  	$multi2[$i-1] = 7;
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
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;",$multi1[$j-1],"<br>";
  echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;��";
  for($m=abs($mm1 - $mm2); $m>=0; $m--){             //���j��ɭ����k�䪺�ť�
    echo "&nbsp;&nbsp;";  
  };
  echo $multi2[$j-1],"<br>","�@�@�@--------------","<br><br><br><br></td>";
  $ans[$j-1] = $multi1[$j-1] * $multi2[$j-1];       //�p��2�Ӽƪ��n
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

  

