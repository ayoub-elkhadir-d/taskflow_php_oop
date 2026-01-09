<?php
require_once __DIR__ . '\TeamMember.php';

class Administrator extends TeamMember {

function __construct(){
     echo "admin";
}

function canCreateProject(){}
   function canAssignTasks(){}
   function getRolePermissions(){}

}