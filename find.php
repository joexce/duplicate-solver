<?php
$x=array(1,2,3,3); //data duplikat
$find=array(1,3,2); //data asli
$temp=array();
$n=0;
$y=0;
$found=0;
$count=0;
$jumlah_data=count($x);
$jumlah_data2=count($find);

for($y=0; $y<$jumlah_data2; $y++){
	for($n=0; $n<$jumlah_data; $n++){
		echo "Data yang di cari : ".$find[$y]." Data asli : ".$x[$n];

		if($find[$y]==$x[$n]){
			$found++;
			$count++;
			if($count>1){
				$temp[$y]=$count+0;
			} else {
			$temp[$y]=$count+1;
			}
			echo " in index : ".$n."<br>";

		} else {
			echo " Gak sama<br>";
		}
	}

}

echo "<br>Data Sama : ".$found;
echo "<br>Jumlah setelah valid : ".count($temp);
?>