<html>
<?php include "header.html"?>
<body>
<div class="navigation">
    <div class="container">
        <div class="row">
            <div class="col-md-3 hidden-sm hidden-xs">
                <a href="index.php">
                    <img src="res/img/shutterstock_36141139_hp.jpg" width="200">
                </a>
            </div>
            <div class="col-md-9">
                <ul class="nav nav-pills hidden-xs">
                    <li><a href="index.php">Startseite</a></li>
                    <li><a href="unsere_imkerei.php">Unsere Imkerei</a></li>
                    <li><a href="produkte.php">Produkte</a></li>
                    <li><a href="herstellung.php">Honigerzeugung</a></li>
                    <li><a href="kontakt.php">Kontakt</a></li>
                </ul>
                <div class="visible-xs">
                    <div class="row">
                        <div class="col-xs-2">
                            <a onclick="openMenu()">
                                <svg style="width:35px;height:50px" viewBox="0 0 24 24">
                                    <path fill="#000000" d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-xs-8" style="text-align: center; font-size: 22px; margin-top: 9px;">
                            Imkerei Heimbürger
                        </div>
                        <div class="col-xs-2" style="text-align: right; padding-left: 0;">
                            <img src="res/img/shutterstock_36141139_hp.jpg" width="47">
                        </div>
                    </div>
                </div>

                <script>
                    function openMenu(){
                        $('#navigation-small').addClass('open');
                        $('#toggle-helper').addClass('open');
                    }
                    function closeMenu(href){
                        $('#navigation-small').removeClass('open');
                        $('#toggle-helper').removeClass('open');

                        if(href){
                            setTimeout(function(){
                                window.location = href;
                            },500);
                        }
                    }
                </script>
                <div id="navigation-small" class="navigation-small visible-xs">
                    <div class="navigation-img">
                        <a onclick="closeMenu()">
                            <svg style="width:35px;height:50px" viewBox="0 0 24 24">
                                <path fill="#000000" d="M19,6.41L17.59,5L12,10.59L6.41,5L5,6.41L10.59,12L5,17.59L6.41,19L12,13.41L17.59,19L19,17.59L13.41,12L19,6.41Z" />
                            </svg>
                        </a>
                        <div class="pull-left" style="font-size: 22px;padding-left: 15px;padding-top: 9px;">
                            Menü
                        </div>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item" onclick="javascript:closeMenu('index.php')">
                            <a id="index" href="#">Startseite</a>
                        </li>
                        <li class="list-group-item" onclick="javascript:closeMenu('unsere_imkerei.php')">
                            <a id="ueberMich" href="#">unsere Imkerei</a>
                        </li>
                        <li class="list-group-item" onclick="javascript:closeMenu('produkte.php')">
                            <a id="produkte" href="#">Produkte</a>
                        </li>
                        <li class="list-group-item" onclick="javascript:closeMenu('herstellung.php')">
                            <a id="produkte" href="#">Herstellung</a>
                        </li>
                        <li class="list-group-item" onclick="javascript:closeMenu('kontakt.php')">
                            <a id="kontakt" href="#">Kontakt</a>
                        </li>
                    </ul>
                    <ul class="list-group">
                        <li class="list-group-item" onclick="javascript:closeMenu('impressum.php')">
                            <a href="#">Impressum</a>
                        </li>
                        <li class="list-group-item" onclick="javascript:closeMenu('links.php')">
                            <a href="#">Links</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="content">
    <div class="container">

