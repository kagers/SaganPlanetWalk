<!DOCTYPE html>
<html lang="en">

    <head>
        <link href='css/styles.css' rel='stylesheet'>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
    </head>
    
    <body>
        <div id="header" >
            <div id="backgroundchange">
                <div class="img"><img src="<?php echo $image; ?>" alt="Header Image" /></div>
            </div>
            <img class="left" id="science" src="img/logo_science.png"><br><br><br>
            <img class="left" id="sagan" src="img/logo_sagan.png">
            <div class="right">
                <img  id="spif" class="center" src="img/logo_spif.png"><br>
                <img  id="cornell" class="center" src="img/logo_cornell.png">
            </div>            
        </div>
        
        <div class="nnavbar">
            <a href="#" class="active">Home</a>
            <a href="#">Our Sun</a>
            <div class="ddropdown">
                <button class="ddropbtn">Rocky Planets 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="ddropdown-content">
                    <a href="#">Mercury</a>
                    <a href="#">Venus</a>
                    <a href="#">Earth</a>
                </div>
            </div> 
            <div class="ddropdown">
                <button class="ddropbtn">Giant Planets 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="ddropdown-content">
                    <a href="#">Jupiter</a>
                    <a href="#">Saturn</a>
                    <a href="#">Uranus</a>
                    <a href="#">Neptune</a>
                </div>
            </div>
            <div class="ddropdown">
                <button class="ddropbtn">Other Bodies 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="ddropdown-content">
                    <a href="#">Main Asteroid Belt</a>
                    <a href="#">Kuiper Belt</a>
                    <a href="#">Oort Cloud</a>
                    <a href="#">Alpha Centauri</a>
                </div>
            </div>
            <a href="">Contact</a>
        </div>