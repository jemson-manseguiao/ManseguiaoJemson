<?php
    include 'Function.php';

    //1maximum range of a triangle
    if(isset($_GET['submit']))
     // Get input and conver to integer
        $triangle1 = intval($_GET['triangle1']);
        $triangle2 = intval($_GET['triangle2']);

        // Call the function
        echo "<h3> output: third_side($triangle1, $triangle2)</h3>";


    // 2Count all ones in Binary
    if(isset($_GET['count'])){
        // Get input and conver to integer
        $num = intval($_GET['num']);

        // Call the function
        echo "<h3> Output: " . countAllOnes($num) . "</h3>";
    }



    //3receives 2 parts of a path
    if (isset($_GET['submit'])) {
        $srate = $_GET['srate'];
        $prate = $_GET['prate'];

        echo "<h3> Output: " . separate($srate, $prate);

    }





    // 4Check if number is a sastry number
    if(isset($_GET['sastry'])){
        // Get input and conver to integer
        $num = intval($_GET['num']);

        // Call the function
        echo "<h3> Output: " . isSastry($num) . "</h3>";
    }