<html>
<head>
<title>�㰣���������k�����</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>�㰣���������k�����</b></font></p>
  <form action="divide3.php" method="post" name="form1" >

<?
if($d1<1 or $d2<1){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I�ֶ̤��� 1 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($d1>4 or $d2>4){
    echo "<font color=red>�X�D������~�I���{���u�m�ߨ� 4 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($d1 < $d2){
    echo "<font color=red>�X�D������~�I�Q���ƶ��j�󰣼�......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{

srand((double)microtime()*1000);          //�{���}�l
for($i=1; $i<=20; $i++){                  //���j�鲣�ͳQ���ƻP����
  do{                                                   
    $divide1[$i-1] = rand(pow(10,$d1-1),pow(10,$d1)-1);         //�üƲ��ͳQ����  
    $divide2[$i-1] = rand(pow(10,$d2-1),pow(10,$d2)-1);         //�üƲ��Ͱ���
    if($divide2[$i-1] == 1){
      $divide2[$i-1] = 7; 
    };  
  }while($divide1[$i-1] % $divide2[$i-1] != 0);
  
  if($divide1[$i-1] < $divide2[$i-1]){                 //�Y�Q���� < ���ơA�h������m
     $tmp = $divide1[$i-1];
     $divide1[$i-1] = $divide2[$i-1];
     $divide2[$i-1] = $tmp;
  }; 
};



echo "<table  border=0 width=90%><font size=3 color=black>";    //�X���D
for($j=1; $j<=20; $j++){              //�X���D���j��
  if ($j % 4 ==1){                    //�e���ҩl�u
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>�� ",$j," �D<br>";
  for($d=$d2; $d>=0; $d--){             //���j�鲣�Ͱ����u�e���ť�
    echo "&nbsp;&nbsp;";  
  };
  echo "________<br>";
  echo "&nbsp;",$divide2[$j-1],"&nbsp;)&nbsp;",$divide1[$j-1],"<br><br><br><br><br><br><br></td>";
  $ans1[$j-1] = $divide1[$j-1] / $divide2[$j-1];       //�D��
  $ans2[$j-1] = $divide1[$j-1] % $divide2[$j-1];       //�D�l��
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
  echo "<td><font color=black>",$ans1[$k-1],"</font></td>";

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
