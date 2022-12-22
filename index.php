<?php
/**
**
** In the name of the god of black hearts
** dev : @ayhan_dev
** channel : @Ayhan_Mohammadi
** d.l : @Caesar_full
** Open source project to create a domain in Sipnel
** Version phP : 8
** 
**/
$cpanelusername = "AyhanMohammadi"; //user cpanel
$cpanelpassword = "#@57*/T#Tilm@$/]c@H-n"; //pass cpanel

$url = 'devexpr.site'; //It is the main domain

$subdomain = "ayhan."; //Your domain with . Put it like an example
$directory = "/public_html/";  //Where to open the domain folder

$query = "https://$url:2083/json-api/cpanel?cpanel_jsonapi_func=addaddondomain&cpanel_jsonapi_module=AddonDomain&cpanel_jsonapi_version=2&newdomain=$domain&subdomain=$subdomain&dir=$directory";

$curl = curl_init();                            
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER,0);   
curl_setopt($curl, CURLOPT_SSL_VERIFYHOST,0);   
curl_setopt($curl, CURLOPT_HEADER,0);           
curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);   
$header[0] = "Authorization: Basic " . base64_encode($cpanelusername.":".$cpanelpassword) . "\n\r";
curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
curl_setopt($curl, CURLOPT_URL, $query);        
$result = curl_exec($curl);
if ($result == false) {
    error_log("curl_exec threw error \"" . curl_error($curl) . "\" for $query");
}
curl_close($curl);
?>