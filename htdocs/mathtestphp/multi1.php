<html>
<head>
<title>�������k����� </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
  <p align="center"><font size="4" color=black><b>�������k�����</b></font></p>

<?
if($mm1 < $mm3){                 //�Y�Q���� < ���ơA�h������m
     $tmp = $mm1;
     $mm1 = $mm3;
     $mm3 = $tmp;
};
if($mm1<1 or $mm3<1){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I�ֶ̤��� 1 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($mm1>4 or $mm3>2){
    echo "<font color=red>�X�D������~�I���{���u�m�ߨ�Q���� 4 ��ơB���� 2 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{


srand((double)microtime()*1000);          //�{���}�l
for($i=1; $i<=20; $i++){                  //���j�鲣�ͳQ���ƻP����
  $multi1[$i-1] = (rand(pow(10,$mm1-1),pow(10,$mm1)-1)) / pow(10,$mm2);         //�üƲ��ͳQ����   
  $multi2[$i-1] = (rand(pow(10,$mm3-1),pow(10,$mm3)-1)) / pow(10,$mm4);         //�üƲ��ͭ���  
};



echo "<font size=3 color=black>";    //�X���D
for($j=1; $j<=20; $j++){              //�X���D���j��
  echo "<p align=center><font size=3 color=black>(",$j,") ",$multi1[$j-1]," �� ",$multi2[$j-1]," �� ____________</p></font>"; 
  $ans[$j-1] = $multi1[$j-1] * $multi2[$j-1];       //�p��2�Ӽƪ��n
};  //�X���D���j��


echo "<br><br><table  border=0 width=90%><font color=black>�ѵ��G</font>";     //���j��C�ѵ�
for($k=1; $k<=20; $k++){ 
  if($k % 4 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>",$k,".</font></td>";
  echo "<td><font color=black>",$ans[$k-1],"</font></td>";

  if($k %4 == 0){ 
    echo "</tr>";
  };
};    


};   //�X�D���󪺧P�_�A�ŧR�I
?>

</body>
</html>

  

