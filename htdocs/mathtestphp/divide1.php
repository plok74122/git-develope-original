<html>
<head>
<title>����k�ߺ����</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
  <p align="center"><font size="4" color=black><b>����k�ߺ����</b></font></p>

<?
if($d1<1){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I�Q���Ƴֶ̤��� 1 ���......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($d1>4){
    echo "<font color=red>�X�D������~�I���{���u�m�ߨ� 4 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{

srand((double)microtime()*1000);          //�{���}�l
for($i=1; $i<=20; $i++){                  //���j�鲣�ͳQ���ƻP����
    $divide1[$i-1] = rand(pow(10,$d1-1),pow(10,$d1)-1);         //�üƲ��ͳQ����
    $divide2[$i-1] = rand(2,9);         //�üƲ��Ͱ���

    if($divide2[$i-1] == 1){
      $divide2[$i-1] = 7; 
    };  
  
  if($divide1[$i-1] < $divide2[$i-1]){                 //�Y�Q���� < ���ơA�h������m
     $tmp = $divide1[$i-1];
     $divide1[$i-1] = $divide2[$i-1];
     $divide2[$i-1] = $tmp;
  }; 
};

for($j=1; $j<=20; $j++){  
  echo "<p align=center><font size=3 color=black>�@�@�@(",$j,") ",$divide1[$j-1]," �� ",$divide2[$j-1]," �� ____________</font></p>";
  $ans[$j-1] = $divide1[$j-1] / $divide2[$j-1];       //�p��2�Ӽƪ���
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
echo "</table>";

};  // end of �X�D���󪺧P�_

?>

</body>
</html>
