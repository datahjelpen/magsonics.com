<?php
    $brand = new StdClass();
    
    $brand->{'name'}          = 'MagSonics';
    $brand->{'name_official'} = 'MagSonics';
    $brand->{'description'}   = 'MagSonics';
    
    $brand->{'color_primary'} = '#7112a2';
    $brand->{'color_accent'}  = '#000000';
?>
<!DOCTYPE html>
<!--
             // Datahjelpen AS //              
                                               
 ///////////////////////////////////////////// 
 //                                         // 
 //      ///////\\        //        //      // 
 //      //      \\       //        //      // 
 //      //       \\      //        //      // 
 //      //        \\     //        //      // 
 //      //        //     ////////////      // 
 //      //       //      //        //      // 
 //      //      //       //        //      // 
 //      /////////        //        //      // 
 //                                         // 
 //                                         // 
 ///////////////////////////////////////////// 
                                               
                 //         \\                 
                //           \\                
               |||||||||||||||||               
                                               
            https://datahjelpen.no            
-->
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $brand->name; ?></title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="/manifest.json">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="<?= $brand->color_primary; ?>">
    <meta name="apple-mobile-web-app-title" content="<?= $brand->name; ?>">
    <meta name="application-name" content="<?= $brand->name; ?>">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="/css/global.css">