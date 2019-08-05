<?php
exec('cls');

include 'variabel.php';
$connect = mysqli_connect("hswitelsmr.com", "u5234201_hs", "hswitelsmr", "u5234201_papanjul");
$txt = '';


//agn
$q_agn = mysqli_query($connect,"SELECT * FROM sales WHERE STO='AGN' AND TO_CHAR LIKE '$tgl%'");
$q_agn_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='AGN' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While AGN Kemarin (PRAGNOSA)
while ($r_agn_kemarin = mysqli_fetch_array($q_agn_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_agn_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_agn_00_02_kemarin = $j_agn_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_agn_02_04_kemarin = $j_agn_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_agn_04_06_kemarin = $j_agn_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_agn_06_08_kemarin = $j_agn_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_agn_08_10_kemarin = $j_agn_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_agn_10_12_kemarin = $j_agn_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_agn_12_14_kemarin = $j_agn_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_agn_14_16_kemarin = $j_agn_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_agn_16_18_kemarin = $j_agn_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_agn_18_20_kemarin = $j_agn_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_agn_20_22_kemarin = $j_agn_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_agn_22_00_kemarin = $j_agn_22_00_kemarin + 1;
	}
}

//While AGN Hari Ini (REALISASI)

while ($r_agn = mysqli_fetch_array($q_agn)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_agn['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_agn_00_02 = $j_agn_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_agn_02_04 = $j_agn_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_agn_04_06 = $j_agn_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_agn_06_08 = $j_agn_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_agn_08_10 = $j_agn_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_agn_10_12 = $j_agn_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_agn_12_14 = $j_agn_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_agn_14_16 = $j_agn_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_agn_16_18 = $j_agn_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_agn_18_20 = $j_agn_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_agn_20_22 = $j_agn_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_agn_22_00 = $j_agn_22_00 + 1;
	}
}

//bot
$q_bot = mysqli_query($connect,"SELECT * FROM sales WHERE STO='BOT' AND TO_CHAR LIKE '$tgl%'");
$q_bot_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='BOT' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While BOT Kemarin (PRAGNOSA)
while ($r_bot_kemarin = mysqli_fetch_array($q_bot_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_bot_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_bot_00_02_kemarin = $j_bot_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_bot_02_04_kemarin = $j_bot_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_bot_04_06_kemarin = $j_bot_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_bot_06_08_kemarin = $j_bot_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_bot_08_10_kemarin = $j_bot_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_bot_10_12_kemarin = $j_bot_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_bot_12_14_kemarin = $j_bot_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_bot_14_16_kemarin = $j_bot_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_bot_16_18_kemarin = $j_bot_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_bot_18_20_kemarin = $j_bot_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_bot_20_22_kemarin = $j_bot_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_bot_22_00_kemarin = $j_bot_22_00_kemarin + 1;
	}
}

//While BOT Hari Ini (REALISASI)

while ($r_bot = mysqli_fetch_array($q_bot)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_bot['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_bot_00_02 = $j_bot_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_bot_02_04 = $j_bot_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_bot_04_06 = $j_bot_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_bot_06_08 = $j_bot_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_bot_08_10 = $j_bot_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_bot_10_12 = $j_bot_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_bot_12_14 = $j_bot_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_bot_14_16 = $j_bot_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_bot_16_18 = $j_bot_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_bot_18_20 = $j_bot_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_bot_20_22 = $j_bot_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_bot_22_00 = $j_bot_22_00 + 1;
	}
}

//lkt
$q_lkt = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LKT' AND TO_CHAR LIKE '$tgl%'");
$q_lkt_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LKT' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While LKT Kemarin (PRAGNOSA)
while ($r_lkt_kemarin = mysqli_fetch_array($q_lkt_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_lkt_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_lkt_00_02_kemarin = $j_lkt_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_lkt_02_04_kemarin = $j_lkt_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_lkt_04_06_kemarin = $j_lkt_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_lkt_06_08_kemarin = $j_lkt_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_lkt_08_10_kemarin = $j_lkt_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_lkt_10_12_kemarin = $j_lkt_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_lkt_12_14_kemarin = $j_lkt_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_lkt_14_16_kemarin = $j_lkt_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_lkt_16_18_kemarin = $j_lkt_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_lkt_18_20_kemarin = $j_lkt_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_lkt_20_22_kemarin = $j_lkt_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_lkt_22_00_kemarin = $j_lkt_22_00_kemarin + 1;
	}
}

//While LKT Hari Ini (REALISASI)

