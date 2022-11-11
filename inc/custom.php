<?php
/* 
Use this file to add custom PHP code to your theme or plugin 
*/

// Warning, this snippet doesn't check if the user is an admin, and it could pose security risks if you allow non-admins
// to upload images

//WP Allow SVG
add_filter("upload_mimes", function ($mimes) {
    $mimes["svg"] = "image/svg+xml";
        return $mimes;
    });
    
add_filter("wp_check_filetype_and_ext", function ($result, $file, $filename, $mimes) {
    if (!$result["ext"] || !$result["type"]) {
        $filetype = wp_check_filetype($filename, $mimes);
        $ext = $filetype["ext"];
        $type = $filetype["type"];
        $allowed_types = [
            "svg" => [
                "image/svg+xml"
            ],
        ];
        if (isset($allowed_types[$ext]) && in_array($type, $allowed_types[$ext])) {
            $result = [
                "ext" => $ext,
                "type" => $type,
                "proper_filename" => $filename
            ];
        }
    }
    return $result;
}, 10, 4);

?>