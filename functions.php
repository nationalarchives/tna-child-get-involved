<?php

function tnatheme_globals() {
    global $pre_path;
    global $pre_crumbs;
    $headers = apache_request_headers();
    if ( isset($_SERVER['HTTP_X_NGINX_PROXY']) && isset($headers['X-Host-Type']) && $headers['X-Host-Type'] == 'public' ) {
        $pre_crumbs = array(
            'About us' => '/about/',
            'Get involved' => '/about/get-involved/'
        );
        $pre_path = '/about/get-involved';
    } elseif (substr($_SERVER['REMOTE_ADDR'], 0, 3) === '10.') {
        $pre_path = '';
        $pre_crumbs = array(
            'Get involved' => '/'
        );
    } else {
        $pre_crumbs = array(
            'About us' => '/about/',
            'Get involved' => '/about/get-involved/'
        );
        $pre_path = '/about/get-involved';
    }
}
tnatheme_globals();

