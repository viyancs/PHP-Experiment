<?PHP
/*
mencari angka 14 dari perpangkatan 10
mathamatic calculating
14 of 100 = 1;
14 of 1000 = 1(10)+10 = 20
14 of 10000 = 2(100)+100 - 1 = 299 --> -1
14 of 10 ^ 5 = 3(10^3)+10^3 = 3000+1000 = 3970 --> -30 100.000
3970*10 + 10000 - 299 = 49700 - 299 = 49401
14 of 10 ^ 6 = 4(10^4)+10^4 = 40000+10000 = 49401 --> -599 1.000.000
14 of 10 ^ 7 = 5(10 ^5)+10 ^5 = 500000+100000 = 590040 --> -9960 10.000.000
14 of 10 ^ n = [n-2](10^[n-2])+10^[n-2] - ???
*/

function rumus($angka){
	if ($angka <14) return 0;
	else if ($angka <= 100) return 1;
	else {
		$digit = strlen($angka)-1;
		$x = ($digit-2);
		$isi = rumus(pow(10,$x+1))*10 - rumus(pow(10,$x));
		return $isi;
	}
}

echo rumus(100000);