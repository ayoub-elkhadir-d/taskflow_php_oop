<?php
require_once __DIR__ . '\TeamMember.php';
class Manager extends TeamMember {
    
function __construct(){
     
}
function canCreateProject(){
    return 'Yes';
}
function canAssignTasks(){}
function getRolePermissions(){
          return "Manager";
}
}