while ($r_lkt = mysqli_fetch_array($q_lkt)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_lkt['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_lkt_00_02 = $j_lkt_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_lkt_02_04 = $j_lkt_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_lkt_04_06 = $j_lkt_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_lkt_06_08 = $j_lkt_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_lkt_08_10 = $j_lkt_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_lkt_10_12 = $j_lkt_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_lkt_12_14 = $j_lkt_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_lkt_14_16 = $j_lkt_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_lkt_16_18 = $j_lkt_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_lkt_18_20 = $j_lkt_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_lkt_20_22 = $j_lkt_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_lkt_22_00 = $j_lkt_22_00 + 1;
	}
}

//lmp
$q_lmp = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LMP' AND TO_CHAR LIKE '$tgl%'");
$q_lmp_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LMP' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While LMP Kemarin (PRAGNOSA)
while ($r_lmp_kemarin = mysqli_fetch_array($q_lmp_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_lmp_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_lmp_00_02_kemarin = $j_lmp_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_lmp_02_04_kemarin = $j_lmp_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_lmp_04_06_kemarin = $j_lmp_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_lmp_06_08_kemarin = $j_lmp_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_lmp_08_10_kemarin = $j_lmp_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_lmp_10_12_kemarin = $j_lmp_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_lmp_12_14_kemarin = $j_lmp_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_lmp_14_16_kemarin = $j_lmp_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_lmp_16_18_kemarin = $j_lmp_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_lmp_18_20_kemarin = $j_lmp_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_lmp_20_22_kemarin = $j_lmp_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_lmp_22_00_kemarin = $j_lmp_22_00_kemarin + 1;
	}
}

//While LMP Hari Ini (REALISASI)

while ($r_lmp = mysqli_fetch_array($q_lmp)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_lmp['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_lmp_00_02 = $j_lmp_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_lmp_02_04 = $j_lmp_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_lmp_04_06 = $j_lmp_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_lmp_06_08 = $j_lmp_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_lmp_08_10 = $j_lmp_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_lmp_10_12 = $j_lmp_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_lmp_12_14 = $j_lmp_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_lmp_14_16 = $j_lmp_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_lmp_16_18 = $j_lmp_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_lmp_18_20 = $j_lmp_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_lmp_20_22 = $j_lmp_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_lmp_22_00 = $j_lmp_22_00 + 1;
	}
}

//lob
$q_lob = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LOB' AND TO_CHAR LIKE '$tgl%'");
$q_lob_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LOB' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While LOB Kemarin (PRAGNOSA)
while ($r_lob_kemarin = mysqli_fetch_array($q_lob_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_lob_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_lob_00_02_kemarin = $j_lob_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_lob_02_04_kemarin = $j_lob_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_lob_04_06_kemarin = $j_lob_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_lob_06_08_kemarin = $j_lob_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_lob_08_10_kemarin = $j_lob_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_lob_10_12_kemarin = $j_lob_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_lob_12_14_kemarin = $j_lob_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_lob_14_16_kemarin = $j_lob_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_lob_16_18_kemarin = $j_lob_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_lob_18_20_kemarin = $j_lob_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_lob_20_22_kemarin = $j_lob_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_lob_22_00_kemarin = $j_lob_22_00_kemarin + 1;
	}
}

//While LOB Hari Ini (REALISASI)

while ($r_lob = mysqli_fetch_array($q_lob)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_lob['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_lob_00_02 = $j_lob_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_lob_02_04 = $j_lob_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_lob_04_06 = $j_lob_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_lob_06_08 = $j_lob_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_lob_08_10 = $j_lob_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_lob_10_12 = $j_lob_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_lob_12_14 = $j_lob_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_lob_14_16 = $j_lob_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_lob_16_18 = $j_lob_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_lob_18_20 = $j_lob_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_lob_20_22 = $j_lob_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_lob_22_00 = $j_lob_22_00 + 1;
	}
}

//mbd
$q_mbd = mysqli_query($connect,"SELECT * FROM sales WHERE STO='MBD' AND TO_CHAR LIKE '$tgl%'");
$q_mbd_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='MBD' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While MBD Kemarin (PRAGNOSA)
while ($r_mbd_kemarin = mysqli_fetch_array($q_mbd_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_mbd_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_mbd_00_02_kemarin = $j_mbd_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_mbd_02_04_kemarin = $j_mbd_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_mbd_04_06_kemarin = $j_mbd_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_mbd_06_08_kemarin = $j_mbd_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_mbd_08_10_kemarin = $j_mbd_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_mbd_10_12_kemarin = $j_mbd_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_mbd_12_14_kemarin = $j_mbd_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_mbd_14_16_kemarin = $j_mbd_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_mbd_16_18_kemarin = $j_mbd_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_mbd_18_20_kemarin = $j_mbd_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_mbd_20_22_kemarin = $j_mbd_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_mbd_22_00_kemarin = $j_mbd_22_00_kemarin + 1;
	}
}

//While MBD Hari Ini (REALISASI)

