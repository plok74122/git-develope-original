<html>
<head>
<title>�Ҩ��������k�ߺ����</title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <p><font size="4" color=black><b>�Ҩ��������k�ߺ����</b></font></p>
  <form action="divide3.php" method="post" name="form1" >

<?
if($mm1<1){          //�X�D���󪺧P�_
    echo "<font color=red>�X�D������~�I�ֶ̤��� 1 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}elseif($mm1>4){
    echo "<font color=red>�X�D������~�I���{���u�m�ߨ쭼�Ƭ� 4 ��ƪ����k......","<br><br>","�Ы��W�@�����s�X�D......</font>";
}else{

srand((double)microtime()*1000);          //�{���}�l
for($i=1; $i<=40; $i++){                  //���j�鲣�ͳQ���ƻP����
  $multi1[$i-1] = rand(pow(10,$mm1-1),pow(10,$mm1)-1);         //�üƲ��ͳQ����  
  $multi2[$i-1] = rand(2,9);         //�üƲ��ͭ���
 
  if($multi1[$i-1] < $multi2[$i-1]){                 //�Y�Q���� < ���ơA�h������m
     $tmp = $multi1[$i-1];
     $multi1[$i-1] = $multi2[$i-1];
     $multi2[$i-1] = $tmp;
  }; 
};


echo "<table align=center border=0 width=70%><font size=3 color=black>";    //�X���D
for($j=1; $j<=40; $j++){              //�X���D���j��
	if ($j % 2 ==1){                    //�e���ҩl�u
    echo "<tr>";
  };   //end of if

  echo "<td height=18><p align=left><font size=3 color=black> (",$j,") ",$multi1[$j-1]," �� ",$multi2[$j-1]," ��___________</font></td>";
  $ans1[$j-1] = floor($multi1[$j-1] * $multi2[$j-1]);       //�D��

  if($j % 2 == 0){
    echo " </tr>";
  }; 
  
};  //�X���D���j��
echo "</font></table>";



echo "<br><br><table  border=0 width=90%><font color=black>�ѵ��G</font>";     //���j��C�ѵ�
for($k=1; $k<=40; $k++){ 
  if($k % 10 == 1){ 
    echo "<tr>";
  };

  echo "<td><font color=black>(",$k,") ",$ans1[$k-1],"</font></td>";

  if($k % 10 == 0){ 
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
