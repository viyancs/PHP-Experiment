<?PHP
/*
mathamatic calculating
14 of 100 = 1;
14 of 1000 = 1*10+10-0 = 20;
14 of 10000 = 20*10+100 - 1 = 299;
14 of 10 ^ 5 = 299*10+10^3 -20 = 3970;
14 of 10 ^ 6 = 3970*10+10^4 - 299 = 49401;
14 of 10 ^ 7 = 49401*10+10^5 - 3970 = 590040
14 of 10 ^ n = hasil dari 
*/
// Hanya Berfungsi pada perpangkatan 10 saja, untuk angka lain saya belom menemukan solusinya

function rumus($angka){
	if ($angka <14) return 0;
	else if ($angka <= 100) return 1;
	else {
		$digit = strlen($angka)-1;
		$x = ($digit-2);
		$isi = rumus(pow(10,$x+1))*10 + pow(10,$x) - rumus(pow(10,$x));
		return $isi;
	}
}

echo rumus(10000);
echo "<br />";
echo rumus(100000);
echo "<br />";
echo rumus(1000000);
echo "<br />";
echo rumus(10000000); //10.000.000
echo "<br />";
echo rumus(100000000);
echo "<br />";
echo rumus(1000000000);
echo "<br />";
echo rumus(10000000000); //10.000.000.000
echo "<br />";
echo rumus(100000000000);
echo "<br />";
echo rumus(1000000000000); //1.000.000.000.000
echo "<br />";
?>