while ($r_mbd = mysqli_fetch_array($q_mbd)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_mbd['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_mbd_00_02 = $j_mbd_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_mbd_02_04 = $j_mbd_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_mbd_04_06 = $j_mbd_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_mbd_06_08 = $j_mbd_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_mbd_08_10 = $j_mbd_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_mbd_10_12 = $j_mbd_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_mbd_12_14 = $j_mbd_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_mbd_14_16 = $j_mbd_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_mbd_16_18 = $j_mbd_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_mbd_18_20 = $j_mbd_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_mbd_20_22 = $j_mbd_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_mbd_22_00 = $j_mbd_22_00 + 1;
	}
}

//mla
$q_mla = mysqli_query($connect,"SELECT * FROM sales WHERE STO='MLA' AND TO_CHAR LIKE '$tgl%'");
$q_mla_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='MLA' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While MLA Kemarin (PRAGNOSA)
while ($r_mla_kemarin = mysqli_fetch_array($q_mla_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_mla_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_mla_00_02_kemarin = $j_mla_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_mla_02_04_kemarin = $j_mla_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_mla_04_06_kemarin = $j_mla_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_mla_06_08_kemarin = $j_mla_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_mla_08_10_kemarin = $j_mla_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_mla_10_12_kemarin = $j_mla_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_mla_12_14_kemarin = $j_mla_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_mla_14_16_kemarin = $j_mla_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_mla_16_18_kemarin = $j_mla_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_mla_18_20_kemarin = $j_mla_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_mla_20_22_kemarin = $j_mla_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_mla_22_00_kemarin = $j_mla_22_00_kemarin + 1;
	}
}

//While MLA Hari Ini (REALISASI)

while ($r_mla = mysqli_fetch_array($q_mla)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_mla['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_mla_00_02 = $j_mla_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_mla_02_04 = $j_mla_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_mla_04_06 = $j_mla_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_mla_06_08 = $j_mla_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_mla_08_10 = $j_mla_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_mla_10_12 = $j_mla_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_mla_12_14 = $j_mla_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_mla_14_16 = $j_mla_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_mla_16_18 = $j_mla_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_mla_18_20 = $j_mla_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_mla_20_22 = $j_mla_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_mla_22_00 = $j_mla_22_00 + 1;
	}
}

//paa
$q_paa = mysqli_query($connect,"SELECT * FROM sales WHERE STO='PAA' AND TO_CHAR LIKE '$tgl%'");
$q_paa_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='PAA' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While PAA Kemarin (PRAGNOSA)
while ($r_paa_kemarin = mysqli_fetch_array($q_paa_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_paa_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_paa_00_02_kemarin = $j_paa_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_paa_02_04_kemarin = $j_paa_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_paa_04_06_kemarin = $j_paa_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_paa_06_08_kemarin = $j_paa_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_paa_08_10_kemarin = $j_paa_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_paa_10_12_kemarin = $j_paa_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_paa_12_14_kemarin = $j_paa_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_paa_14_16_kemarin = $j_paa_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_paa_16_18_kemarin = $j_paa_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_paa_18_20_kemarin = $j_paa_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_paa_20_22_kemarin = $j_paa_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_paa_22_00_kemarin = $j_paa_22_00_kemarin + 1;
	}
}

//While PAA Hari Ini (REALISASI)

while ($r_paa = mysqli_fetch_array($q_paa)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_paa['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_paa_00_02 = $j_paa_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_paa_02_04 = $j_paa_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_paa_04_06 = $j_paa_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_paa_06_08 = $j_paa_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_paa_08_10 = $j_paa_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_paa_10_12 = $j_paa_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_paa_12_14 = $j_paa_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_paa_14_16 = $j_paa_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_paa_16_18 = $j_paa_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_paa_18_20 = $j_paa_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_paa_20_22 = $j_paa_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_paa_22_00 = $j_paa_22_00 + 1;
	}
}

//pll
$q_pll = mysqli_query($connect,"SELECT * FROM sales WHERE STO='PLL' AND TO_CHAR LIKE '$tgl%'");
$q_pll_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='PLL' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While PLL Kemarin (PRAGNOSA)
while ($r_pll_kemarin = mysqli_fetch_array($q_pll_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_pll_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_pll_00_02_kemarin = $j_pll_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_pll_02_04_kemarin = $j_pll_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_pll_04_06_kemarin = $j_pll_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_pll_06_08_kemarin = $j_pll_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_pll_08_10_kemarin = $j_pll_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_pll_10_12_kemarin = $j_pll_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_pll_12_14_kemarin = $j_pll_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_pll_14_16_kemarin = $j_pll_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_pll_16_18_kemarin = $j_pll_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_pll_18_20_kemarin = $j_pll_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_pll_20_22_kemarin = $j_pll_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_pll_22_00_kemarin = $j_pll_22_00_kemarin + 1;
	}
}

