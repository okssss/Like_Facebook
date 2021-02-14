function fb_fan_count($facebook_name){
    // Например: http://graph.facebook.com/digimantra
    $data = json_decode(file_get_contents("http://graph.facebook.com/".$facebook_name));
    echo $data->likes;
}