<?php


class whois_ip
{
  private  $api = "https://restapi.neoistone.com/v2/whois/ip/";

    /**
     * whois_ip constructor.
     * @param $ip
     * @param $type
     */
    public function __construct($ip,$type)
    {
        $this->api .= $ip.'?type='.$type;
    }

    public function info(){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$this->api);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $server_output = curl_exec($ch);
        curl_close ($ch);
        return json_decode($server_output,1);
    }
}