//While PLL Hari Ini (REALISASI)

while ($r_pll = mysqli_fetch_array($q_pll)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_pll['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_pll_00_02 = $j_pll_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_pll_02_04 = $j_pll_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_pll_04_06 = $j_pll_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_pll_06_08 = $j_pll_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_pll_08_10 = $j_pll_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_pll_10_12 = $j_pll_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_pll_12_14 = $j_pll_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_pll_14_16 = $j_pll_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_pll_16_18 = $j_pll_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_pll_18_20 = $j_pll_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_pll_20_22 = $j_pll_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_pll_22_00 = $j_pll_22_00 + 1;
	}
}

//san
$q_san = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SAN' AND TO_CHAR LIKE '$tgl%'");
$q_san_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SAN' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While SAN Kemarin (PRAGNOSA)
while ($r_san_kemarin = mysqli_fetch_array($q_san_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_san_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_san_00_02_kemarin = $j_san_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_san_02_04_kemarin = $j_san_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_san_04_06_kemarin = $j_san_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_san_06_08_kemarin = $j_san_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_san_08_10_kemarin = $j_san_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_san_10_12_kemarin = $j_san_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_san_12_14_kemarin = $j_san_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_san_14_16_kemarin = $j_san_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_san_16_18_kemarin = $j_san_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_san_18_20_kemarin = $j_san_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_san_20_22_kemarin = $j_san_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_san_22_00_kemarin = $j_san_22_00_kemarin + 1;
	}
}

//While SAN Hari Ini (REALISASI)

while ($r_san = mysqli_fetch_array($q_san)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_san['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_san_00_02 = $j_san_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_san_02_04 = $j_san_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_san_04_06 = $j_san_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_san_06_08 = $j_san_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_san_08_10 = $j_san_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_san_10_12 = $j_san_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_san_12_14 = $j_san_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_san_14_16 = $j_san_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_san_16_18 = $j_san_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_san_18_20 = $j_san_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_san_20_22 = $j_san_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_san_22_00 = $j_san_22_00 + 1;
	}
}

//sbr
$q_sbr = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SBR' AND TO_CHAR LIKE '$tgl%'");
$q_sbr_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SBR' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While SBR Kemarin (PRAGNOSA)
while ($r_sbr_kemarin = mysqli_fetch_array($q_sbr_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_sbr_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_sbr_00_02_kemarin = $j_sbr_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_sbr_02_04_kemarin = $j_sbr_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_sbr_04_06_kemarin = $j_sbr_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_sbr_06_08_kemarin = $j_sbr_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_sbr_08_10_kemarin = $j_sbr_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_sbr_10_12_kemarin = $j_sbr_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_sbr_12_14_kemarin = $j_sbr_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_sbr_14_16_kemarin = $j_sbr_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_sbr_16_18_kemarin = $j_sbr_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_sbr_18_20_kemarin = $j_sbr_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_sbr_20_22_kemarin = $j_sbr_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_sbr_22_00_kemarin = $j_sbr_22_00_kemarin + 1;
	}
}

//While SBR Hari Ini (REALISASI)

while ($r_sbr = mysqli_fetch_array($q_sbr)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_sbr['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_sbr_00_02 = $j_sbr_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_sbr_02_04 = $j_sbr_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_sbr_04_06 = $j_sbr_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_sbr_06_08 = $j_sbr_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_sbr_08_10 = $j_sbr_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_sbr_10_12 = $j_sbr_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_sbr_12_14 = $j_sbr_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_sbr_14_16 = $j_sbr_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_sbr_16_18 = $j_sbr_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_sbr_18_20 = $j_sbr_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_sbr_20_22 = $j_sbr_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_sbr_22_00 = $j_sbr_22_00 + 1;
	}
}

//sem
$q_sem = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SEM' AND TO_CHAR LIKE '$tgl%'");
$q_sem_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SEM' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While SEM Kemarin (PRAGNOSA)
while ($r_sem_kemarin = mysqli_fetch_array($q_sem_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_sem_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_sem_00_02_kemarin = $j_sem_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_sem_02_04_kemarin = $j_sem_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_sem_04_06_kemarin = $j_sem_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_sem_06_08_kemarin = $j_sem_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_sem_08_10_kemarin = $j_sem_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_sem_10_12_kemarin = $j_sem_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_sem_12_14_kemarin = $j_sem_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_sem_14_16_kemarin = $j_sem_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_sem_16_18_kemarin = $j_sem_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_sem_18_20_kemarin = $j_sem_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_sem_20_22_kemarin = $j_sem_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_sem_22_00_kemarin = $j_sem_22_00_kemarin + 1;
	}
}

//While SEM Hari Ini (REALISASI)

