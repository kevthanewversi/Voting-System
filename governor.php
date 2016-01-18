<?php
ob_start();

$link = mysql_connect("localhost", "root", "");
mysql_select_db("voting_db", $link);

$gov = 'Aspirant 1';

$result = mysql_query("SELECT governor FROM votes ", $link);
$num_row = mysql_num_rows($result);

$results1 = mysql_query("SELECT governor FROM votes WHERE governor = '$gov'  ", $link);
$num_rows1 = mysql_num_rows($results1);

$num1 = "$num_row ";
$nums1 = "$num_rows1 ";
$div1 = ($nums1/$num1)*100; 
$ron1=round($div1,2);


$gov2 = 'Aspirant 2';

$results2 = mysql_query("SELECT governor FROM votes WHERE governor = '$gov2 '  ", $link);
$num_rows2 = mysql_num_rows($results2);

$num2 = "$num_row ";
$nums2 = "$num_rows2 ";
$div2 = ($nums2/$num1)*100;
$ron2=round($div2,2);


$gov3 = 'Aspirant 3';

$results3 = mysql_query("SELECT governor FROM votes WHERE governor = '$gov3'  ", $link);
$num_rows3 = mysql_num_rows($results3);

$num3 = "$num_row ";
$nums3 = "$num_rows3 ";
$div3 = ($nums3/$num1)*100;
$ron3=round($div3,2);


$gov4 = 'Aspirant 4';

$results4 = mysql_query("SELECT governor FROM votes WHERE governor = '$gov4'  ", $link);
$num_rows4 = mysql_num_rows($results4);

$num4 = "$num_row ";
$nums4 = "$num_rows4 ";
$div4 = ($nums4/$num1)*100;
$ron4=round($div4,2);

$gov5 = 'Aspirant 5';

$results5 = mysql_query("SELECT governor FROM votes WHERE governor = '$gov5'  ", $link);
$num_rows5 = mysql_num_rows($results4);

$num5 = "$num_row ";
$nums5 = "$num_rows5";
$div5 = ($nums5/$num1)*100;
$ron5=round($div5,2);


//echo $ron;




/*<?*/
	# ------- The graph values in the form of associative array
	$values=array(
		"Aspirant 1" => $ron1,
		"Aspirant 2" => $ron2,
		"Aspirant 3" => $ron3,
		"Aspirant 4" => $ron4,
		"Aspirant 5" => $ron5
	);

 
	$img_width=1280;
	$img_height=650; 
	$margins= 50;

 
	# ---- Find the size of graph by substracting the size of borders
	$graph_width=$img_width - $margins * 2;
	$graph_height=$img_height - $margins * 2; 
	$img=imagecreate($img_width,$img_height);

 
	$bar_width=20;
	$total_bars=count($values);
	$gap= ($graph_width- $total_bars * $bar_width ) / ($total_bars +1);

 
	# -------  Define Colors ----------------
	$bar_color=imagecolorallocate($img,0,64,128);
	$background_color=imagecolorallocate($img,240,240,255);
	$border_color=imagecolorallocate($img,200,200,200);
	$line_color=imagecolorallocate($img,220,220,220);
 
	# ------ Create the border around the graph ------

	imagefilledrectangle($img,1,1,$img_width-2,$img_height-2,$border_color);
	imagefilledrectangle($img,$margins,$margins,$img_width-1-$margins,$img_height-1-$margins,$background_color);

 
	# ------- Max value is required to adjust the scale	-------
	$max_value=max($values);
	$ratio= $graph_height/$max_value;

 
	# -------- Create scale and draw horizontal lines  --------
	$horizontal_lines=20;
	$horizontal_gap=$graph_height/$horizontal_lines;

	for($i=1;$i<=$horizontal_lines;$i++){
		$y=$img_height - $margins - $horizontal_gap * $i ;
		imageline($img,$margins,$y,$img_width-$margins,$y,$line_color);
		$v=intval($horizontal_gap * $i /$ratio);
		imagestring($img,0,5,$y-5,$v,$bar_color);

	}
 
 
	# ----------- Draw the bars here ------
	for($i=0;$i< $total_bars; $i++){ 
		# ------ Extract key and value pair from the current pointer position
		list($key,$value)=each($values); 
		$x1= $margins + $gap + $i * ($gap+$bar_width) ;
		$x2= $x1 + $bar_width; 
		$y1=$margins +$graph_height- intval($value * $ratio) ;
		$y2=$img_height-$margins;
		imagestring($img,0,$x1+3,$y1-10,$value,$bar_color);
		imagestring($img,0,$x1+3,$img_height-15,$key,$bar_color);		
		imagefilledrectangle($img,$x1,$y1,$x2,$y2,$bar_color);
	}
	header("Content-type:image/png");

	imagepng($img);



?>