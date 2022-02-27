<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller { 
    public function index(){
    $this->load->model('CommonModel');
    $overall_count=0;
    /*$count1=0;
    $count2=0;
    $count3=0;
    $count4=0;
    $count5=0;
    $count6=0;
    $count7=0;*/
    $query="SELECT COUNT(*) totalemargencycall FROM `tripforemergencyspot` c WHERE  c.`tripStartDateTime`>=CURRENT_DATE";
    $count1=$this->db->query($query)->row(); 
    $page_data['totalemargencycall'] =  $count1;     

    $query="SELECT COUNT(*) totaltripforhospitaltohospitaltransfer FROM `tripforhospitaltohospitaltransfer` c WHERE  c.`tripStartDateTime`>=CURRENT_DATE";
    $count2=$this->db->query($query)->row(); 
    $page_data['totaltripforhospitaltohospitaltransfer'] = $count2; 

    $query="SELECT COUNT(*) totaltripforotherstypeinfo FROM `tripforotherstypeinfo` c WHERE  c.`tripStartTime`>=CURRENT_DATE";
    $count3=$this->db->query($query)->row();
    $page_data['totaltripforotherstypeinfo'] = $count3;


    $query="SELECT COUNT(*) totaltripforterminalcase FROM `tripforterminalcase` c  WHERE  c.`tripAssignedDateTime`>=CURRENT_DATE";
    $count4=$this->db->query($query)->row();
    $page_data['totaltripforterminalcase'] = $count4;

    $query="SELECT COUNT(*) totaltripforairlifttracker FROM `tripforairlifttracker` c WHERE  c.`callLandedTime`>=CURRENT_DATE";
    $page_data['totaltripforairlifttracker'] = $this->db->query($query)->row();
   

    $query="SELECT COUNT(*) totaltripparointernationalairportpatientdrop FROM `tripparointernationalairportpatientdrop` c WHERE  c.`tripStartDateTime`>=CURRENT_DATE";
    $count5=$this->db->query($query)->row();
    $page_data['totaltripparointernationalairportpatientdrop'] = $count5;

    $query="SELECT COUNT(*) totalpatientdetails FROM `patientdetails` c WHERE  c.`createddatetime`>=CURRENT_DATE";
    $count6=$this->db->query($query)->row();
    $page_data['totalpatientdetails'] = $count6;

    $query="SELECT COUNT(*) totalfeedback FROM `feedback` c WHERE  c.`logDateTime`>=CURRENT_DATE";
    $count7=$this->db->query($query)->row();
    $page_data['totalfeedback'] = $count7;

    $query="SELECT COUNT(*) totalavailableambulance FROM `ambulancedetails` c WHERE  c.`vehicleStatus`=1";
    $page_data['totalavailableambulance'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) totaloffroadambulance FROM `ambulancedetails` c WHERE  c.`vehicleStatus`=9";
    $page_data['totaloffroadambulance'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) totalassignedambulance FROM `ambulancedetails` c WHERE  c.`vehicleStatus`=2";
    $page_data['totalassignedambulance'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) totalmaintanceambulance FROM `ambulancedetails` c WHERE  c.`vehicleStatus`=10";
    $page_data['totalmaintanceambulance'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) totalambulance FROM `ambulancedetails` c WHERE  c.`enabled`=1";
    $page_data['totalambulance'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) totaldriver FROM `driverdetails` c WHERE  c.`currentStatus`=1";
    $page_data['totaldriver'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) totalemr FROM `emergencystaff` c WHERE  c.`enabled`=1";
    $page_data['totalemr'] = $this->db->query($query)->row();

    $query="SELECT COUNT(*) leavedriver FROM `driverdetails` c WHERE  c.`currentStatus`=3";
    $page_data['leavedriver'] = $this->db->query($query)->row();
    
    $query="SELECT COUNT(*) leaveemr FROM `emergencystaff` c WHERE  c.`enabled`=3";
    $page_data['leaveemr'] = $this->db->query($query)->row();
    $overall_count=$count1+$count2+$count3+$count4+$count5+$count6+$count7;

     $data = (object) [
            "overallcount" => $overall_count
        ];

    //$data = array_merge($count1,$count2,$count3,$count4,$count5,$count6,$count7);
    $page_data['callcount'] = json_encode($data);
    /*$query="SELECT COUNT(*) overallemergencycount, u.`firstName` FROM `tripforemergencyspot` e JOIN `userdetails` u ON u.`Id`=e.`userdetails` WHERE e.`tripStartDateTime`>= CURRENT_DATE GROUP BY e.`userdetails`";
    $page_data['overallcount'] =$this->db->query($query)->result_array();*/
    $page_data['count'] =$this->CommonModel->getcalldetails();
    //die($this->CommonModel->getcalldetails());


    $this->load->view('admin/dashboard', $page_data);
    }
}








