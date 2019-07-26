<?php
$connect = mysqli_connect("hswitelsmr.com", "u5234201_hs", "hswitelsmr", "u5234201_papanjul");
$txt = '';
 $tgl=date('Y-m-d');
$q_agn = mysqli_query($connect,"SELECT * FROM sales WHERE STO='AGN' AND TO_CHAR LIKE '$tgl%'");
$r_agn = mysqli_fetch_array($q_agn);

$q_bot = mysqli_query($connect,"SELECT * FROM sales WHERE STO='BOT' AND TO_CHAR LIKE '$tgl%'");
$q_lkt = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LKT' AND TO_CHAR LIKE '$tgl%'");
$q_lmp = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LMP' AND TO_CHAR LIKE '$tgl%'");
$q_lob = mysqli_query($connect,"SELECT * FROM sales WHERE STO='LOB' AND TO_CHAR LIKE '$tgl%'");
$q_mbd = mysqli_query($connect,"SELECT * FROM sales WHERE STO='MBD' AND TO_CHAR LIKE '$tgl%'");
$q_mla = mysqli_query($connect,"SELECT * FROM sales WHERE STO='MLA' AND TO_CHAR LIKE '$tgl%'");
$q_paa = mysqli_query($connect,"SELECT * FROM sales WHERE STO='PAA' AND TO_CHAR LIKE '$tgl%'");
$q_pll = mysqli_query($connect,"SELECT * FROM sales WHERE STO='PLL' AND TO_CHAR LIKE '$tgl%'");
$q_san = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SAN' AND TO_CHAR LIKE '$tgl%'");
$q_sbr = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SBR' AND TO_CHAR LIKE '$tgl%'");
$q_sem = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SEM' AND TO_CHAR LIKE '$tgl%'");
$q_sgk = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SGK' AND TO_CHAR LIKE '$tgl%'");
$q_smr = mysqli_query($connect,"SELECT * FROM sales WHERE STO='SMR' AND TO_CHAR LIKE '$tgl%'");
$r_smr = mysqli_fetch_array($q_smr);
echo $r_smr['TO_CHAR'];
$q_stt = mysqli_query($connect,"SELECT * FROM sales WHERE STO='STT' AND TO_CHAR LIKE '$tgl%'");
$q_tgg = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TGG' AND TO_CHAR LIKE '$tgl%'");
$q_tmd = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TMD' AND TO_CHAR LIKE '$tgl%'");
$q_tsn = mysqli_query($connect,"SELECT * FROM sales WHERE STO='TSN' AND TO_CHAR LIKE '$tgl%'");


$txt .= 'STO|PRAGNOSA|REALISASI|DEV';


//$contents=file_get_contents("https://api.telegram.org/bot875334723:AAFwAwZ_GQuJV8jDsWvlxcZ6WmaZraThtqY/sendMessage?chat_id=-330641532&text=".urlencode($txt)."&parse_mode=html");

?>