while ($r_sem = mysqli_fetch_array($q_sem)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_sem['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_sem_00_02 = $j_sem_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_sem_02_04 = $j_sem_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_sem_04_06 = $j_sem_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_sem_06_08 = $j_sem_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_sem_08_10 = $j_sem_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_sem_10_12 = $j_sem_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_sem_12_14 = $j_sem_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_sem_14_16 = $j_sem_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_sem_16_18 = $j_sem_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_sem_18_20 = $j_sem_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_sem_20_22 = $j_sem_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_sem_22_00 = $j_sem_22_00 + 1;
	}
}

//sgk
$q_sgk = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SGK' AND TO_CHAR LIKE '$tgl%'");
$q_sgk_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SGK' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While SGK Kemarin (PRAGNOSA)
while ($r_sgk_kemarin = mysqli_fetch_array($q_sgk_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_sgk_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_sgk_00_02_kemarin = $j_sgk_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_sgk_02_04_kemarin = $j_sgk_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_sgk_04_06_kemarin = $j_sgk_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_sgk_06_08_kemarin = $j_sgk_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_sgk_08_10_kemarin = $j_sgk_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_sgk_10_12_kemarin = $j_sgk_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_sgk_12_14_kemarin = $j_sgk_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_sgk_14_16_kemarin = $j_sgk_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_sgk_16_18_kemarin = $j_sgk_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_sgk_18_20_kemarin = $j_sgk_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_sgk_20_22_kemarin = $j_sgk_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_sgk_22_00_kemarin = $j_sgk_22_00_kemarin + 1;
	}
}

//While SGK Hari Ini (REALISASI)
while ($r_sgk = mysqli_fetch_array($q_sgk)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_sgk['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_sgk_00_02 = $j_sgk_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_sgk_02_04 = $j_sgk_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_sgk_04_06 = $j_sgk_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_sgk_06_08 = $j_sgk_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_sgk_08_10 = $j_sgk_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_sgk_10_12 = $j_sgk_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_sgk_12_14 = $j_sgk_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_sgk_14_16 = $j_sgk_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_sgk_16_18 = $j_sgk_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_sgk_18_20 = $j_sgk_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_sgk_20_22 = $j_sgk_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_sgk_22_00 = $j_sgk_22_00 + 1;
	}
}


//smr
$q_smr = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SMR' AND TO_CHAR LIKE '$tgl%'");
$q_smr_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SMR' AND TO_CHAR LIKE '$tgl_kemarin%'");
//echo chr(10) .mysqli_num_rows($q_smr_kemarin).chr(10);

//While SMR Kemarin (PRAGNOSA)
while ($r_smr_kemarin = mysqli_fetch_array($q_smr_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_smr_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_smr_00_02_kemarin = $j_smr_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_smr_02_04_kemarin = $j_smr_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_smr_04_06_kemarin = $j_smr_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_smr_06_08_kemarin = $j_smr_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_smr_08_10_kemarin = $j_smr_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_smr_10_12_kemarin = $j_smr_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_smr_12_14_kemarin = $j_smr_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_smr_14_16_kemarin = $j_smr_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_smr_16_18_kemarin = $j_smr_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_smr_18_20_kemarin = $j_smr_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_smr_20_22_kemarin = $j_smr_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_smr_22_00_kemarin = $j_smr_22_00_kemarin + 1;
	}
}

//While SMR Hari Ini (REALISASI)
while ($r_smr = mysqli_fetch_array($q_smr)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_smr['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_smr_00_02 = $j_smr_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_smr_02_04 = $j_smr_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_smr_04_06 = $j_smr_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_smr_06_08 = $j_smr_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_smr_08_10 = $j_smr_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_smr_10_12 = $j_smr_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_smr_12_14 = $j_smr_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_smr_14_16 = $j_smr_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_smr_16_18 = $j_smr_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_smr_18_20 = $j_smr_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_smr_20_22 = $j_smr_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_smr_22_00 = $j_smr_22_00 + 1;
	}
}

//stt
$q_stt = mysqli_query($connect,"SELECT * FROM sales WHERE STO='STT' AND TO_CHAR LIKE '$tgl%'");
$q_stt_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='STT' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While STT Kemarin (PRAGNOSA)
while ($r_stt_kemarin = mysqli_fetch_array($q_stt_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_stt_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_stt_00_02_kemarin = $j_stt_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_stt_02_04_kemarin = $j_stt_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_stt_04_06_kemarin = $j_stt_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_stt_06_08_kemarin = $j_stt_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_stt_08_10_kemarin = $j_stt_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_stt_10_12_kemarin = $j_stt_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_stt_12_14_kemarin = $j_stt_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_stt_14_16_kemarin = $j_stt_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_stt_16_18_kemarin = $j_stt_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_stt_18_20_kemarin = $j_stt_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_stt_20_22_kemarin = $j_stt_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_stt_22_00_kemarin = $j_stt_22_00_kemarin + 1;
	}
}

