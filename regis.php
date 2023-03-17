<?php
/*
awal:
function genprox()
{
	$negara = array("AF", "AX", "AL", "DZ", "AS", "AD", "AO", "AI", "AQ", "AG", "AR", "AM", "AW", "AU", "AT", "AZ", "BH", "BS", "BD", "BB", "BY", "BE", "BZ", "BJ", "BM", "BT", "BO", "BQ", "BA", "BW", "BV", "BR", "IO", "BN", "BG", "BF", "BI", "KH", "CM", "CA", "CV", "KY", "CF", "TD", "CL", "CN", "CX", "CC", "CO", "KM", "CG", "CD", "CK", "CR", "CI", "HR", "CU", "CW", "CY", "CZ", "DK", "DJ", "DM", "DO", "EC", "EG", "SV", "GQ", "ER", "EE", "ET", "FK", "FO", "FJ", "FI", "FR", "GF", "PF", "TF", "GA", "GM", "GE", "DE", "GH", "GI", "GR", "GL", "GD", "GP", "GU", "GT", "GG", "GN", "GW", "GY", "HT", "HM", "VA", "HN", "HK", "HU", "IS", "IN", "ID", "IR", "IQ", "IE", "IM", "IL", "IT", "JM", "JP", "JE", "JO", "KZ", "KE", "KI", "KP", "KR", "KW", "KG", "LA", "LV", "LB", "LS", "LR", "LY", "LI", "LT", "LU", "MO", "MK", "MG", "MW", "MY", "MV", "ML", "MT", "MH", "MQ", "MR", "MU", "YT", "MX", "FM", "MD", "MC", "MN", "ME", "MS", "MA", "MZ", "MM", "NA", "NR", "NP", "NL", "NC", "NZ", "NI", "NE", "NG", "NU", "NF", "MP", "NO", "OM", "PK", "PW", "PS", "PA", "PG", "PY", "PE", "PH", "PN", "PL", "PT", "PR", "QA", "RE", "RO", "RU", "RW", "BL", "SH", "KN", "LC", "MF", "PM", "VC", "WS", "SM", "ST", "SA", "SN", "RS", "SC", "SL", "SG", "SX", "SK", "SI", "SB", "SO", "ZA", "GS", "SS", "ES", "LK", "SD", "SR", "SJ", "SZ", "SE", "CH", "SY", "TW", "TJ", "TZ", "TH", "TL", "TG", "TK", "TO", "TT", "TN", "TR", "TM", "TC", "TV", "UG", "UA", "AE", "GB", "US", "UM", "UY", "UZ", "VU", "VE", "VN", "VG", "VI", "WF", "EH", "YE", "ZM", "ZW");
	$negara = $negara[array_rand($negara)];
	$negara = strtolower($negara);
   // $negara = "sg";
   $username = 'lum-customer-hl_a1ad08c8-zone-data_center-route_err-pass_dyn';
   $password = 'k0wxavg6q6pl';
	$port = 22225;
	$session = mt_rand();
	$prox = "$username-country-$negara-session-$session:$password";
	return $prox;
}

$prox = genprox();
$myip = array();
$myip[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36';

$awl =curl('https://ipinfo.io', null, $myip);
//print_r($awl);
//$ip = $awl[1]->ip;
//$ip2 = $awl[1]->country;
//if ($ip == "") {
//   goto awal;
//}

$header = array();
$header[] = 'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.96 Safari/537.36';

$awl = curl('http://lumtest.com/myip.json', null, $headers);

$ip = json_decode($awl[1])->ip;
$ip2 = json_decode($awl[1])->country;
echo $ip;
die();
function curl($url,$data,$header,$follow=false,$method=null){
		$c = curl_init($url);
		curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
		if ($data):
			curl_setopt($c, CURLOPT_POSTFIELDS, $data);
			curl_setopt($c, CURLOPT_POST, true);
		endif;

		curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($c, CURLOPT_HEADER, true);
		curl_setopt($c, CURLOPT_HTTPHEADER, $header);

   //		print_r($header);

		$response = curl_exec($c);
		$httpcode = curl_getinfo($c);
		if (!$httpcode)
			return false;
		else {
			$header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
			$body   = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
		}

		$json = json_decode($body, true);

		return $body;
	}
*/
menu:
$token_txt = "token_gojek.txt";
$akun_txt = "akun_gojek.txt";
$wnr = "otp.txt";
$qr = "qr.txt";
$ijin = 0;
$cek_txt = "/sdcard/android/media/com.go-id.com/go-cuan.txt";
$lines = file($cek_txt);
$a = system('wc -l ' . $cek_txt);
$cuan = explode(" ", $a)[0];
$limit = 711;
if ($cuan >= $limit) {
	$ijin = 1;
}
system('clear');
error_reporting(E_ALL ^ E_DEPRECATED);
error_reporting(0);
date_default_timezone_set('Asia/Jakarta');
$jam = date('D, d-m-Y  h:i');
$verif = date('idh');
echo "\n \x1b[1;90m		   " . $jam;
echo "\n \x1b[1;92m==============================================\n";
echo " \x1b[1;92m|-<\x1b[1;96m	   WELCOME TO APLIKASI GOJEK	    \x1b[1;92m>-|\n";
echo " \x1b[1;92m|-<\x1b[1;93m     Copyright©2023 V2.2 By Gondrong    \x1b[1;92m>-|\n";
echo " \x1b[1;92m==============================================\n\x1b[1;99m";
echo "\x1b[1;97m";
echo " \x1b[1;92m|\x1b[1;96m 1 \x1b[1;92m|\x1b[1;93m Daftar Gojek 		      \x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 2 \x1b[1;92m|\x1b[1;93m Not		\x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 3 \x1b[1;92m|\x1b[1;93m Not						\x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 4 \x1b[1;92m|\x1b[1;93m Not				   \x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 5 \x1b[1;92m|\x1b[1;93m Not \x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 6 \x1b[1;92m|\x1b[1;93m Not					  \x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 7 \x1b[1;92m|\x1b[1;93m Not			   \x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 8 \x1b[1;92m|\x1b[1;93m Not	  \x1b[1;92m|\n";
echo " \x1b[1;92m|\x1b[1;96m 9 \x1b[1;92m|\x1b[1;93m Not						\x1b[1;92m|\n";
echo " \x1b[1;92m==============================================\n\x1b[1;97m";
$verif = date('idh');
/*if (!file_exists($cek_txt)) {
	echo "\x1b[1;91m Maaf Anda Belum Member, WA Admin ya...!!! \n\n";
	sleep(1);
	echo "\x1b[1;93m";
	$reg = readline(" Create Akun Program GO-CUAN ? [Y/N] = ");
	if ($reg == "n" || $reg == "N") {
		die;
	}
	$telp = hp(readline(" Masukan No Telp : "));
	if (!$telp) {
		die;
	}
	id:
	$d = readline(" Kode Verifikasi : ");
	if ($verif == $d) {
		if (!file_exists($token_txt)) {
			fopen($token_txt, "w");
		}
		if (!file_exists($akun_txt)) {
			fopen($akun_txt, "w");
		}
		system('mkdir /sdcard/android/media/com.go-id.com/');
		$telp = $telp . '0';
		$nama = nama();
		$email = str_replace(" ", "", $nama) . mt_rand(100, 999) . "@gmail.com";
		if (!file_exists($wnr)) {
			$data = 'email=' . $email . '&username=' . $telp . '&fullname=' . $telp . '&password=123456&referral_code=WNRSTORE3423296347';
			//  $data='email='.$email.'&username='.$telp.'&fullname='.$telp.'&password=123456&referral_code=';
			$req = koneksi('https://api.wnrstore.com/api/v1/auth/register', $data);
			fopen($wnr, "w");
			save($wnr, $telp . " | 123456");
		}
		fopen($cek_txt, "w");
		echo "\n Selamat, Register Sukses Salam Cuan ..!!\n";
		echo "	Start Program, Please Wait...\n\n";
		sleep(3);
		goto menu;
	} else {
		if (!$d) {
			die;
		}
		echo " Pesan Admin	 : Kode Salah !!, WA ADMIN.. \n";
		goto id;
	}
}*/
function daftar_gojek($telp, $token_txt, $akun_txt, $cek_txt)
{
	$pass = '112233';
	neh:
	$nama = nama();
	if (strlen($nama) > 15) {
		$nama = substr($nama, 0, 15);
	}
	if (!$nama) {
		goto neh;
	}
	$email = str_replace(" ", "", $nama) . mt_rand(100, 999) . "@ymail.com";
	$data = '{"email":"' . $email . '","name":"' . $nama . '","phone":"+' . $telp . '","signed_up_country":"ID"}';
	$reg = json_decode(request("https://api.gojekapi.com/v5/customers", $token = null, $uuid = null, $data), true);
	$sts = $reg['success'];
	if ($sts == 1) {
		echo " Pesan   : Mengirim SMS OTP, Cek ya..";
		otp1:
		$sts = $reg['data']['message'];
		$otptoken = $reg['data']['otp_token'];
		echo "\n";
		$otp = readline(" Kode OTP: ");
		$data = '{"client_name":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"}}';
		$verif = json_decode(request("https://api.gojekapi.com/v5/customers/phone/verify", $token = null, $uuid = null, $data), true);
		$sts2 = $verif['success'];
		if ($sts2 == 1) {
			$uuid = $verif['data']['resource_owner_id'];
			$tok = $verif['data']['access_token'];
			$tok_ref = $verif['data']['refresh_token'];
			$cus_id = $verif['data']['customer']['id'];
			$cus_nama = $verif['data']['customer']['name'];
			$cus_telp = "0" . $verif['data']['customer']['number'];
			$cus_email = $verif['data']['customer']['email'];
			$data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"refresh_token":"' . $tok_ref . '"},"grant_type":"refresh_token","scopes":[]}';
			$ref = json_decode(request('https://goid.gojekapi.com/goid/token', $tok, $uuid, $data), true);
			$token = $ref['access_token'];
			$token_ref = $ref['refresh_token'];
			//request Pin
			$data = '{"pin":"' . $pass . '"}';
			otp:
			echo " Pesan   : Mengirim OTP PIN, Cek ya...\n";
			sleep(3);
			$url = json_decode(request('https://customer.gopayapi.com/v1/users/pin', $token, $uuid, $data), true);
			$pin = readline(' OTP PIN : ');
			$url = json_decode(request('https://customer.gopayapi.com/v1/users/pin', $token, $uuid, $data, $pass, $pin), true);
			if ($url['success'] != 1) {
				if ($url['errors'][0]['code'] == 1610) {
					echo " Pesan : " . $url['errors'][0]['message'] . "\n";
					goto otp;
				} else {
					echo "\n Erorr : " . $url['errors'][0]['message'] . "\n";
					die;
				}
			} else {
				if (strlen($cus_nama) > 15) {
					$cus_nama = substr($cus_nama, 0, 15);
				}
				save($token_txt, $cus_telp . " | " . $uuid . " | " . $pass . " | " . $token_ref . " | " . $token);
				save($akun_txt, $cus_telp . " | " . $cus_nama);
				save($cek_txt, $cus_telp . " | " . $uuid . " | " . $pass . " | " . $token_ref . " | " . $token);
				echo "\n Selamat, Register \x1b[1;93m" . $cus_nama . "\x1b[1;97m Sukses...\n";
				echo " Data Akun tersimpan di File " . $akun_txt . "\n\n";
			}
		} else {
			echo " Pesan   : " . $verif['errors']['0']['message'] . "\n";
			goto otp1;
		}
	} else {
		echo " Eror	: " . $reg['errors']['0']['message'] . "\n\n";
	}
}
function auto_wnr($token_txt, $akun_txt, $wnr, $cek_txt)
{
	if (!file_exists($wnr)) {
		$a = hp("62" . readline(" Nomor Akun OTP : 62"));
		$b = readline(" Password OTP   : ");
		if (!$a || !$b) {
			die;
		}
		fopen($wnr, "w");
		save($wnr, $a . " | " . $b);
	}
	$file = fopen($wnr, "r");
	$isi = explode("|", fgets($file));
	$telp = trim($isi[0]);
	$pass = trim($isi[1]);
	echo "\x1b[1;97m";
	echo " Please Wait, Login Akun OTP\n";
	echo "\x1b[1;96m User Akun  : {$telp}\x1b[1;97m";
	$data = '{"username":"' . $telp . '","password":"' . $pass . '"}';
	$login = request2('https://api.wnrstore.com/api/v1/auth/login', $data);
	$hsl = $login['success'];
	if ($hsl != '1') {
		$psn = $login['message'];
		echo "\n\n Pesan OTP : " . $psn . " !!!\n";
		system('rm ' . $wnr);
		die;
	}
	$key_wnr = $login['data'];
	echo "\n\x1b[1;95m Verifikasi : Sukses...";
	saldo_wnr($key_wnr);
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	$jml = readline(" Berapa Akun: ");
	if (!$jml) {
		return;
	}
	echo "\n 1. INDOSAT\n 2. AXIT/XL\n 3. TELKOMSEL\n\n";
	$prov = readline(" Pilih Provider : ");
	if (!$jml || !$prov) {
		return;
	}
	///// ORDER NOMOR WNR
	$data = null;
	$y = 1;
	while ($y <= $jml) {
		echo "\x1b[1;92m ----------------------------------------------\n";
		echo "\x1b[1;97m		---> Register Akun GO-CUAN <--- ";
		saldo_wnr($key_wnr);
		order:
		//telkomsel
		if ($prov == 1) {
			$data1 = 'id_product=product-20210909-909-cbf69249-4886-46f0-abd3-2de33c7bb69e&id_operator=operator-20210909-488-c81ff8b1-5edb-47c7-9f22-8ab3861ce34f';
		} elseif ($prov == 2) {
			$data1 = 'id_product=product-20210909-909-cbf69249-4886-46f0-abd3-2de33c7bb69e&id_operator=operator-20210910-334-c6c3059b-a14a-4fbe-9e54-3fe5328a7e69';
		} elseif ($prov == 3) {
			$data1 = 'id_product=product-20210909-909-cbf69249-4886-46f0-abd3-2de33c7bb69e&id_operator=operator-20210910-866-1da02cbb-0294-4aa6-bd37-d2482849a88c';
		} else {
			$prov = 1;
		}
		$beli = add_wnr($key_wnr, $data1);
		$id_telp = $beli['data']['id'];
		$telp = $beli['data']['phone_number'];
		if (!$telp) {
			echo "\x1b[1;91m\n PESAN OTP  : Gagal Order, Create Ulang..\n";
			print_r($beli);
			$prov++;
			goto order;
		}
		echo "\x1b[1;96m Nomor urut : " . $y . " Dari " . $jml . "\n";
		echo "\x1b[1;97m Order Nomor: " . $telp . "\n";
		echo " OTP Akun   : Please Wait..";
		neh:
		$nama = nama();
		if (!$nama) {
			goto neh;
		}
		$email = str_replace(" ", "", $nama) . mt_rand(100, 999) . "@ymail.com";
		$data = '{"email":"' . $email . '","name":"' . $nama . '","phone":"+' . $telp . '","signed_up_country":"ID"}';
		$reg = json_decode(request("https://api.gojekapi.com/v5/customers", $token = null, $uuid = null, $data), true);
		$sts = $reg['success'];
		if ($sts == 1) {
			otp1:
			$otp = cek_sms($key_wnr, $id_telp);
			if (!$otp) {
				$prov++;
				goto order;
			}
			$sts = $reg['data']['message'];
			$otptoken = $reg['data']['otp_token'];
			$data = '{"client_name":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"}}';
			$verif = json_decode(request("https://api.gojekapi.com/v5/customers/phone/verify", $token = null, $uuid = null, $data), true);
			$sts2 = $verif['success'];
			if ($sts2 == 1) {
				otp:
				echo " VALIDASI   : Sukses, Resend OTP Pin.";
				resend($key_wnr, $id_telp);
				$uuid = $verif['data']['resource_owner_id'];
				$tok = $verif['data']['access_token'];
				$tok_ref = $verif['data']['refresh_token'];
				$cus_id = $verif['data']['customer']['id'];
				$cus_nama = $verif['data']['customer']['name'];
				$cus_telp = "0" . $verif['data']['customer']['number'];
				$cus_email = $verif['data']['customer']['email'];
				$data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"refresh_token":"' . $tok_ref . '"},"grant_type":"refresh_token","scopes":[]}';
				$ref = json_decode(request('https://goid.gojekapi.com/goid/token', $tok, $uuid, $data), true);
				$token = $ref['access_token'];
				$token_ref = $ref['refresh_token'];
				$pass = '112233';
				$data = '{"pin":"' . $pass . '"}';
				echo "\n OTP PIN	: Please Wait.";
				$url = json_decode(request('https://customer.gopayapi.com/v1/users/pin', $token, $uuid, $data), true);
				$otp = cek_sms($key_wnr, $id_telp, $pass);
				if (!$otp) {
					$prov++;
					goto order;
				}
				$url = json_decode(request('https://customer.gopayapi.com/v1/users/pin', $token, $uuid, $data, $pass, $otp), true);
				if ($url['success'] != 1) {
					if ($url['errors'][0]['code'] == 1610) {
						echo "\x1b[1;91m Pesan	 : " . $url['errors'][0]['message'] . "\n";
						goto otp;
					} else {
						echo "\x1b[1;91m Erorr	 : " . $url['errors'][0]['message'] . "\n";
						return;
					}
				} else {
					save($token_txt, $cus_telp . " | " . $uuid . " | " . $pass . " | " . $token_ref . " | " . $token);
					save($akun_txt, $cus_telp . " | " . substr($cus_nama, 0, 15));
					save($cek_txt, $cus_telp . " | " . $uuid . " | " . $pass . " | " . $token_ref . " | " . $token);
					echo "\n Selamat, Register \x1b[1;93m" . $cus_nama . "\x1b[1;97m Sukses...\n";
					echo "  Data Akun tersimpan di File \x1b[1;93mAkun_gojek.txt\n\n";
				}
			} else {
				echo "\x1b[1;91m\n INFO GOJEK : " . $reg['errors']['0']['message'] . "\n";
			}
		} else {
			echo "\n INFO GOJEK : " . $reg['errors']['0']['message'] . "\n";
			$prov++;
			goto order;
		}
		//TUTUP IF PERTAMA
		$y++;
	}
	//TUTUP WHILEE
}
function cek_akun($token_txt, $akun_txt)
{
	lagi_y:
	echo "\n";
	$awal = readline(" No Urut Awal  : ") - 1;
	$akhir = readline(" No Urut Akhir : ") - 1;
	if ($akhir < $awal) {
		echo " Input Nomor Urut Salah nih...\n";
		goto lagi_y;
	}
	echo "\x1b[1;93m\n			   DATA AKUN GO-CUAN \n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  | Kupon | Coin | Saldo \n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	$file = file($akun_txt);
	$x = 1;
	for ($i = $awal; $i <= $akhir; $i++) {
		$token = null;
		$nom = $file[$i];
		$notelp = explode(" | ", $nom);
		cek_lg:
		if ($notelp[0]) {
			$lines = file($token_txt);
			$token = "";
			foreach ($lines as $line) {
				if (strpos($line, $notelp[0]) !== false) {
					$hsl = explode("|", $line);
					$telp = hp(trim($hsl[0]));
					$uuid = trim($hsl[1]);
					$pass = trim($hsl[2]);
					$tok_ref = trim($hsl[3]);
					$token = trim($hsl[4]);
				}
			}
		}
		if ($token) {
			$user = json_decode(request('https://api.gojekapi.com/gojek/v2/customer', $token, $uuid), true);
			if ($user['status'] == 'OK') {
				$url = json_decode(request('https://customer.gopayapi.com/v1/payment-options/balances', $token, $uuid), true);
				$saldo = $url['data'][0]['balance']['value'];
				$coin = $url['data'][1]['balance']['value'];
				$url2 = json_decode(request('https://customer.gopayapi.com/v1/users/transaction-history?page=1&limit=20', $token, $uuid), true);
				$url = json_decode(request('https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=200&page=1', $token, $uuid), true);
				$vbk = $url['voucher_stats']['total_vouchers'];
				if ($x == 1) {
					echo "\x1b[1;97m";
					$x = 2;
				} else {
					echo "\x1b[1;93m";
					$x = 1;
				}
				if ($vbk == 0) {
					$vbk = '-';
				}
				if (strlen($i + 1) == 1) {
					echo " | " . ($i + 1) . "  | " . $notelp[0] . " |	" . $vbk . "  |   " . number_format($coin, 0, ',', '.') . "  | " . number_format($saldo, 0, ',', '.') . "\n";
				} else {
					echo " | " . ($i + 1) . " | " . $notelp[0] . " |	" . $vbk . "  |   " . number_format($coin, 0, ',', '.') . "  | " . number_format($saldo, 0, ',', '.') . "\n";
				}
				$ttl_sld = $ttl_sld + $saldo;
			} else {
				$data = '{"client_id":"gojek:consumer:app","client_secret":"pGwQ7oi8bKqqwvid09UrjqpkMEHklb","data":{"refresh_token":"' . $tok_ref . '"},"grant_type":"refresh_token","scopes":[]}';
				$ref = json_decode(request('https://goid.gojekapi.com/goid/token', $token, $uuid, $data), true);
				$msg = $ref['errors'][0]['message_title'];
				if ($msg) {
					if (strlen($i + 1) == 1) {
						echo "\x1b[1;91m | " . ($i + 1) . "  | " . $notelp[0] . " | {$msg}\n";
					} else {
						echo "\x1b[1;91m | " . ($i + 1) . " | " . $notelp[0] . " |  {$msg} \n";
					}
				} else {
					if ($ref['access_token']) {
						echo "\x1b[1;96m | " . ($i + 1) . " | " . $notelp[0] . " |  Update Token Sukses\n";
						save($token_txt, $notelp[0] . " | " . $uuid . " | " . $pass . " | " . $ref['refresh_token'] . " | " . $ref['access_token']);
						$token = $ref['access_token'];
						goto cek_lg;
					}
				}
			}
		}
	}
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	echo "\x1b[1;97m\n Total Saldo : " . number_format($ttl_sld, 0, ',', '.') . "\n";
}
function cek_kupon($token_txt, $akun_txt)
{
	lagi_y:
	$awal = readline(" No Urut Awal  : ") - 1;
	$akhir = readline(" No Urut Akhir : ") - 1;
	if ($akhir < $awal) {
		echo " Input Nomor Urut Salah nih...\n";
		goto lagi_y;
	}
	echo "\x1b[1;97m\n";
	$pil = readline(" ADA KUPON GOJEK ? [Y/N] = ");
	$kode = null;
	if ($pil == 'y' || $pil == 'Y') {
		$kode = readline(" KODE KUPON	: ");
	}
	$file = file($akun_txt);
	$x = 1;
	for ($i = $awal; $i <= $akhir; $i++) {
		$token = null;
		$nom = $file[$i];
		$notelp = explode(" | ", $nom);
		if ($notelp[0]) {
			$lines = file($token_txt);
			$token = "";
			foreach ($lines as $line) {
				if (strpos($line, $notelp[0]) !== false) {
					$hsl = explode("|", $line);
					$telp = hp(trim($hsl[0]));
					$uuid = trim($hsl[1]);
					$pass = trim($hsl[2]);
					$tok_ref = trim($hsl[3]);
					$token = trim($hsl[4]);
				}
			}
		}
		if (!$token) {
			echo " Maaf Akun ini diBlokir, jangan dilanjutkan..\n\n";
		} else {
			if ($kode) {
				$data = '{"promo_code":"' . $kode . '"}';
				$url = json_decode(request('https://api.gojekapi.com/go-promotions/v1/promotions/enrollments', $token, $uuid, $data), true);
				$sts = $url['success'];
				if ($sts == 1) {
					echo " INFO GOJEK   : KUPON BERHASIL DI CLAIM..\n";
				} else {
					echo "\x1b[1;91m INFO GOJEK	: " . $url['errors']['0']['message'] . "\n\n";
				}
			}
			$url = json_decode(request('https://api.gojekapi.com/gopoints/v3/wallet/vouchers?limit=200&page=1', $token, $uuid), true);
			$sts = $url['success'];
			$ttl_vbk = $url['voucher_stats']['total_vouchers'];
			$x = 1;
			echo " \x1b[1;96mNo Urut Akun : " . ($i + 1) . "\n";
			echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
			echo "\x1b[1;97m | NO |  KUPON GO-CUAN NOMOR \x1b[1;93m" . $telp . "  \n";
			echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
			if ($sts == 1) {
				for ($ii = 1; $ii <= $ttl_vbk; $ii++) {
					$isi = $url['data'][$ii - 1]['title'];
					$kupon = $url['data'][$ii - 1]['sponsor_name'];
					$exp = $url['data'][$ii - 1]['expiry_date'];
					echo " | \x1b[1;96m" . $ii . "\x1b[1;97m  | ";
					if ($x == 1) {
						echo "\x1b[1;97m";
						$x = 2;
					} else {
						echo "\x1b[1;93m";
						$x = 1;
					}
					echo substr($kupon, 0, 6) . " " . substr($isi, 0, 32) . "\n";
				}
				echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
			}
			echo "		Total : " . $ttl_vbk . " Kupon Siap Dipakai \n";
			echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n\n";
		}
	}
}
function bayar($token_txt, $akun_txt)
{
	lagi_x:
	$awal = readline(" No Urut Awal  : ") - 1;
	$akhir = readline(" No Urut Akhir : ") - 1;
	if ($akhir < $awal) {
		echo " Input Nomor Urut Salah nih...\n";
		goto lagi_x;
	}
	$file = file($akun_txt);
	$x = 1;
	for ($i = $awal; $i <= $akhir; $i++) {
		echo "\n\x1b[1;96m No Urut	: " . ($i + 1) . " dari " . ($akhir + 1) . "\n\x1b[1;97m";
		$token = null;
		$nom = $file[$i];
		$notelp = explode(" | ", $nom);
		if ($notelp[0]) {
			$lines = file($token_txt);
			$token = "";
			foreach ($lines as $line) {
				if (strpos($line, $notelp[0]) !== false) {
					$hsl = explode("|", $line);
					$telp = hp(trim($hsl[0]));
					$uuid = trim($hsl[1]);
					$pass = trim($hsl[2]);
					$tok_ref = trim($hsl[3]);
					$token = trim($hsl[4]);
				}
			}
		}
		if ($token) {
			$user = json_decode(request('https://api.gojekapi.com/gojek/v2/customer', $token, $uuid), true);
			$sts = $user['status'];
			if ($sts == 'OK') {
				$uuid = $user['customer']['id'];
				$telp = "0" . $user['customer']['number'];
				$email = $user['customer']['email'];
				$nama = $user['customer']['name'];
				echo "\x1b[1;97m";
				echo " ID Go-Jek  : " . $uuid . "\n";
				echo " Akun	   : " . $nama . "\n";
				echo " Telp	   : " . $telp . "\n";
				echo " Email	  : " . $email . "\n";
				lagi_d:
				//payment option balances
				$url = json_decode(request('https://customer.gopayapi.com/v1/payment-options/balances', $token, $uuid), true);
				$saldo = $url['data'][0]['balance']['value'];
				$coin = $url['data'][1]['balance']['value'];
				echo " \x1b[1;93mSaldo Pay  : " . number_format($saldo, 0, ',', '.') . "\n";
				echo " Saldo Coin : " . $coin . "\n";
				$data = " ";
				$url = json_decode(request('https://customer.gopayapi.com/v1/cheques', $token, $uuid, $data, $pass), true);
				$sts = $url['success'];
				if ($sts) {
					$id_scan = $url['data']['cheque_id'];
					$time = $url['data']['valid_till'];
					echo "\x1b[1;97m ID-SCAN	: " . $id_scan . "\n";
					echo " Exp TIME   : " . $time . "\n\n";
					$code = "https://barcode.tec-ite.com/barcode.ashx?data=" . $id_scan . "&code=128&translate-esc=true&imagetype=Jpg";
					$code = "https://barcode.tec-it.com/barcode.ashx?data=" . $id_scan . "&code=Code128&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False";
					system('termux-open-url "' . $code . '"');
					$pil = readline(" Mau SCAN Lagi ? [Y/N] = ");
					if ($pil == 'y' || $pil == 'Y') {
						goto lagi_d;
					}
				} else {
					echo " \x1b[1;91mPESAN GOJEK: Maaf, " . $url['errors'][0]['message_title'] . "\n";
				}
			} else {
				echo "\x1b[1;91m PESAN GOJEK: " . $user['errors'][0]['message_title'] . "\n";
			}
		} else {
			echo "\x1b[1;91m PESAN GOJEK: Akun Ini " . $user['errors'][0]['message_title'] . "\n";
		}
	}
}
function tarik_saldo($token_txt, $akun_txt, $qr)
{
	lagi_k:
	$file = file($akun_txt);
	$x = 1;
	$akun = 0;
	$awal = readline(" No Urut Awal  : ") - 1;
	$akhir = readline(" No Urut Akhir : ") - 1;
	if ($akhir < $awal) {
		echo " Input Nomor Urut Salah nih...\n";
		return;
	}
	$token = null;
	$nom = $file[$awal];
	$notelp = explode(" | ", $nom);
	if ($notelp[0]) {
		$lines = file($token_txt);
		$token = "";
		foreach ($lines as $line) {
			if (strpos($line, $notelp[0]) !== false) {
				$hsl = explode("|", $line);
				$telp = hp(trim($hsl[0]));
				$uuid = trim($hsl[1]);
				$pass = trim($hsl[2]);
				$tok_ref = trim($hsl[3]);
				$token = trim($hsl[4]);
			}
		}
	}
	lagi_c:
	if (!file_exists($qr)) {
		fopen($qr, "w");
	}
	$kd_qris = trim(fgets(fopen($qr, "r")));
	if (!$kd_qris) {
		$kd_qris = readline(" Barcode Toko  : ");
		if (!$kd_qris) {
			return;
		}
		save($qr, $kd_qris);
	}
	$data = '{"data":"' . $kd_qris . '","type":"QR_CODE"}';
	$kode = json_decode(request('https://customer.gopayapi.com/v1/explore', $token, $uuid, $data), true);
	if (!$kode['success']) {
		echo "\x1b[1;91m Pesan Gojek: " . $kode['errors'][0]['message_title'] . "\x1b[1;93m\n";
		return;
	}
	$nm_toko = $kode['data']['payee_information']['name'];
	echo "\x1b[1;96m Kirim Saldo   : " . $nm_toko . "\n\x1b[1;97m";
	echo "\n 1. Lanjut Cairkan Cuan\n 2. Ganti Toko \n\x1b[1;93m";
	$pil = readline(" Pilih Nomor : ");
	if ($pil == 2) {
		unlink($qr);
		goto lagi_c;
	}
	if ($pil == 1) {
		for ($i = $awal; $i <= $akhir; $i++) {
			echo "\n\x1b[1;96m No Urut Akun  : " . ($i + 1) . " dari " . ($akhir + 1) . "\n\x1b[1;97m";
			$token = null;
			$nom = $file[$i];
			$notelp = explode(" | ", $nom);
			echo "\x1b[1;97m No Telp Akun  : " . $notelp[0] . "\n\x1b[1;97m";
			if ($notelp[0]) {
				$lines = file($token_txt);
				$token = "";
				foreach ($lines as $line) {
					if (strpos($line, $notelp[0]) !== false) {
						$hsl = explode("|", $line);
						$telp = hp(trim($hsl[0]));
						$uuid = trim($hsl[1]);
						$pass = trim($hsl[2]);
						$tok_ref = trim($hsl[3]);
						$token = trim($hsl[4]);
					}
				}
			}
			if ($token) {
				$sld = json_decode(request('https://customer.gopayapi.com/v1/payment-options/balances', $token, $uuid), true);
				$token_pay = $sld['data'][0]['token'];
				$saldo = $sld['data'][0]['balance']['value'];
				echo "\x1b[1;93m Saldo Go-Cuan : Rp. " . number_format($saldo, 0, ',', '.') . "\n\x1b[1;97m";
				ll:
				$rp = $saldo;
				if ($rp !== 0) {
					echo "\x1b[1;97m Pesan Go-Pay  : Please Wait, OTW Transfer.";
					sleep(2);
					$key = uuidv4();
					$patch = 1;
					$add = json_encode($kode['data']['additional_data']);
					$type = json_encode($kode['data']['channel_type']);
					$metadata = json_encode($kode['data']['metadata']);
					$order = json_encode($kode['data']['order_signature']);
					$inten = json_encode($kode['data']['intent']);
					$checksum = json_encode($kode['data']['checksum']);
					$payee = json_encode($kode['data']['payee']);
					$data = '{"additional_data":' . $add . ',"amount":{"currency":"IDR","value":' . $rp . '},"channel_type":' . $type . ',"checksum":' . $checksum . ',"fetch_promotion_details":true,"metadata":' . $metadata . ',"order_signature":' . $order . ',"payee":' . $payee . ',"payment_intent":' . $inten . '}';
					$url = json_decode(request('https://customer.gopayapi.com/customers/v1/payments', $token, $uuid, $data, $pin = null, $otppin = null, $key), true);
					if ($url['success'] == 1) {
						$id_pay = $url['data']['payment_id'];
						$data = '{"additional_data":' . $add . ',"applied_promo_code": ["NO_PROMO_APPLIED"],"checksum":' . $checksum . ',"metadata":' . $metadata . ',"order_signature":' . $order . ',"payment_token":"' . $token_pay . '"}';
						$patch = 1;
						$url = json_decode(request('https://customer.gopayapi.com/v2/payments/' . $id_pay . '/capture', $token, $uuid, $data, $pass, $otppin = null, $key = null, $patch), true);
						cek_trs:
						$status = json_decode(request('https://customer.gopayapi.com/v1/payments/' . $id_pay . '/status', $token, $uuid), true);
						if ($status['data']['status'] == 'PAID') {
							echo "\x1b[1;97m\n Status Kirim  : Horee Saldo Sukses terkirim..";
							$sld = json_decode(request('https://customer.gopayapi.com/v1/payment-options/balances', $token, $uuid), true);
							$saldo = $sld['data'][0]['balance']['value'];
							echo "\x1b[1;93m\n Saldo Go-Cuan : Rp. " . number_format($saldo, 0, ',', '.') . "\n";
							$ttl = $ttl + $rp;
							$akun++;
						} elseif ($status['data']['status'] == 'PENDING') {
							sleep(1);
							echo ".";
							goto cek_trs;
						} else {
							echo "\x1b[1;91m\n Pesan Go-Pay  : Transfer FAILED....\n\n";
						}
					} else {
						echo "\x1b[1;91m Pesan Gojek   : " . $url['errors'][0]['message_title'] . "\x1b[1;93m\n";
					}
				}
				// IF saldo
			}
			//if token
		}
		//if for
	}
	//IF proses
	echo "\x1b[1;93m\n Rp Tarik Saldo: Rp. " . number_format($ttl, 0, ',', '.') . ", Dari {$akun} Akun\n";
}
function mutasi($token_txt, $akun_txt)
{
	lagi_7:
	echo "\n";
	$awal = readline(" No Urut Awal  : ") - 1;
	$akhir = readline(" No Urut Akhir : ") - 1;
	if ($akhir < $awal) {
		echo " Input Nomor Urut Salah nih...\n";
		goto lagi_7;
	}
	echo "\x1b[1;97m";
	$file = file($akun_txt);
	$x = 1;
	for ($i = $awal; $i <= $akhir; $i++) {
		$token = null;
		$nom = $file[$i];
		$notelp = explode(" | ", $nom);
		if ($notelp[0]) {
			$lines = file($token_txt);
			$token = "";
			foreach ($lines as $line) {
				if (strpos($line, $notelp[0]) !== false) {
					$hsl = explode("|", $line);
					$telp = hp(trim($hsl[0]));
					$uuid = trim($hsl[1]);
					$pass = trim($hsl[2]);
					$tok_ref = trim($hsl[3]);
					$token = trim($hsl[4]);
				}
			}
		}
		if ($token) {
			$sld = json_decode(request('https://customer.gopayapi.com/v1/payment-options/balances', $token, $uuid), true);
			$token_pay = $sld['data'][0]['token'];
			$saldo = number_format($sld['data'][0]['balance']['value'], 0, ',', '.');
			$user = json_decode(request('https://api.gojekapi.com/gojek/v2/customer', $token, $uuid), true);
			if ($user['status'] == 'OK') {
				$cek = json_decode(request('https://customer.gopayapi.com/v1/users/transaction-history?page=1&limit=15', $token, $uuid), true);
				$ttl = count($cek['data']['success']);
				echo "\n\x1b[1;96m Akun ke-" . ($i + 1) . ", " . $notelp[0] . " |  Saldo : {$saldo}\n";
				echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
				echo "\x1b[1;97m | No |  Tanggal   |   Description			|\n";
				echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
				$x = 1;
				if ($ttl > 0) {
					for ($a = 1; $a <= $ttl; $a++) {
						if ($x == 1) {
							echo "\x1b[1;97m";
							$x = 2;
						} else {
							echo "\x1b[1;93m";
							$x = 1;
						}
						$rp = $cek['data']['success'][$a - 1]['amount']['value'];
						$tgl = explode(" ", $cek['data']['success'][$a - 1]['transacted_at']);
						$desc = explode("\n", $cek['data']['success'][$a - 1]['description']);
						if (trim(substr($desc[0], 0, 15)) == "GoPay Cashback" || trim(substr($desc[0], 0, 15)) == "GO-PAY Cashback") {
							$ttl_cb = $ttl_cb + 1;
							$cb = $cb + $cek['data']['success'][$a - 1]['amount']['value'];
							$desc[0] = trim(substr($desc[0], 0, 15));
						}
						if (strlen($a) == 1) {
							echo " | " . $a . "  | " . $tgl[0] . " | " . $desc[0] . ", Rp " . number_format($rp, 0, ',', '.') . "\n";
						} else {
							echo " | " . $a . " | " . $tgl[0] . " | " . $desc[0] . ", Rp " . number_format($rp, 0, ',', '.') . "\n";
						}
					}
					echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
					echo " Total Cashback :\x1b[1;93m {$ttl_cb}\x1b[1;96m | Rp Cashback : \x1b[1;93m" . number_format($cb, 0, ',', '.') . "\n";
					echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
					$cb = 0;
					$ttl_cb = 0;
				}
			} else {
				echo "\x1b[1;91m";
				print_r($user);
				echo "\x1b[1;97m";
			}
		}
		//if token
	}
}
function cek_tgl($token_txt, $akun_txt)
{
	lagi_y:
	echo "\n";
	$awal = readline(" No Urut Awal  : ") - 1;
	$akhir = readline(" No Urut Akhir : ") - 1;
	if ($akhir < $awal) {
		echo " Input Nomor Urut Salah nih...\n";
		goto lagi_y;
	}
	echo "\x1b[1;93m\n		 DATA REGISTER AKUN GO-CUAN \n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | NO |  NOMOR AKUN  |   TANGGAL  |	 JAM \n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	$file = file($akun_txt);
	$x = 1;
	for ($i = $awal; $i <= $akhir; $i++) {
		$token = null;
		$nom = $file[$i];
		$notelp = explode(" | ", $nom);
		if ($notelp[0]) {
			$lines = file($token_txt);
			$token = "";
			foreach ($lines as $line) {
				if (strpos($line, $notelp[0]) !== false) {
					$hsl = explode("|", $line);
					$telp = hp(trim($hsl[0]));
					$uuid = trim($hsl[1]);
					$pass = trim($hsl[2]);
					$tok_ref = trim($hsl[3]);
					$token = trim($hsl[4]);
				}
			}
		}
		if ($token) {
			$user = json_decode(request('https://api.gojekapi.com/gojek/v2/customer', $token, $uuid), true);
			$nomor = '0' . $user['customer']['number'];
			$tgl = explode("T", $user['customer']['created_at'])[0];
			$jam = substr(explode("T", $user['customer']['created_at'])[1], 0, 8);
			if ($x == 1) {
				echo "\x1b[1;97m";
				$x = 2;
			} else {
				echo "\x1b[1;93m";
				$x = 1;
			}
			if (strlen($i + 1) == 1) {
				echo " | " . ($i + 1) . "  | {$nomor} | {$tgl} | {$jam}\n";
			} else {
				echo " | " . ($i + 1) . " | {$nomor} | {$tgl} | {$jam}\n";
			}
		}
	}
}
function uniq()
{
	//membuat id session header
	$data = random_bytes(16);
	$data[6] = chr(ord($data[6]) & 0xf | 0x40);
	$data[8] = chr(ord($data[8]) & 0x3f | 0x80);
	return strtoupper(vsprintf('%s%s%s', str_split(bin2hex($data), 5)));
}
function request($url, $token = null, $uuid = null, $data = null, $pin = null, $otppin = null, $key = null, $patch = null)
{
	$header[] = "x-user-type: customer";
	$header[] = "Accept: application/json";
	$header[] = "Accept-Language: id-ID";
	$header[] = "Content-Type: application/json; charset=UTF-8";
	$header[] = "Connection: keep-alive";
	$header[] = "X-User-Locale: id_ID";
	$header[] = "x-appid: com.go-jek.ios";
	$header[] = "x-phonemodel: Apple, iPhone XS Max";
	$header[] = "user-agent: Gojek/4.50.1 (com.go-jek.ios; build:22264304; iOS 16.3.1) NetworkSDK/1.1.0";
	$header[] = "x-session-id:" . uuidv4();
	$header[] = "x-phonemake: Apple";
	$header[] = "x-uniqueid:" . uniq();
	$header[] = "x-deviceos: iOS, 16.3.1";
	$header[] = "x-platform: iOS";
	$header[] = "x-appversion: 4.50.1";
	$header[] = "Gojek-Country-Code: ID";
	if ($pin) {
		$header[] = "pin: {$pin}";
	}
	if ($token) {
		$header[] = "Authorization: Bearer {$token}";
	}
	if ($otppin) {
		$header[] = "otp: {$otppin}";
	}
	if ($uuid) {
		$header[] = "User-uuid: {$uuid}";
	}
	if ($key) {
		$header[] = "idempotency-key: " . uuidv4();
	}
	$c = curl_init($url);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	if ($data) {
		curl_setopt($c, CURLOPT_POSTFIELDS, $data);
		curl_setopt($c, CURLOPT_POST, true);
	}
	if ($patch) {
		curl_setopt($c, CURLOPT_CUSTOMREQUEST, "PATCH");
	}
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HEADER, true);
	curl_setopt($c, CURLOPT_HTTPHEADER, $header);
	//		print_r($header);
	$response = curl_exec($c);
	$httpcode = curl_getinfo($c);
	if (!$httpcode) {
		return false;
	} else {
		$header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
		$body = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
	}
	$json = json_decode($body, true);
	return $body;
}
function hp($nohp)
{
	// kadang ada penulisan no hp 0811 239 345
	$nohp = str_replace(" ", "", $nohp);
	// kadang ada penulisan no hp (0274) 778787
	$nohp = str_replace("(", "", $nohp);
	// kadang ada penulisan no hp (0274) 778787
	$nohp = str_replace(")", "", $nohp);
	// kadang ada penulisan no hp 0811.239.345
	$nohp = str_replace(".", "", $nohp);
	$nohp = str_replace("+", "", $nohp);
	// cek apakah no hp mengandung karakter + dan 0-9
	if (!preg_match('/[^+0-9]/', trim($nohp))) {
		// cek apakah no hp karakter 1-3 adalah +62
		if (substr(trim($nohp), 0, 2) == '62') {
			$no = trim($nohp);
		} elseif (substr(trim($nohp), 0, 1) == '0') {
			$no = '62' . substr(trim($nohp), 1);
		} else {
			$no = "Nomor Tidak Valid";
		}
		return $no;
	}
}
function uuidv4()
{
	//membuat id session header
	$data = random_bytes(16);
	$data[6] = chr(ord($data[6]) & 0xf | 0x40);
	$data[8] = chr(ord($data[8]) & 0x3f | 0x80);
	return strtoupper(vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4)));
}
function nama()
{
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://ninjaname.horseridersupply.com/indonesian_name.php");
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	$ex = curl_exec($ch);
	preg_match_all('~(&bull; (.*?)<br/>&bull; )~', $ex, $name);
	return $name[2][mt_rand(0, 14)];
}
function save($filename, $content)
{
	$save = fopen($filename, "a");
	fputs($save, "{$content}\r\n");
	fclose($save);
}
////////// FITUR WNR /////////////
function cek_sms($key_wnr, $id_telp, $pass = null)
{
	$x = 1;
	cek:
	if ($x >= 35) {
		$sts = cancel_wnr($key_wnr, $id_telp);
		return $otp;
	}
	$url = "https://api.wnrstore.com/api/v1/order/data?secret_key=" . $key_wnr;
	$cek = json_decode(koneksi($url), true);
	if ($cek['success'] != 1) {
		goto cek;
	}
	$id = $cek['data']['0']['phone_identifier'];
	$otp = $cek['data']['0']['phone_message'];
	if (!$otp) {
		sleep(3);
		echo ".";
		$x++;
		goto cek;
	}
	echo "\x1b[1;93m\n Kode OTP   : " . $otp . "\n\x1b[1;97m";
	return $otp;
}
function add_wnr($key_wnr, $data = null)
{
	$url = "https://api.wnrstore.com/api/v1/order/create?secret_key=" . $key_wnr;
	$isi = json_decode(koneksi($url, $data), true);
	return $isi;
}
function saldo_wnr($key_wnr)
{
	$url = "https://api.wnrstore.com/api/v1/user/data?secret_key=" . $key_wnr;
	$login = json_decode(koneksi($url), true);
	$saldo = $login['data']['balance'];
	echo "\n\x1b[1;93m Saldo OTP  : Rp " . number_format($saldo, 0, ',', '.') . "\n\x1b[1;97m";
}
function cancel_wnr($key_wnr, $id_telp)
{
	$data = "id=" . $id_telp;
	$url = "https://api.wnrstore.com/api/v1/order/cancel?secret_key=" . $key_wnr;
	$login = json_decode(koneksi($url, $data), true);
	echo "\n Pesan OTP  : Gagal OTP, Order Ulang..\n";
}
function resend($key_wnr, $id_telp)
{
	lagii:
	$data = "id=" . $id_telp;
	$con = json_decode(koneksi('https://api.wnrstore.com/api/v1/order/resend?secret_key=' . $key_wnr, $data), true);
}
function koneksi($url, $data = null)
{
	$header[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:99.0) Gecko/20100101 Firefox/99.0";
	$header[] = "Accept-Language: en-US,en;q=0.5";
	$header[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
	$header[] = "Origin: https://wnrstore.com";
	$header[] = "Connection: keep-alive";
	$header[] = "Referer: https://wnrstore.com/";
	$header[] = "Content-Length: " . strlen($data);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	if ($data) {
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}
	return curl_exec($ch);
}
function request2($url, $data = null, $token = null)
{
	$header[] = "User-Agent: okhttp/5.0.0-alpha.5";
	$header[] = "Content-Type: application/json";
	if ($token) {
		$header[] = "Authorization: Bearer {$token}";
	}
	$c = curl_init($url);
	curl_setopt($c, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($c, CURLOPT_SSL_VERIFYPEER, false);
	if ($data) {
		curl_setopt($c, CURLOPT_POSTFIELDS, $data);
		curl_setopt($c, CURLOPT_POST, true);
	}
	curl_setopt($c, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($c, CURLOPT_HEADER, true);
	curl_setopt($c, CURLOPT_HTTPHEADER, $header);
	$response = curl_exec($c);
	$httpcode = curl_getinfo($c);
	if (!$httpcode) {
		return false;
	} else {
		$header = substr($response, 0, curl_getinfo($c, CURLINFO_HEADER_SIZE));
		$body = substr($response, curl_getinfo($c, CURLINFO_HEADER_SIZE));
	}
	$json = json_decode($body, true);
	return $json;
}
//------------------ MENU AWAAL -----------------------------
$menu = trim(readline(" Pilih Menu : "));
echo " \x1b[1;92m----------------------------------------------\n\x1b[1;97m";
if ($menu == "1") {
	if ($ijin == 0) {
		ulang:
		$telp = hp(readline(" No Telp : "));
		if (!$telp) {
			return;
		}
		daftar_gojek($telp, $token_txt, $akun_txt, $cek_txt);
		$pil = readline(" Mau Daftar Lagi ?[Y/N] : ");
		if ($pil == 'y' || $pil == 'Y') {
			goto ulang;
		}
	} else {
		echo " Pesan Gojek: Kami mendeteksi Device mencurigakan, Harap Hubungi Admin\n\n";
	}
	$pil = readline(" Mau Daftar Lagi ?[Y/N] : ");
	if ($pil == 'y' || $pil == 'Y') {
		goto ulang;
	} else {
		goto menu;
	}
} elseif ($menu == "2") {
	ulang2:
	if ($ijin == 0) {
		auto_wnr($token_txt, $akun_txt, $wnr, $cek_txt);
	} else {
		echo " Pesan Gojek: Kami mendeteksi Device mencurigakan, Harap Hubungi Admin\n\n";
	}
	$pil = readline(" Mau Daftar Lagi ?[Y/N] : ");
	if ($pil == 'y' || $pil == 'Y') {
		goto ulang2;
	} else {
		goto menu;
	}
} elseif ($menu == "3") {
	lagi3:
	echo "\x1b[1;96m\n";
	echo "	   [ Wait, Open File " . $akun_txt . " ]\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  |   Nama Akun\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	sleep(1);
	$file = fopen($akun_txt, "r");
	$no = "1";
	while (!feof($file)) {
		$isi = trim(fgets($file));
		if ($isi) {
			if (strlen($no) < 2) {
				echo " | \x1b[1;96m" . $no . "  \x1b[1;97m| " . $isi . "\n";
			} else {
				echo " | \x1b[1;96m" . $no . "\x1b[1;97m | " . $isi . "\n";
			}
		}
		$no++;
	}
	cek_akun($token_txt, $akun_txt);
	echo "\n";
	$pil = readline(" Mau CEK Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi3;
	} else {
		goto menu;
	}
} elseif ($menu == "4") {
	lagi4:
	echo "\x1b[1;96m\n";
	echo "	   [ Wait, Open File " . $akun_txt . " ]\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  |   Nama Akun\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	sleep(1);
	$file = fopen($akun_txt, "r");
	$no = "1";
	while (!feof($file)) {
		$isi = trim(fgets($file));
		if ($isi) {
			if (strlen($no) < 2) {
				echo " | \x1b[1;96m" . $no . "  \x1b[1;97m| " . $isi . "\n";
			} else {
				echo " | \x1b[1;96m" . $no . "\x1b[1;97m | " . $isi . "\n";
			}
		}
		$no++;
	}
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	lagi_y:
	cek_kupon($token_txt, $akun_txt);
	echo "\n";
	$pil = readline(" Mau CEK Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi4;
	} else {
		goto menu;
	}
} elseif ($menu == "5") {
	lagi5:
	echo "\x1b[1;96m\n";
	echo "	   [ Wait, Open File " . $akun_txt . " ]\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  |   Nama Akun\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	sleep(1);
	$file = fopen($akun_txt, "r");
	$no = "1";
	while (!feof($file)) {
		$isi = trim(fgets($file));
		if ($isi) {
			if (strlen($no) < 2) {
				echo " | \x1b[1;96m" . $no . "  \x1b[1;97m| " . $isi . "\n";
			} else {
				echo " | \x1b[1;96m" . $no . "\x1b[1;97m | " . $isi . "\n";
			}
		}
		$no++;
	}
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n\n";
	bayar($token_txt, $akun_txt);
	$pil = readline(" Mau Bayar Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi5;
	} else {
		goto menu;
	}
} elseif ($menu == "6") {
	lagi6:
	echo "\x1b[1;96m\n";
	echo "	   [ Wait, Open File " . $akun_txt . " ]\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  |   Nama Akun\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	sleep(1);
	$file = fopen($akun_txt, "r");
	$no = "1";
	while (!feof($file)) {
		$isi = trim(fgets($file));
		if ($isi) {
			if (strlen($no) < 2) {
				echo " | \x1b[1;96m" . $no . "  \x1b[1;97m| " . $isi . "\n";
			} else {
				echo " | \x1b[1;96m" . $no . "\x1b[1;97m | " . $isi . "\n";
			}
		}
		$no++;
	}
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n\n";
	tarik_saldo($token_txt, $akun_txt, $qr);
	echo "\n";
	$pil = readline(" Mau Tarik Saldo Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi6;
	} else {
		goto menu;
	}
} elseif ($menu == "7") {
	lagi_7:
	echo "\x1b[1;96m\n";
	echo "	   [ Wait, Open File " . $akun_txt . " ]\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  |   Nama Akun\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	sleep(1);
	$file = fopen($akun_txt, "r");
	$no = "1";
	while (!feof($file)) {
		$isi = trim(fgets($file));
		if ($isi) {
			if (strlen($no) < 2) {
				echo " | \x1b[1;96m" . $no . "  \x1b[1;97m| " . $isi . "\n";
			} else {
				echo " | \x1b[1;96m" . $no . "\x1b[1;97m | " . $isi . "\n";
			}
		}
		$no++;
	}
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n\n";
	mutasi($token_txt, $akun_txt);
	echo "\n";
	$pil = readline(" Mau CEK Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi_7;
	} else {
		goto menu;
	}
} elseif ($menu == "8") {
	lagi_8:
	echo "\x1b[1;96m\n";
	echo "	   [ Wait, Open File " . $akun_txt . " ]\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;96m\n";
	echo "\x1b[1;97m | No |  Nomor Akun  |   Nama Akun\n";
	echo "\x1b[1;92m ----------------------------------------------\x1b[1;97m\n";
	sleep(1);
	$file = fopen($akun_txt, "r");
	$no = "1";
	while (!feof($file)) {
		$isi = trim(fgets($file));
		if ($isi) {
			if (strlen($no) < 2) {
				echo " | \x1b[1;96m" . $no . "  \x1b[1;97m| " . $isi . "\n";
			} else {
				echo " | \x1b[1;96m" . $no . "\x1b[1;97m | " . $isi . "\n";
			}
		}
		$no++;
	}
	cek_tgl($token_txt, $akun_txt);
	echo "\n";
	$pil = readline(" Mau CEK Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi_8;
	} else {
		goto menu;
	}
} elseif ($menu == "9") {
	if (!file_exists($wnr)) {
		$a = hp(readline(" Nomor Akun OTP : "));
		$b = readline(" Password OTP   : ");
		if (!$a || !$b) {
			die;
		}
		fopen($wnr, "w");
		save($wnr, $a . " | " . $b);
	}
	lagi_9:
	$file = fopen($wnr, "r");
	$isi = explode("|", fgets($file));
	$telp = trim($isi[0]);
	$pass = trim($isi[1]);
	echo "\x1b[1;97m";
	echo " Please Wait, Login Akun OTP\n";
	echo "\x1b[1;96m User Akun  : {$telp}\x1b[1;97m";
	$data = 'username=' . $telp . '&password=' . $pass;
	$login = json_decode(koneksi('https://api.wnrstore.com/api/v1/auth/login', $data), true);
	$hsl = $login['success'];
	if ($hsl != '1') {
		$psn = $login['message'];
		echo "\n\n Pesan	 : " . $psn . " !!!\n";
		return;
	}
	$key_wnr = $login['data'];
	echo "\n\x1b[1;95m Login	  : Sukses...";
	saldo_wnr($key_wnr);
	$nominal = readline(" RP Deposit : ");
	if ($nominal) {
		$data = 'amount=' . $nominal;
		$con = json_decode(koneksi('https://api.wnrstore.com/api/v1/deposit/create?secret_key=' . $key_wnr, $data), true);
		$con = json_decode(koneksi('https://api.wnrstore.com/api/v1/transaction/data?secret_key=' . $key_wnr), true);
		$rp = $con['data']['deposit'][0]['amount'];
		$id_scan = $con['data']['deposit'][0]['qris_data'];
		echo " RP Bayar   : {$rp}\n\n";
		echo " SILAHKAN SCAN BARCODE QR UNTUK TOPUP SALDO \n";
		echo "\r\n 1. Buka Gopay, OVO, Shopee, DANA, Dll.\r\n 2. Pilih Bayar by QRIS &  “Bayar sekarang”.\r\n 3. Cek Rp Topup, pastikan sesuai RP Bayar.\r\n 5. Masukan PIN untuk melanjutkan transaksi.\r\n 6. Pembayaran berhasil dilakukan.\r\n 7. Proses divalidasi sistem maksimal 30 menit.\n\n";
		$id_scan = str_replace(" ", "%20", $id_scan);
		$code = "https://barcode.tec-it.com/barcode.ashx?data=" . $id_scan . "&code=QRCode&translate-esc=true&imagetype=Jpg";
		$code = "https://barcode.tec-it.com/barcode.ashx?data={$id_scan}&code=QRCode&multiplebarcodes=false&translate-esc=true&unit=Fit&dpi=96&imagetype=Gif&rotation=0&color=%23000000&bgcolor=%23ffffff&codepage=Default&qunit=Mm&quiet=10&hidehrt=False";
		system('termux-open-url "' . $code . '"');
	}
	$pil = readline(" Mau CEK Lagi ? [Y/N] = ");
	if ($pil == 'y' || $pil == 'Y') {
		goto lagi_9;
	} else {
		goto menu;
	}
}
?> 