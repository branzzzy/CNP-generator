<?php
	$sexM=rand(1,2);
	$sexm=rand(5,6);
	$sexul= ((rand(0,1))? $sexM: $sexm);
	echo "sexul";
	var_dump($sexul);
	
	
	$anul=rand(0,99);
	$anul = (($anul<=9)? "0".$anul:$anul);
	echo "anul";
	var_dump($anul);
	
	$luna = rand (1,12);
	$luna1 = (($luna<=9)?"0".$luna:$luna);
	echo "luna:";
	var_dump($luna);
	var_dump($luna1);
	
	$ziua =rand(1,31);
	$ziua1 =(($ziua<=9)?"0".$ziua:$ziua);
	echo "ziua:";
	var_dump($ziua);
	var_dump($ziua1);

	$ultimele6=rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
	echo "ultimele6:";
	var_dump($ultimele6);
	
	$cnp = $sexul . $anul . $luna1 . $ziua1 . $ultimele6;
	echo $cnp; ?> </br> <?php
	
	$culoare = ($sexul==1||$sexul==5?"blue":"red");
	echo "<span style = 'color: $culoare'>$cnp </span>";
	
	#(($sexul===5||$sexul===6)? echo esti barabat : echo "esti femelă"); => echo ($sexul==1||$sexul);