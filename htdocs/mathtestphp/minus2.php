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
	for($i=1; $i<=40; $i++){                  //���j�鲣�ͳQ��ƻP���
  	$minus1[$i-1] = rand(pow(10,$m1-1),pow(10,$m1)-1);         //�üƲ��ͳQ���   
  	$minus2[$i-1] = rand(pow(10,$m2-1),pow(10,$m2)-1);         //�üƲ��ʹ��  

  	if($minus1[$i-1] < $minus2[$i-1]){                 //�Y�Q��� < ��ơA�h������m
    	$tmp = $minus1[$i-1];
    	$minus1[$i-1] = $minus2[$i-1];
    	$minus2[$i-1] = $tmp;
  	};
	}; // end of for

	echo "<table  align=center border=0 cellpading=0 cellspacing=0 width=75%><font size=3 color=black>";
	for($j=1; $j<=40; $j++){    //���j��X�Ҩ�
		if ($j % 2 == 1){                    //�e���ҩl�u
    	echo "<tr><td height=20><font size=3 color=black>(",$j,") ",$minus1[$j-1]," �� ",$minus2[$j-1]," �� ______________</font></td>";
  	}elseif($j % 2 == 0){
    	echo "<td height=20><font size=3 color=black>(",$j,") ",$minus1[$j-1]," �� ",$minus2[$j-1]," �� ______________</font></td></tr>";
  	};   //end of if

  	$ans[$j-1] = $minus1[$j-1] - $minus2[$j-1];       //�p��2�Ӽƪ��M
	};  //for
	echo "</table>";

 //���j��C�ѵ�
echo "<br><br><br><br><table  border=0 width=90%><font color=black>�ѵ��G</font>";     //���j��C�ѵ�
for($k=1; $k<=40; $k++){ 
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