//While STT Hari Ini (REALISASI)
while ($r_stt = mysqli_fetch_array($q_stt)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_stt['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_stt_00_02 = $j_stt_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_stt_02_04 = $j_stt_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_stt_04_06 = $j_stt_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_stt_06_08 = $j_stt_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_stt_08_10 = $j_stt_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_stt_10_12 = $j_stt_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_stt_12_14 = $j_stt_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_stt_14_16 = $j_stt_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_stt_16_18 = $j_stt_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_stt_18_20 = $j_stt_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_stt_20_22 = $j_stt_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_stt_22_00 = $j_stt_22_00 + 1;
	}
}

//tgg
$q_tgg = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TGG' AND TO_CHAR LIKE '$tgl%'");
$q_tgg_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TGG' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While TGG Kemarin (PRAGNOSA)
while ($r_tgg_kemarin = mysqli_fetch_array($q_tgg_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_tgg_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_tgg_00_02_kemarin = $j_tgg_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_tgg_02_04_kemarin = $j_tgg_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_tgg_04_06_kemarin = $j_tgg_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_tgg_06_08_kemarin = $j_tgg_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_tgg_08_10_kemarin = $j_tgg_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_tgg_10_12_kemarin = $j_tgg_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_tgg_12_14_kemarin = $j_tgg_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_tgg_14_16_kemarin = $j_tgg_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_tgg_16_18_kemarin = $j_tgg_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_tgg_18_20_kemarin = $j_tgg_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_tgg_20_22_kemarin = $j_tgg_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_tgg_22_00_kemarin = $j_tgg_22_00_kemarin + 1;
	}
}

//While TGG Hari Ini (REALISASI)
while ($r_tgg = mysqli_fetch_array($q_tgg)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_tgg['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_tgg_00_02 = $j_tgg_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_tgg_02_04 = $j_tgg_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_tgg_04_06 = $j_tgg_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_tgg_06_08 = $j_tgg_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_tgg_08_10 = $j_tgg_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_tgg_10_12 = $j_tgg_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_tgg_12_14 = $j_tgg_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_tgg_14_16 = $j_tgg_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_tgg_16_18 = $j_tgg_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_tgg_18_20 = $j_tgg_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_tgg_20_22 = $j_tgg_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_tgg_22_00 = $j_tgg_22_00 + 1;
	}
}

//tmd
$q_tmd = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TMD' AND TO_CHAR LIKE '$tgl%'");
$q_tmd_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TMD' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While TMD Kemarin (PRAGNOSA)
while ($r_tmd_kemarin = mysqli_fetch_array($q_tmd_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_tmd_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_tmd_00_02_kemarin = $j_tmd_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_tmd_02_04_kemarin = $j_tmd_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_tmd_04_06_kemarin = $j_tmd_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_tmd_06_08_kemarin = $j_tmd_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_tmd_08_10_kemarin = $j_tmd_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_tmd_10_12_kemarin = $j_tmd_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_tmd_12_14_kemarin = $j_tmd_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_tmd_14_16_kemarin = $j_tmd_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_tmd_16_18_kemarin = $j_tmd_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_tmd_18_20_kemarin = $j_tmd_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_tmd_20_22_kemarin = $j_tmd_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_tmd_22_00_kemarin = $j_tmd_22_00_kemarin + 1;
	}
}

//While TMD Hari Ini (REALISASI)
while ($r_tmd = mysqli_fetch_array($q_tmd)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_tmd['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_tmd_00_02 = $j_tmd_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_tmd_02_04 = $j_tmd_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_tmd_04_06 = $j_tmd_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_tmd_06_08 = $j_tmd_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_tmd_08_10 = $j_tmd_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_tmd_10_12 = $j_tmd_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_tmd_12_14 = $j_tmd_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_tmd_14_16 = $j_tmd_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_tmd_16_18 = $j_tmd_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_tmd_18_20 = $j_tmd_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_tmd_20_22 = $j_tmd_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_tmd_22_00 = $j_tmd_22_00 + 1;
	}
}

//tsn
$q_tsn = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TSN' AND TO_CHAR LIKE '$tgl%'");
$q_tsn_kemarin = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TSN' AND TO_CHAR LIKE '$tgl_kemarin%'");
//While TSN Kemarin (PRAGNOSA)
while ($r_tsn_kemarin = mysqli_fetch_array($q_tsn_kemarin)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_tsn_kemarin['TO_CHAR']));

//00 - 02
	if($time >= $start00_kemarin && $time <= $end02_kemarin){
		$j_tsn_00_02_kemarin = $j_tsn_00_02_kemarin + 1;
	} 
