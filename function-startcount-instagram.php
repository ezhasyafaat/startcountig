<?php
/*-----------------------------------------------
     * START COUNT INSTAGRAM
     * PROGRAMMING LANGUANGE : PHP
     * AUTHOR : FEcode (Muhammad Ezha Syafaat)
     * CREATED : 26 - 07 -2019
     *-----------------------------------------------
     *
     * Dont change this copyright if you can't make like this
     * 
     * @copyright Copyright (c) 2019
     *
     */
function followers_count($data)
{
    $id = file_get_contents("https://www.instagram.com/web/search/topsearch/?query=" . $data);
    $id = json_decode($id, true);
    $count = $id['users'][0]['user']['follower_count'];
    return $count;
}
function likes_count($data)
{
    $id = file_get_contents("" . $data . "?&__a=1");
    $id = json_decode($id, true);
    $count = $id['graphql']['shortcode_media']['edge_media_preview_like']['count'];
    return $count;
}
function views_count($data)
{
    $id = file_get_contents("" . $data . "?&__a=1");
    $id = json_decode($id, true);
    $count = $id['graphql']['shortcode_media']['video_view_count'];
    return $count;
}
