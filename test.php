<?php

//Your First Srtring
$first_text = 'Your News {{count}} count Letter';

//Replace Array
$replace_array = [
    'count' => 1,
];

class Template {

    public function content_replace($replace_array, $result) {
        foreach ($replace_array as $key => $value) {
            if (strpos($result, $key) !== false) {
                $result = str_replace('{{' . $key . '}}', $value, $result);
            }
        }
        return $result;
    }

}

$template = new Template();
$res = $template->content_replace($replace_array, $first_text);
echo $res;
