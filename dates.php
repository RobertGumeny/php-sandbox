<?php
    date_default_timezone_set('America/Denver');
    echo date('F jS h:i:s A T'); 

    echo '<br>';
    $timestamp = mktime(10, 15, 0, 5, 28, 1988); // (hr, min, sec, month, day, year, is_dst)
    $timestamp2 = strtotime('7:00pm August 22nd 2020');
    $timestamp3 = strtotime('tomorrow');
    $timestamp4 = strtotime('next Sunday');
    $timestamp5 = strtotime('+2 Months');

    echo date('m/d/Y h:ia', $timestamp);
    echo '<br>';
    echo date('m/d/Y h:ia', $timestamp2);
    echo '<br>';
    echo date('m/d/Y h:ia', $timestamp3);
    echo '<br>';
    echo date('m/d/Y h:ia', $timestamp4);
    echo '<br>';
    echo date('m/d/Y h:ia', $timestamp5);
    echo '<br>';
?>