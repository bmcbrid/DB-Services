<?php
    /**
     * This file is responsible for creating and initializing the FileMaker object.
     * This object allows you to manipulate data in the database. To do so, simply
     * include this file in the PHP file that needs access to the FileMaker database.
     */

    //include the FileMaker PHP API
	//Synatx: require_once ('FileMaker.php')
    require_once ('FileMaker.php');


    //create the FileMaker Object
	//Syntax $fm = new FileMaker()
    $fm = new FileMaker();


    //Specify the FileMaker database
	//Syntax: $fm->setProperty('database', 'FileName')
    $fm->setProperty('database', 'PRODOOR');

    //Specify the Host
	//Syntax:  $fm->setProperty('hostspec', 'http://IPAddress or http://DomainName')
    $fm->setProperty('hostspec', 'https://fm.prodoorsystems.com');


	//To gain access to the database, use an account assigned with php privileges,
    //Your live solution should have a specific php/web access account that limits access to the file.
    //Syntax: $fm->setProperty('username', 'AccountName')
	//Syntax: $fm->setProperty('password', 'Password')

    $fm->setProperty('username', 'web');
    $fm->setProperty('password', '#Pla1nf137d!');