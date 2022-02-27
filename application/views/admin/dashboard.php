<!DOCTYPE html>
<html lang="en">
	<?php $this->load->view('admin/css.php'); ?> 
	<?php $this->load->view('admin/header.php'); ?> 
    <div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style="background-color:white;"> 
		 		<div id="mainContentdiv">
			 		<section class="content-header">
			    	 	<h1>
						    Home
						    <small>Dashboard</small>
					  	</h1>
				    </section>
				    <section class="content">
				      <div class="row">
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-aqua">
				            <div class="inner">
				              <h3><?=json_decode($callcount)->overallcount;?></h3>
				              <h5><b>Total No. Of Calls</b></h5>
				            </div>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-green">
				            <div class="inner">
				              <h3><?=$totalambulance->totalambulance;?></h3>
				              <h5><b>Total No. of Ambulance</b></h5>
				            </div>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-yellow">
				            <div class="inner">
				              <h3><?=$totaldriver->totaldriver;?></h3>
				              <h5><b>Total No. of Driver</b></h5>
				            </div>
				          </div>
				        </div>
				        <div class="col-lg-3 col-xs-6">
				          <div class="small-box bg-red">
				            <div class="inner">
				              <h3><?=$totalemr->totalemr;?></h3>
				              <h5><b>Total No. of EMR</b></h5>
				            </div>
				          </div>
				        </div>
				      </div>
				      <div class="row">
				      <div class="col-lg-3 col-xs-3">
						  	<div class="box box-primary">
					            <div class="box-header with-border">
					              <h3 class="box-title">Total No. of Call Information</h3>
					            </div>
					            <div class="box-body">
					              <div class="table-responsive">
						            <table class="table table-bordered">
						                <tr>
						                  <td>1.</td>
						                  <td>Emergency Calls</td>
						                  <td><span class="badge bg-yellow"><?=$totalemargencycall->totalemargencycall;?></span></td>
						                </tr>
						                <tr>
						                  <td>2.</td>
						                  <td>Hospital to Hospital Call</td>
						                  <td><span class="badge bg-light-blue"><?=$totaltripforhospitaltohospitaltransfer->totaltripforhospitaltohospitaltransfer;?></span></td>
						                </tr>
						                <tr>
						                  <td>3.</td>
						                  <td>Mediacl Advice & Counselling Call</td>
						                  <td><span class="badge bg-blue"><?=$totalpatientdetails->totalpatientdetails;?></span></td>
						                </tr>
						                <tr>
						                  <td>4.</td>
						                  <td>Enquaries Call</td>
						                  <td><span class="badge bg-green"><?=$totalfeedback->totalfeedback;?></span></td>
						                </tr>
						                <tr>
						                  <td>5.</td>
						                  <td>Other Trips Call</td>
						                  <td><span class="badge bg-yellow"><?=$totaltripforotherstypeinfo->totaltripforotherstypeinfo;?></span></td>
						                </tr>
						                 <tr>
						                  <td>6.</td>
						                  <td>Airport Pick and Drop Call</td>
						                  <td><span class="badge bg-red"><?=$totaltripparointernationalairportpatientdrop->totaltripparointernationalairportpatientdrop;?></span></td>
						                </tr>
						                <tr>
						                  <td>7.</td>
						                  <td>Terminal Patient Call</td>
						                  <td><span class="badge bg-green"><?=$totaltripforterminalcase->totaltripforterminalcase;?></span></td>
						                </tr>
						              </table>
						          </div>
					            </div>
					          </div>
						  </div>
						  <div class="col-lg-3 col-xs-3">
						  	<div class="box box-primary">
					            <div class="box-header with-border">
					              <h3 class="box-title">Agent-Wise Call Count</h3>
					            </div>
					            <div class="box-body">
					              <div class="table-responsive">
						            <table class="table table-bordered">
						            	<!-- <tr>
						                  <td>No.</td>
						                  <td>Agent Name</td>
						                  <td>Emergency</td>
						                  <td>Other Trip</td>
						                  <td>Hospital Trip</td>
						                  <td>Inquires</td>
						                  <td>Paro Pick/Drop</td>
						                  <td>Terminal</td>
						                  <td>HMA</td>
						                </tr> -->
						            	<?php foreach($count as $i=> $event): ?>
						                <tr>
						                  <td><?=$i+1?></td>
						                  <td><?php echo $event['firstName'];?></td>
						                  <td><span class="badge bg-yellow"><?php echo $event['overallemergencycount'];?></span></td>
						                  <!-- <td><span class="badge bg-yellow"><?php echo $event['overallemergencycount'];?></span></td>
						                  <td><span class="badge bg-yellow"><?php echo $event['overallhospitalcount'];?></span></td>
						                  <td><span class="badge bg-yellow"><?php echo $event['overallfeedbackcount'];?></span></td>
						                  <td><span class="badge bg-yellow"><?php echo $event['overallemergencycount'];?></span></td>
						                  <td><span class="badge bg-yellow"><?php echo $event['overallterminalcount'];?></span></td>
						                  <td><span class="badge bg-yellow"><?php echo $event['overallemergencycount'];?></span></td> -->
						                  
						                </tr>
						                <?php endforeach;?>
						              </table>
						              
						          </div>
					            </div>
					          </div>
						  </div>
						  <div class="col-lg-3 col-xs-3">
						  	<div class="box box-primary">
					            <div class="box-header with-border">
					              <h3 class="box-title">Ambulance Status Information</h3>
					            </div>
					            <div class="box-body">
					              <div class="table-responsive">
						            <table class="table table-bordered">
						                <tr>
						                  <td>1.</td>
						                  <td>Assigned Ambulance</td>
						                  <td><span class="badge bg-yellow"><?=$totalassignedambulance->totalassignedambulance;?></span></td>
						                </tr>
						                <tr>
						                  <td>2.</td>
						                  <td>Available Ambulance</td>
						                  <td><span class="badge bg-light-blue"><?=$totalavailableambulance->totalavailableambulance;?></span></td>
						                </tr>
						                <tr>
						                  <td>3.</td>
						                  <td>Under maintainace Ambulance</td>
						                  <td><span class="badge bg-green"><?=$totalmaintanceambulance->totalmaintanceambulance;?></span></td>
						                </tr>
						                <tr>
						                  <td>4.</td>
						                  <td>Off-Road Ambulance</td>
						                  <td><span class="badge bg-red"><?=$totaloffroadambulance->totaloffroadambulance;?></span></td>
						                </tr>
						              </table>
						          </div>
					            </div>
					          </div>
						  </div>
						  <div class="col-lg-3 col-xs-3">
						  	<div class="box box-primary">
					            <div class="box-header with-border">
					              <h3 class="box-title">Driver & EMR Status Information</h3>
					            </div>
					            <div class="box-body">
					              <div class="table-responsive">
						            <table class="table table-bordered">
						                <tr>
						                  <td>1.</td>
						                  <td>EMR on Leave</td>
						                  <td><span class="badge bg-yellow"><?=$leavedriver->leavedriver;?></span></td>
						                </tr>
						                <tr>
						                  <td>2.</td>
						                  <td>Driver On Leave</td>
						                  <td><span class="badge bg-light-blue"><?=$leaveemr->leaveemr;?></span></td>
						                </tr>
						              </table>
						              <div class="alert alert-danger alert-dismissible">
						                <h4><i class="icon fa fa-ban"></i> Note!</h4>
						                <p style="text-align: justify;">The information displayed here is based on the real data the all the system users have entered.Please make sure that all the system user has to enter the correct information.<b>LETS FIGHT COVID-19</b></p>
						              </div>
						          </div>
					            </div>
					          </div>
						  </div>
						</div>
				  </section>
		     	</div>
			</div>
	        <?php
			    $this->load->view('admin/footer.php');
			?> 
        </div> 
    </div>
	</body>
  
</html> 
