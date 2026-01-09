<?php
require_once __DIR__ . '\TeamMember.php';
class Developer extends TeamMember {
    
function __construct(){
     
}

function canCreateProject(){
    return 'No';
}
   function canAssignTasks(){}
   function getRolePermissions(){

   }
}