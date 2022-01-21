<?php
$curl= curl_init();
curl_setopt($curl, CURLOPT_URL, "http://email.hearaman.com?email=k.lankesh33@gmail.com&name=Hearaman&subject=Somthing&body=mail");

//For Post method
//curl_setopt($curl, CURLOPT_POST,true);
//url_setopt($curl,CURLOPT_POSTFIELDS,array("email"=>"hearaman@gmail.com","name"=>"Hearman","subject"=>"My Subject","body"=>"sample email"));

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$data = curl_exec($curl);

echo $data;
?>