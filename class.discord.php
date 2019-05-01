<?php 
class discord{

    public function __construct(){
        $this->bot_url = "https://discordapp.com/api/webhooks/551835221650178058/CKOtfa-kcUlfSl09003Fk_LY98N96w0xtMGPH02Y5W3C1hK3tmU0iJ043U3LMa5ycQm9";
    }

    public function send_one(){
        $data = array(
            'content' => "CONTENT",
            'avatar_url' => '',
            'embeds' => array(
                array(
                    'title' => 'TITLE',
                    'description' => 'DESCRIPTION',
                    'author' => array(
                        'name' => 'AUTEUR',
                    ),
                    'fields' => array(
                        array(
                            "name" => "Data A",
                            "value" => "Value A",
                            "inline" => true
                        ),
                        array(
                            "name" => "Data A",
                            "value" => "Value A",
                            "inline" => true
                        )
                    ),
                    'footer' => array(
                        'text' => date('d/m/Y à H:i:s', time())
                    )
                )
            ),
        );

        $curl = curl_init($this->bot_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type" => "application/json"));
        return curl_exec($curl);
        curl_close($curl);
    }

    public function send_two(){
        $data = array(
            'content' => "CONTENT",
            'avatar_url' => '',
            'embeds' => array(
                array(
                    'title' => 'TITLE',
                    'description' => 'DESCRIPTION',
                    'author' => array(
                        'name' => 'AUTEUR',
                    ),
                    'fields' => array(
                        array(
                            "name" => "Data A",
                            "value" => "Value A",
                            "inline" => false
                        ),
                        array(
                            "name" => "Data A",
                            "value" => "Value A",
                            "inline" => false
                        )
                    ),
                    'footer' => array(
                        'text' => date('d/m/Y à H:i:s', time())
                    )
                )
            ),
        );

        $curl = curl_init($this->bot_url);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("Content-type" => "application/json"));
        return curl_exec($curl);
        curl_close($curl);
    }

}