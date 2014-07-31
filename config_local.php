<?php
    if (!isset($config))
        $config = array();
  
    /*
     * The directory containing calibre's metadata.db file, with sub-directories
     * containing all the formats.
     * BEWARE : it has to end with a /
     */
    $config['calibre_directory'] = '/media/usb/books/';
    
    /*
     * Catalog's title
     */
    $config['cops_title_default'] = "eBook Catalog";
    
    /*
     * use URL rewriting for downloading of ebook in HTML catalog
     * See README for more information
     *  1 : enable
     *  0 : disable
     */
    $config['cops_use_url_rewriting'] = "1";

    $config['cops_author_name'] = "theCoach";

    $config['cops_author_uri'] = "http://www.twebl.info";

    $config['cops_author_email'] = "twelhelp@gmail.com";

    $config['cops_x_accel_redirect'] = "X-Sendfile";

    $config['default_timezone'] = "America/Boise";

    $config['cops_recentbooks_limit'] = '50';

    $config['cops_generate_invalid_opds_stream'] = "1";

    $config['cops_update_epub-metadata'] = "1";

    $config['cops_mail_configuration'] = array( "smtp.host"     => "smtp.gmail.com",
                                                "smtp.username" => "tweblbooks@gmail.com",
                                                "smtp.password" => "Ash1993*",
                                                "smtp.secure"   => "ssl",
                                                "address.from"  => "tweblbooks@gmail.com"
                                                );

    $config['cops_html_tag_filter'] = "0";

    $config ['cops_ignored_categories'] = array ("publisher", "language", "rating");

