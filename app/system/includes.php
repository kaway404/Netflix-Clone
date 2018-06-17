<?php
function home_index (){
	include './app/components/home/home_index.php';
}
function dashboard (){
	include './app/components/dashboard/dashboard.php';
}
function browse (){
	include './app/components/dashboard/browse.php';;
}
function createprofile (){
	include './app/components/dashboard/create_profile.php';
}
function editprofile (){
	include './app/components/dashboard/edit_profile.php';
}
function editandoprofile () {
	include './app/components/dashboard/editandoprofile.php';
}
function login (){
	include './app/components/account/login.php';
}
function register (){
	include './app/components/account/register.php';
}
function database (){
	include './app/database/config.php';
}
?>