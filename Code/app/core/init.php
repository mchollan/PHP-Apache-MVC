<?php 

spl_autoload_register(function($classname){

	require $filename = "./app/models/".ucfirst($classname).".php";
});

require 'config.php';
require 'Auth.php';
require 'functions.php';
require 'Database.php';
require './app/repositories/UploadsRepo.php';
require 'Model.php';
require 'Controller.php';
require 'App.php';