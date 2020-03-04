<?php

function storeImage($profile)
{
    if ($profile) {
        $images = array();
        foreach ($profile as $img) {

            $filename = $img->store('uploads', 'public');

            array_push($images, $filename);
        }

        return implode(",", $images);
    }
}

function deleteFile($oldimage):bool {

    if (file_exists(public_path('storage/'.$oldimage))){
        unlink(public_path('storage/'.$oldimage));

        return true;
    }

    return false;
}