<?php

defined('BASEPATH') OR exit('No direct script access allowed');
if (!function_exists('assets_url')) {

    function assets_url() {
        return base_url() . 'assets/';
    }

}
if (!function_exists('uploads_url')) {

    function uploads_url() {
        return base_url() . 'uploads/';
    }

}
if (!function_exists('thumbs_url')) {

    function thumbs_url() {
        return base_url() . 'uploads/thumbs/';
    }

}