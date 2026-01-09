<?php
 abstract class TeamMember {
    protected $id;
    protected $username;
    protected $teamId;
    protected $email;
    protected $createdAt;

    function __construct($id,$username,$teamId,$email,$createdAt){
    $this->id =$id;
    $this->username =$username;
    $this->teamId =$teamId;
    $this->email =$email;
    $this->createdAt =$createdAt;
    }
    function getid(){
        return $this->id;
    }
    
    function getusername(){
        return $this->username;
    }
    
    function getteamId(){
        return $this->teamId;
    }
    

    function getemail(){
        return $this->email;
    }
    function getcratedat(){
        return $this->createdAt;
    }
    
    abstract function canCreateProject();
    abstract function canAssignTasks();
    abstract function getRolePermissions();
   
   function verifyPassword(){}
   function setPassword(){}
}