//02 - 04
	else if($time >= $start02_kemarin && $time <= $end04_kemarin)	{
		$j_tsn_02_04_kemarin = $j_tsn_02_04_kemarin + 1;	
	} 
//04 - 06
	else if($time >= $start04_kemarin && $time <= $end06_kemarin){
		$j_tsn_04_06_kemarin = $j_tsn_04_06_kemarin + 1;
	} 
//06 - 08
	else if($time >= $start06_kemarin && $time <= $end08_kemarin){
		$j_tsn_06_08_kemarin = $j_tsn_06_08_kemarin + 1;
	} 
//08 - 10
	else if($time >= $start08_kemarin && $time <= $end10_kemarin){
		$j_tsn_08_10_kemarin = $j_tsn_08_10_kemarin + 1;
	} 
//10 - 12
	else if($time >= $start10_kemarin && $time <= $end12_kemarin){
		$j_tsn_10_12_kemarin = $j_tsn_10_12_kemarin + 1;
	} 
//12 - 14
	else if($time >= $start12_kemarin && $time <= $end14_kemarin){
		$j_tsn_12_14_kemarin = $j_tsn_12_14_kemarin + 1;
	} 
//14 - 16
	else if($time >= $start14_kemarin && $time <= $end16_kemarin){
		$j_tsn_14_16_kemarin = $j_tsn_14_16_kemarin + 1;
	} 
//16 - 18
	else if($time >= $start16_kemarin && $time <= $end18_kemarin){
		$j_tsn_16_18_kemarin = $j_tsn_16_18_kemarin + 1;
	} 
//18 - 20
	else if($time >= $start18_kemarin && $time <= $end20_kemarin){
		$j_tsn_18_20_kemarin = $j_tsn_18_20_kemarin + 1;
	} 
//20 - 22
	else if($time >= $start20_kemarin && $time <= $end22_kemarin){
		$j_tsn_20_22_kemarin = $j_tsn_20_22_kemarin + 1;
	} 
//22 - 24
	else if($time >= $start22_kemarin && $time <= $end00_kemarin){
		$j_tsn_22_00_kemarin = $j_tsn_22_00_kemarin + 1;
	}
}

//While TSN Hari Ini (REALISASI)
while ($r_tsn = mysqli_fetch_array($q_tsn)) {
	# code...
	$time= date('Y-m-d H:i:s', strtotime($r_tsn['TO_CHAR']));
//00 - 02
	if($time >= $start00 && $time <= $end02){
		$j_tsn_00_02 = $j_tsn_00_02 + 1;
	} 
//02 - 04
	else if($time >= $start02 && $time <= $end04)	{
		$j_tsn_02_04 = $j_tsn_02_04 + 1;	
	} 
//04 - 06
	else if($time >= $start04 && $time <= $end06){
		$j_tsn_04_06 = $j_tsn_04_06 + 1;
	} 
//06 - 08
	else if($time >= $start06 && $time <= $end08){
		$j_tsn_06_08 = $j_tsn_06_08 + 1;
	} 
//08 - 10
	else if($time >= $start08 && $time <= $end10){
		$j_tsn_08_10 = $j_tsn_08_10 + 1;
	} 
//10 - 12
	else if($time >= $start10 && $time <= $end12){
		$j_tsn_10_12 = $j_tsn_10_12 + 1;
	} 
//12 - 14
	else if($time >= $start12 && $time <= $end14){
		$j_tsn_12_14 = $j_tsn_12_14 + 1;
	} 
//14 - 16
	else if($time >= $start14 && $time <= $end16){
		$j_tsn_14_16 = $j_tsn_14_16 + 1;
	} 
//16 - 18
	else if($time >= $start16 && $time <= $end18){
		$j_tsn_16_18 = $j_tsn_16_18 + 1;
	} 
//18 - 20
	else if($time >= $start18 && $time <= $end20){
		$j_tsn_18_20 = $j_tsn_18_20 + 1;
	} 
//20 - 22
	else if($time >= $start20 && $time <= $end22){
		$j_tsn_20_22 = $j_tsn_20_22 + 1;
	} 
//22 - 24
	else if($time >= $start22 && $time <= $end00){
		$j_tsn_22_00 = $j_tsn_22_00 + 1;
	}
}

//menampilkan data jam kemarin
echo "00/02 | ";
echo $j_tsn_00_02_kemarin, "\n";
echo "02/04 | ";
echo $j_tsn_02_04_kemarin, "\n";
echo "04/06 | ";
echo $j_tsn_04_06_kemarin, "\n";
echo "06/08 | ";
echo $j_tsn_06_08_kemarin, "\n";
echo "08/10 | ";
echo $j_tsn_08_10_kemarin, "\n";
echo "10/12 | ";
echo $j_tsn_10_12_kemarin, "\n";
echo "12/14 | ";
echo $j_tsn_12_14_kemarin, "\n";
echo "14/16 | ";
echo $j_tsn_14_16_kemarin, "\n";
echo "16/18 | ";
echo $j_tsn_16_18_kemarin, "\n";
echo "18/20 | ";
echo $j_tsn_18_20_kemarin, "\n";
echo "20/22 | ";
echo $j_tsn_20_22_kemarin, "\n";
echo "22/00 | ";
echo $j_tsn_22_00_kemarin, "\n".chr(10);


