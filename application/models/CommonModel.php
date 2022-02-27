<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CommonModel extends CI_Model{
	function __construct(){
        parent::__construct();
    }
    function do_insert($table,$data){
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }
    function getuserDetails($id=""){
        $query =$this->db->query("SELECT * FROM t_user u LEFT JOIN t_role r ON r.`Id`=u.`Role_Id` WHERE u.`Id`= '".$id."'")->row();
        return $query;
        
    }
    function getcalldetails(){
        $count=0;
        $query =$this->db->query("SELECT COUNT(*) overallemergencycount, u.`firstName` FROM `tripforemergencyspot` e JOIN `userdetails` u ON u.`Id`=e.`userdetails` WHERE e.`tripStartDateTime`>= CURRENT_DATE GROUP BY e.`userdetails`")->result_array();

        $query =$this->db->query("SELECT COUNT(*) overallterminalcount,u.`firstName` FROM `terminalcasepatientinfo` t JOIN `userdetails` u ON u.`Id`=t.`agentId`WHERE t.`insertedDateTime`>=CURRENT_DATE GROUP BY t.`agentId`")->result_array();

        $query =$this->db->query("SELECT COUNT(*) overallhospitalcount,u.`firstName` FROM `hospitaltransferpatientinfo` t JOIN `userdetails` u ON u.`Id`=t.`agentId` WHERE t.`insertedDateTime`>=CURRENT_DATE GROUP BY t.`agentId`")->result_array();

        $query =$this->db->query("SELECT COUNT(*) overallfeedbackcount,u.`firstName` FROM `feedback` t JOIN `userdetails` u ON u.`Id`=t.`userdetails` WHERE t.`logDateTime`>=CURRENT_DATE GROUP BY t.`userdetails`")->result_array();

        $query =$this->db->query("SELECT COUNT(*) overallfeedbackcount,u.`firstName` FROM `feedback` t JOIN `userdetails` u ON u.`Id`=t.`userdetails` WHERE t.`logDateTime`>=CURRENT_DATE GROUP BY t.`userdetails`")->result_array();


        $query =$this->db->query("SELECT COUNT(*) overallemergencycount, u.`firstName` FROM `tripforemergencyspot` e JOIN `userdetails` u ON u.`Id`=e.`userdetails` WHERE e.`tripStartDateTime`>= CURRENT_DATE GROUP BY e.`userdetails`")->result_array();

        $query =$this->db->query("SELECT COUNT(*) overallemergencycount, u.`firstName` FROM `tripforemergencyspot` e JOIN `userdetails` u ON u.`Id`=e.`userdetails` WHERE e.`tripStartDateTime`>= CURRENT_DATE GROUP BY e.`userdetails`")->result_array();

        //$data= array_merge($query1,$query2,$query3,$query4,$query5);

        return $query;
        
    }
}