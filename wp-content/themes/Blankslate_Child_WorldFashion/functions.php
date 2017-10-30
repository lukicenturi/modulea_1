<?php
    define("DIR", get_stylesheet_directory_uri());

    function manage_user(){
        global $user_ID;

        $users = get_userdata($user_ID);
        if($users->user_login == '4Clients'){
            remove_menu_page('tools.php');
            remove_menu_page('themes.php');
            remove_menu_page('options-general.php');
            remove_menu_page('edit-comments.php');
            remove_menu_page('users.php');
        }
    }

    add_action('admin_init', 'manage_user');

    function change_logo(){
        echo `<style type='style/css'>
            body{
                background:black;
            }
            
            h1 a{
                background-image:url('<?= DIR ?>/image/logo.png') !important;
                margin:0 !important;
            }

        </style>`;
    }

    add_action('login_head', 'change_logo');


    function getMainVideo(){
        $video = get_field('main_video');
        return $video;
    }

    function getEventVideo(){
        $videos = get_field('video_gallery');
        $videos = get_field('video', $videos[0]);
        $array = array();
        foreach($vidoes as $video){
            array_push($array, array(
                'src' => get_field('video',$video),
                'place' => get_field('place', $video),
                'year' => get_field('year', Date('Y', strtotime(get_field('year'))))
            ));
        }

        return $array;
    }


?>