//tampilan text board telegram papanjul ^_^


$txt .= '12:00-14:00'.chr(10);
$txt .= '```'.chr(10);
$txt .= 'STO|PRAGNOSA|REALISASI|DEV'.chr(10);
$txt .= '--------------------------'.chr(10);
$txt .= ' reza gamers idaman'.chr(10);

$txt .= 'AGN|       '.$j_agn_12_14_kemarin.'|		 '.$j_agn_12_14.'|  '.($j_agn_12_14_kemarin-$j_agn_12_14).chr(10);
$txt .= 'BOT|       '.$j_bot_12_14_kemarin.'|        '.$j_bot_12_14.'|  '.($j_bot_12_14_kemarin-$j_bot_12_14).chr(10);
$txt .= 'LKT|       '.$j_lkt_12_14_kemarin.'|        '.$j_lkt_12_14.'|  '.($j_lkt_12_14_kemarin-$j_lkt_12_14).chr(10);
$txt .= 'LMP|       '.$j_lmp_12_14_kemarin.'|        '.$j_lmp_12_14.'|  '.($j_lmp_12_14_kemarin-$j_lmp_12_14).chr(10);
$txt .= 'LOB|       '.$j_lob_12_14_kemarin.'|        '.$j_lob_12_14.'|  '.($j_lob_12_14_kemarin-$j_lob_12_14).chr(10);
$txt .= 'MBD|       '.$j_mbd_12_14_kemarin.'|        '.$j_mbd_12_14.'|  '.($j_mbd_12_14_kemarin-$j_mbd_12_14).chr(10);
$txt .= 'MLA|       '.$j_mla_12_14_kemarin.'|        '.$j_mla_12_14.'|  '.($j_mla_12_14_kemarin-$j_mla_12_14).chr(10);
$txt .= 'PAA|       '.$j_paa_12_14_kemarin.'|        '.$j_paa_12_14.'|  '.($j_paa_12_14_kemarin-$j_paa_12_14).chr(10);
$txt .= 'PLL|       '.$j_pll_12_14_kemarin.'|        '.$j_pll_12_14.'|  '.($j_pll_12_14_kemarin-$j_pll_12_14).chr(10);
$txt .= 'SAN|       '.$j_san_12_14_kemarin.'|        '.$j_san_12_14.'|  '.($j_san_12_14_kemarin-$j_san_12_14).chr(10);
$txt .= 'SBR|       '.$j_sbr_12_14_kemarin.'|        '.$j_sbr_12_14.'|  '.($j_sbr_12_14_kemarin-$j_sbr_12_14).chr(10);
$txt .= 'SEM|       '.$j_sem_12_14_kemarin.'|        '.$j_sem_12_14.'|  '.($j_sem_12_14_kemarin-$j_sem_12_14).chr(10);
$txt .= 'SGK|       '.$j_sgk_12_14_kemarin.'|        '.$j_sgk_12_14.'|  '.($j_sgk_12_14_kemarin-$j_sgk_12_14).chr(10);
$txt .= 'SMR|       '.$j_smr_12_14_kemarin.'|        '.$j_smr_12_14.'|  '.($j_smr_12_14_kemarin-$j_smr_12_14).chr(10);
$txt .= 'STT|       '.$j_stt_12_14_kemarin.'|        '.$j_stt_12_14.'|  '.($j_stt_12_14_kemarin-$j_stt_12_14).chr(10);
$txt .= 'TGG|       '.$j_tgg_12_14_kemarin.'|        '.$j_tgg_12_14.'|  '.($j_tgg_12_14_kemarin-$j_tgg_12_14).chr(10);
$txt .= 'TMD|       '.$j_tmd_12_14_kemarin.'|        '.$j_tmd_12_14.'|  '.($j_tmd_12_14_kemarin-$j_tmd_12_14).chr(10);
$txt .= 'TSN|       '.$j_tsn_12_14_kemarin.'|        '.$j_tsn_12_14.'|  '.($j_tsn_12_14_kemarin-$j_tsn_12_14).chr(10);
$txt  .= '

```';
$contents=file_get_contents("https://api.telegram.org/bot875334723:AAFwAwZ_GQuJV8jDsWvlxcZ6WmaZraThtqY/sendMessage?chat_id=-330641532&text=".urlencode($txt)."&parse_mode=markdown");

?>