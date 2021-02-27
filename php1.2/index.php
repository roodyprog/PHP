<?php
require "functions/robot_functions.php";

if(!empty($_GET['nameRobot']) and !empty($_GET['mentalRobot'])){
        $nameRobot = $_GET['nameRobot'];
        $mental = $_GET['mentalRobot'];

    }else{
        $nameRobot = generate();
        $mental= personality();
    }

require "views/homepage.phtml";