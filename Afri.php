<?php
date_default_timezone_set('Asia/Jakarta');
include "function.php";
echo "\e[97m::::::::::::::::::::::::::::::::::::::::::::\n";
echo "\e[97m::::::::::::::\e[92mldkOKXXNNXXKOkdl\e[97m::::::::::::::\n";
echo "\e[97m:::::::::::\e[92md0NMMMMMMMMMMMMMMMMN0d\e[97m:::::::::::\n";
echo "\e[97m::::::::\e[92mcONMMMMMMMMMMMMMMMMMMMMMMNOc\e[97m::::::::\n";
echo "\e[97m::::::\e[92mcOWMMMMMMMMWX0OOOO0XWMMMMMMMMWOc\e[97m::::::\n";
echo "\e[97m:::::\e[92moNMMMMMMMXkl\e[97m::::::::::\e[92mlkXMMMMMMMNo\e[97m:::::\n";
echo "\e[97m::::\e[92moWMMMMMMXo\e[97m::::::\e[92mlool\e[97m::::::\e[92moXMMMMMMWo\e[97m::::\n";
echo "\e[97m:::\e[92mcNMMMMMM0\e[97m::::\e[92mcxKWMMMMWKxc\e[97m::::\e[92m0MMMMMMNc\e[97m:::\n";
echo "\e[97m:::\e[92mkMMMMMMX\e[97m::::\e[92mlXMMMMMMMMMMXl\e[97m::::\e[92mXMMMMMMk\e[97m:::\n";
echo "\e[97m:::\e[92mKMMMMMMx\e[97m::::\e[92mKMMMMMMMMMMMMK\e[97m::::\e[92mxMMMMMMK\e[97m:::\n";
echo "\e[97m:::\e[92mXMMMMMMd\e[97m::::\e[92mNMMMMMMMMMMMMNc\e[97m:::\e[92mdMMMMMMX\e[97m:::\n";
echo "\e[97m:::\e[92m0MMMMMMO\e[97m::::\e[92mkMMMMMMMMMMMMk\e[97m::::\e[92mOMMMMMM0\e[97m:::\n";
echo "\e[97m:::\e[92moMMMMMMWo\e[97m::::\e[92mxNMMMMMMMMNx\e[97m::::\e[92moWMMMMMMo\e[97m:::\n";
echo "\e[97m::::\e[92m0MMMMMMWd\e[97m:::::\e[92mok0KK0ko\e[97m:::::\e[92mdWMMMMMM0\e[97m::::\n";
echo "\e[97m::::\e[92mcKMMMMMMMKdc\e[97m::::::::::::\e[92mcdKMMMMMMMKc\e[97m::::\n";
echo "\e[97m::::::\e[92mxNMMMMMMMWKkl\e[97m::::::\e[92mlkKWMMMMMMMNx\e[97m::::::\n";
echo "\e[97m:::::::\e[92mcOWMMMMMMMMWx\e[97m::::\e[92mxWMMMMMMMMWOc\e[97m:::::::\n";
echo "\e[97m:::::::::\e[92mckXMMMMMMMx\e[97m::::\e[92mxMMMMMMMXkc\e[97m:::::::::\n";
echo "\e[97m::::::::::::\e[92mlxOKX0d\e[97m::::::\e[92md0XKOxl\e[97m::::::::::::\n";
echo "\e[97m::::::::::::::::::::::::::::::::::::::::::::\n";
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo color("white","[•]  Time  : ".date("l, Y-m-d H:i:s")."   \n");
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
echo color("white","[•]              Gondrong      \n");
echo color("green","▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬\n");
function change(){
        $nama = nama();
        $email = str_replace(" ", "", $nama) . mt_rand(100, 999);
        ulang:
        echo color("nevy","(•) Nomor : ");
        $no = trim(fgets(STDIN));
        $data = '{"email":"'.$email.'@gmail.com","name":"'.$nama.'","phone":"+'.$no.'","signed_up_country":"ID"}';
        $register = request("/v5/customers", null, $data);
        if(strpos($register, '"otp_token"')){
        $otptoken = getStr('"otp_token":"','"',$register);
        echo color("green","+] Kode verifikasi sudah di kirim")."\n";
        otp:
        echo color("nevy","?] Otp: ");
        $otp = trim(fgets(STDIN));
        $data1 = '{"client_name":"gojek:cons:android","data":{"otp":"' . $otp . '","otp_token":"' . $otptoken . '"},"client_secret":"83415d06-ec4e-11e6-a41b-6c40088ab51e"}';
        $verif = request("/v5/customers/phone/verify", null, $data1);
        if(strpos($verif, '"access_token"')){
        echo color("green","+] Berhasil mendaftar");
        $token = getStr('"access_token":"','"',$verif);
        $uuid = getStr('"resource_owner_id":',',',$verif);
        echo "\n".color("yellow","+] Your access token : ".$token."\n\n");
        save("token.txt",$token);
        echo "\n".color("nevy","?] Mau Redeem Voucher?: y/n ");
        $pilihan = trim(fgets(STDIN));
        if($pilihan == "y" || $pilihan == "Y"){
        echo color("red","===========(REDEEM VOUCHER)===========");
        echo "\n".color("yellow","!] Claim A");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(3);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOSENDHEMAT"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto gocar;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        gocar:
        echo "\n".color("yellow","!] Claim B");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(20);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOJEKINAJA"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        reff:
        $data = '{"referral_code":"GOJEKINAJA"}';    
        $claim = request("/customer_referrals/v1/campaign/enrolment", $token, $data);
        $message = fetch_value($claim,'"message":"','"');
        if(strpos($claim, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        goto gofood;
        }else{
        echo "\n".color("red","-] Message: ".$message);
        }
        gofood:
        echo "\n".color("yellow","!] Claim C");
        echo "\n".color("yellow","!] Please wait");
        for($a=1;$a<=3;$a++){
        echo color("yellow",".");
        sleep(3);
        }
        $code1 = request('/go-promotions/v1/promotions/enrollments', $token, '{"promo_code":"GOJEKHEMAT"}');
        $message = fetch_value($code1,'"message":"','"');
        if(strpos($code1, 'Promo kamu sudah bisa dipakai')){
        echo "\n".color("green","+] Message: ".$message);
        sleep(1);
        sleep(3);
        $cekvoucher = request('/gopoints/v3/wallet/vouchers?limit=10&page=1', $token);
        $total = fetch_value($cekvoucher,'"total_vouchers":',',');
        $voucher3 = getStr1('"title":"','",',$cekvoucher,"3");
        $voucher1 = getStr1('"title":"','",',$cekvoucher,"1");
        $voucher2 = getStr1('"title":"','",',$cekvoucher,"2");
        $voucher4 = getStr1('"title":"','",',$cekvoucher,"4");
        $voucher5 = getStr1('"title":"','",',$cekvoucher,"5");
        $voucher6 = getStr1('"title":"','",',$cekvoucher,"6");
        echo "\n".color("yellow","!] Total voucher ".$total." : ");
        echo color("green","1. ".$voucher1);
        echo "\n".color("green","                     2. ".$voucher2);
        echo "\n".color("green","                     3. ".$voucher3);
        echo "\n".color("green","                     4. ".$voucher4);
        echo "\n".color("green","                     5. ".$voucher5);
        echo "\n".color("green","                     6. ".$voucher6);
        $expired1 = getStr1('"expiry_date":"','"',$cekvoucher,'1');
        $expired2 = getStr1('"expiry_date":"','"',$cekvoucher,'2');
        $expired3 = getStr1('"expiry_date":"','"',$cekvoucher,'3');
        $expired4 = getStr1('"expiry_date":"','"',$cekvoucher,'4');
        $expired5 = getStr1('"expiry_date":"','"',$cekvoucher,'5');
        $expired6 = getStr1('"expiry_date":"','"',$cekvoucher,'6');
         setpin:
         echo "\n".color("nevy","?] Mau set pin?: y/n ");
         $pilih1 = trim(fgets(STDIN));
         if($pilih1 == "y" || $pilih1 == "Y"){
         //if($pilih1 == "y" && strpos($no, "628")){
         echo color("red","========( PIN ANDA = 112233 )========")."\n";
         $data2 = '{"pin":"112233"}';
         $getotpsetpin = request("/wallet/pin", $token, $data2, null, null, $uuid);
         echo "Otp set pin: ";
         $otpsetpin = trim(fgets(STDIN));
         $verifotpsetpin = request("/wallet/pin", $token, $data2, null, $otpsetpin, $uuid);
         echo $verifotpsetpin;
         }else if($pilih1 == "n" || $pilih1 == "N"){
         die();
         }else{
         echo color("red","-] GAGAL!!!\n");
         }
         }
         }
         }
         }else{
         goto setpin;
         }
         }else{
         echo color("red","-] Otp yang anda input salah");
         echo"\n==================================\n\n";
         echo color("yellow","!] Silahkan input kembali\n");
         goto otp;
         }
         }else{
         echo color("red","NOMOR SUDAH TERDAFTAR/SALAH !!!");
         echo "\nMau ulang? (y/n): ";
         $pilih = trim(fgets(STDIN));
         if($pilih == "y" || $pilih == "Y"){
         echo "\n==============Register==============\n";
         goto ulang;
         }else{
         echo "\n==============Register==============\n";
         goto ulang;
  }
 }
}
echo change()."\n"; ?>
