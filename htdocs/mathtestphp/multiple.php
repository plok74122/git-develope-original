<html>
<head>
<title>�̤p�����ƴ���� </title>
<meta http-equiv="Content-Type" content="text/html; charset=big5">
</head>

<body bgcolor="#FFCCCC" text="#FF9966">
<div align="center">
  <form action="num3.php" method="post" name="form1" >

<?
$zhi[0] = 2;
$zhi[1] = 3;
$zhi[2] = 5;
$zhi[3] = 7;
$zhi[4] = 11;
$zhi[5] = 13;
$zhi[6] = 17;
$zhi[7] = 19;
$zhi[8] = 23;
$zhi[9] = 29;
$zhi[10] = 31;
$zhi[11] = 37;
$zhi[12] = 41;
$zhi[13] = 43;
$zhi[14] = 47;

switch ($level) {
  case "basic":	                               //��šG��]�� 2~11�B2�ӽ�]�ơB2�Ӽ�
    srand((double)microtime()*10000);          //�{���}�l
    
		for($i=1; $i<=20; $i++){           //���j�鲣��2�Ӽ�
 			
 			$temp[0] = rand(2,3);      //��1��-����2~3���]��   
 			$temp[1] = rand(2,11);     //��2��-����2~11���]��
 			
 			$seed1 = rand(2,5);        //��3��-5�H�����誺��
 			$seed2 = rand(2,5);
 			for($k=0; $k<=2; $k++){
 				while(($seed1 % $zhi[$k] == 0) AND ($seed2 % $zhi[$k] == 0)){
 					$seed2 = rand(2,5);
 				}
 			}
 			
  		$num1[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1;   	//����2�Ӽ�
  		$num2[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed2;   
  		$ans[$i-1] =  $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1 * $seed2;   
		};
  	break;
//-----------------------------------------------------------------------
  case "medium":                               //���šG��]�� 2~11�B2�ӽ�]�ơB2�Ӽ�
    srand((double)microtime()*10000);          //�{���}�l
    
		for($i=1; $i<=20; $i++){                 //���j�鲣��
 			
 			$temp[0] = rand(2,3);            //��1��-����2~3���]�� 
 			$temp[1] = rand(2,11);           //��2��-����2~11���]��
 			
 			$seed1 = rand(2,5);              //��3��-����5�H�����誺��
 			$seed2 = rand(2,5);
 			$seed3 = rand(2,5);
 			for($k=0; $k<=2; $k++){
 				while(($seed1 % $zhi[$k] == 0 AND $seed2 % $zhi[$k] == 0 AND $seed3 % $zhi[$k] == 0) OR ($seed1==$seed2) OR ($seed2==$seed3) OR ($seed1==$seed3)){
 					$seed2 = rand(2,5);
 					$seed3 = rand(2,5);
 				}
 			}
echo "<br>" , $temp[0] , " " , $temp[1] , " " , $seed1 , " " , $seed2 ; 

 			$num1[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1;   	//�D�̤p�����ƪ�3�Ӽ�
  		$num2[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed2;      
			$num3[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed3; 
			
 			$div = 1;     //�Y $seed1�B$seed2�B$seed3 ����A�h���H1
 			for($j=0; $j<=2; $j++){
 			  if($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0){
 			  	$div = $zhi[$j] * $zhi[$j];
 			  }elseif(($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0) OR ($seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0) OR ($seed1 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0)){
 			  	$div = $zhi[$j];
				}
 			}
 			$ans[$i-1] = ($ans[$i-1] * $seed1 * $seed2 * $seed3) / $div;
		};
  	break;
//-----------------------------------------------------------------------
  case "advanced":								//��]�� 2~29�B2�ӽ�]�ơB3�Ӽ�
    srand((double)microtime()*10000);          //�{���}�l
    
		for($i=1; $i<=20; $i++){                  //���j�鲣��
 			
 			$temp[0] = rand(0, 2);							//��1�ս�]�Ƥ���2~5 
 			$temp[1] = rand(0, 9);							//��2�ս�]�Ƥ���2~29
 			$ans[$i-1] =  $zhi[$temp[0]] * $zhi[$temp[1]];
 			
 			$seed1 = rand(2,5);                //��3�ռƬO5�H������
 			$seed2 = rand(2,5);
 			$seed3 = rand(2,5);
 			while($seed1==$seed2 OR $seed2==$seed3 OR $seed1==$seed3){     //�o3�ռƥ������۵�
 				$seed2 = rand(2,5);
 				$seed3 = rand(2,5);
 			}
 			$num1[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed1;   	//�n�D�̤p�����ƪ�3�Ӽ�
  		$num2[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed2;      
			$num3[$i-1] = $zhi[$temp[0]] * $zhi[$temp[1]] * $seed3; 
 			
 			$div = 1;     //�Y $seed1�B$seed2�B$seed3 ����A�h���H1
 			for($j=0; $j<=2; $j++){
 			  if($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0){
 			  	$div = $zhi[$j] * $zhi[$j];
 			  }elseif(($seed1 % $zhi[$j] ==0 AND $seed2 % $zhi[$j] ==0) OR ($seed2 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0) OR ($seed1 % $zhi[$j] ==0 AND $seed3 % $zhi[$j] ==0)){
 			  	$div = $zhi[$j];
				}
 			}
 			$ans[$i-1] = ($ans[$i-1] * $seed1 * $seed2 * $seed3) / $div;
		};
    break;
}      

echo "<font size=4 color=black><center><b>�D�U�C�U�ƪ��̤p������:</b></center></font><br>";
echo "<table  border=0 width=90%><font size=3 color=black>";    //�X���D
for($j=1; $j<=20; $j++){              //�X���D���j��
  if ($j % 4 ==1){                    //�e����ҩl�u
    echo "<tr><td><p>";
  }else{
    echo "<td><p>";
  };

  echo "<p align=left><font size=3 color=black>(",$j,") ";
  if($level=="basic"){
    echo '&nbsp;&nbsp;&nbsp;', $num1[$j-1],", ", $num2[$j-1]," <br><br><br><br><br><br><br><br><br>";
  }elseif($level=="medium"){
  	echo '&nbsp;&nbsp;&nbsp;',$num1[$j-1],", ", $num2[$j-1],", ", $num3[$j-1]," <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  }elseif($level=="advanced"){
  	echo '&nbsp;&nbsp;&nbsp;',$num1[$j-1],", ", $num2[$j-1],", ", $num3[$j-1]," <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
  }	
  echo "</td></font>";
  
  if($j % 4 == 0){
    echo " </tr>";
  }; 
};  //�X���D���j��
echo "</font></table>";


echo "<table  border=0 width=90%><font color=black>�ѵ��G</font>";     //���j��C�ѵ�
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
?>

</form>
</div>
</body>
</html>