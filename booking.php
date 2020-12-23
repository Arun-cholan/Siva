<?php  
require_once("includes.php");
$pval = $_POST["dvalid"];
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport" />
<title>Cholan Tours : Online Booking</title>
<?= $inc->styles(); ?>
<noscript>
<meta http-equiv="refresh" content="0;url=noscript.html">
</noscript>
</head>
<body>
<div class="wrapper">
  <?= $inc->main_header(); ?>
  <div class="content">
    <div class="form-title">
      <div class="row">
        <div class="col-md-12">
          <h4><i class="fa fa-pencil-square"></i> Booking Form</h4>
          <p><strong>Indian Panorama assures you that all your personal details collected as part of your travel will be kept 100% safe and will not be shared with anyone.</strong></p>
          <p> Please complete the following booking form. Please enter all the passenger names travelling (as they appear in their passports). Hotel vouchers will be issued under one name,
            this is the name to be listed first. </p>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <form method="post" id="bookingForm" autocomplete="off">
      <div class="row">
        <div class="col-md-12">
          <input type="hidden" value="<?php echo $pval; ?>" id="doval"/>
          <div class="box box-danger">
            <div class="box-body">
              <h4 class="head"><i class="fa fa-user-circle-o"></i> Passenger Details for Hotel / Transport Voucher Identification</h4>
              <hr>
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <table style="width:100%;">
                      <tr>
                        <td colspan="2"><label class="control-label">Given Name <span class="text-red">*</span> <span class="small text-maroon">(as in Passport)</span> </label>
                        </td>
                      </tr>
                      <tr>
                        <td width="25%"><select id="PSalutation" name="Salutation" class="form-control input-sm">
                            <option value="Mr">Mr</option>
                            <option value="Mrs">Mrs</option>
                            <option value="Ms">Ms</option>
                            <option value="Dr">Dr</option>
                            <option value="Prof">Prof</option>
                            <option value="Group">Group</option>
                          </select>
                        </td>
                        <td width="70%"><input type="text" id="txtClientName" name="ClientName" maxlength="40" class="form-control input-sm" style="width:100%;" required />
                        </td>
                      </tr>
                    </table>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Surname <span class="text-red">*</span> <span class="small text-maroon">(as in Passport)</span> </label>
                    <input type="text" id="txtClientSurName" name="ClientSurName" maxlength="40" class="form-control input-sm" required />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Gender <span class="text-red">*</span></label>
                    <select id="ddlGender" name="Gender" class="form-control input-sm">
                      <option value="">-- Select --</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Date of Birth <span class="text-red">*</span> <span class="small text-maroon">(dd/mm/yyyy)</span></label>
                    <div class="input-group">
                      <div class="input-group-addon"> <i class="fa fa-calendar"></i></div>
                      <input type="text" id="txtClientBirthDate" name="ClientBirthDate" maxlength="10" class="form-control input-sm" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Nationality <span class="text-red">*</span></label>
                    <select id="ddlNationality" name="NationalityCode" class="select2 form-control input-sm">
                      <option value="">-- Select --</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Passport Number</label>
                    <input type="text" id="txtPassportNo" name="PassportNo" maxlength="30" class="form-control input-sm" />
                  </div>
                </div>
              </div>
              <!-- First Row Ends Here ----->
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Email <span class="text-red">*</span></label>
                    <input type="text" id="txtClientEmail" name="ClientEmail" maxlength="50" class="form-control input-sm" readonly />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Alternate Email</label>
                    <input type="text" id="txtAlternateEmail" name="AlternateEmail" maxlength="50" class="form-control input-sm" />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Emergency ContactPerson <span class="text-red">*</span></label>
                    <input type="text" id="txtContactPerson" name="ContactPerson" maxlength="40" class="form-control input-sm" required />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Emergency Contact Phone <span class="text-red">*</span></label>
                    <input type="text" id="txtContactPersonMobile" name="ContactPersonMobile" maxlength="15" class="form-control input-sm" required />
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">Contact Mobile Number(s) While Travelling <span class="text-red">*</span></label>
                    <input type="text" id="txtContactTravellingMobile" name="ContactTravellingMobile" maxlength="50" class="form-control input-sm" required />
                  </div>
                </div>
              </div>
              <!-- Second Row Ends Here ----->
              <div class="row">
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Adult Pax <span class="text-red">*</span></label>
                    <input type="text" id="txtAdultPax" name="AdultPax" class="form-control input-sm" readonly />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Child Pax</label>
                    <input type="text" id="txtChildPax" name="ChildPax" class="form-control input-sm" readonly />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Infant</label>
                    <input type="text" id="txtInfant" name="Infant" class="form-control input-sm" readonly />
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label">Tour Start Date <span class="text-red">*</span> <span class="small text-maroon">(dd/mm/yyyy)</span></label>
                    <div class="input-group">
                      <div class="input-group-addon"> <i class="fa fa-calendar"></i></div>
                      <input type="text" id="txtTourStartDate" name="TourStartDate" maxlength="10" class="form-control input-sm" required />
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label class="control-label">Tour End Date <span class="text-red">*</span> <span class="small text-maroon">(dd/mm/yyyy)</span></label>
                    <div class="input-group">
                      <div class="input-group-addon"> <i class="fa fa-calendar"></i></div>
                      <input type="text" id="txtTourEndDate" name="TourEndDate" maxlength="10" class="form-control input-sm" required />
                    </div>
                  </div>
                </div>
              </div>
              <!-- Third Row Ends Here ----->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-primary">
            <div class="box-body">
              <h4 class="head"><i class="fa fa-envelope"></i> Address for Communication</h4>
              <hr>
              <div class="row">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="control-label">Address <span class="text-red">*</span> <span class="small text-maroon">(Door No / Street Name)</span></label>
                    <input type="text" id="txtAddress" name="Address" maxlength="100" class="form-control input-sm" />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">City <span class="text-red">*</span></label>
                    <input type="text" id="txtCityName" name="CityName" maxlength="40" class="form-control input-sm" required />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Country <span class="text-red">*</span></label>
                    <select id="ddlCountryName" name="CountryCode" class="form-control input-sm">
                      <option value="">-- Select --</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">Post Code <span class="text-red">*</span></label>
                    <input type="text" id="txtPostCode" name="PostCode" maxlength="10" class="form-control input-sm" required />
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="form-group">
                    <label class="control-label">TelePhone Number <span class="text-red">*</span></label>
                    <input type="text" id="txtClientPhone" name="ClientPhone" maxlength="15" class="form-control input-sm" required />
                  </div>
                </div>
              </div>
              <!-- First Row Ends Here ----->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-warning">
            <div class="box-body">
              <h4 class="head"><i class="fa fa-user-plus"></i> Other Travelling Passengers Details</h4>
              <hr>
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tblOtherPassengers">
                    <thead>
                      <tr>
                        <th width="6%"><label class="control-label">Title</label></th>
                        <th width="12%">
                        <label class="control-label">
                        Given Name <span class="text-red">*</span><br />
                        <span class="small text-maroon">(as in Passport)</span> </label>
                        </th>
                        <th width="12%"><label class="control-label">Surname <span class="text-red">*</span><br />
                          <span class="small text-maroon">(as in Passport)</span> </label></th>
                        <th width="7%"><label class="control-label">Gender</label></th>
                        <th width="9%"><label class="control-label">Date of Birth <span class="text-red">*</span><br />
                          <span class="small text-maroon">(dd/mm/yyyy)</span></label></th>
                        <th width="10%"><label class="control-label">Nationality</label></th>
                        <th width="10%"><label class="control-label">Passport Number</label></th>
                        <th width="13%"><label class="control-label">Email</label></th>
                        <th width="12%"><label class="control-label">Emergency Contact Person</label></th>
                        <th width="10%"><label class="control-label">Emergency Contact Phone</label></th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- First Row Ends Here ----->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-body">
              <h4 class="head"><i class="fa fa-plane"></i> Flight Details </h4>
              <hr>
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-bordered table-striped" id="tblFlight">
                    <thead>
                      <tr>
                        <th width="10%"><label class="control-label">Travel Date <span class="text-red">*</span><br />
                          <span class="small text-maroon">(dd/mm/yyyy)</span></label></th>
                        <th width="8%"><label class="control-label">Time <span class="text-red">*</span><br />
                          <span class="small text-maroon">(hh:mm)</span></label></th>
                        <th width="10%"><label class="control-label">Journey</label></th>
                        <th width="10%"><label class="control-label">Travel By</label></th>
                        <th width="12%"><label class="control-label">City <span class="text-red">*</span></label></th>
                        <th width="12%"><label class="control-label">Flight / Train No</label></th>
                        <th width="15%"><label class="control-label">Other Travel Details</label></th>
                        <th width="5%"><label class="control-label">Add</label></th>
                        <th width="5%"><label class="control-label">Remove</label></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><div class="form-group">
                            <input type="text" id="txtTravelDate" name="TravelDate[]" maxlength="10" class="form-control input-sm" />
                          </div></td>
                        <td><div class="form-group">
                            <input type="text" id="txtTravelTime" name="TravelTime[]" maxlength="5" class="form-control input-sm" required />
                          </div></td>
                        <td><select id="ddlJourney" name="Journey" class="form-control input-sm">
                            <option value="">-- Select --</option>
                            <option value="Arrival">Arrival</option>
                            <option value="Departure">Departure</option>
                          </select>
                        </td>
                        <td><select id="ddlTravelBy" name="TravelBy" class="form-control input-sm">
                            <option value="" selected>-- Select --</option>
                            <option value="Surface">Surface</option>
                            <option value="Flight">Flight</option>
                            <option value="Train">Train</option>
                            <option value="Bus">Bus</option>
                            <option value="Harbour">Harbour</option>
                            <option value="Hotel Pickup">Hotel Pickup</option>
                          </select>
                        </td>
                        <td><div class="form-group">
                            <select id="ddlCityName" name="CityCode[]" class="form-control input-sm">
                            </select>
                          </div></td>
                        <td><input type="text" id="txtFlightTrainNo" name="FlightTrainNo" maxlength="30" class="form-control input-sm" /></td>
                        <td><input type="text" id="txtTravelDetails" name="TravelDetails" maxlength="100" class="form-control input-sm" /></td>
                        <td class="text-center"><a class="btn btn-sm btn-flat bg-blue addArrivalRow" id="addArrivalRow" title="Add Row"><i class="fa fa-plus-square"></i></a></td>
                        <td class="text-center"><a class="btn btn-sm btn-flat bg-red removeArrivalRow" id="removeArrivalRow" title="Remove Row"><i class="fa fa-trash"></i></a></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <!-- First Row Ends Here ----->
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="bg-gray-light">
          <div class="text-center">
            <button type="submit" class="btn btn-success btn-lg"><i class="fa fa-check"></i> &nbsp; Save Client Booking Form Information &nbsp; <i class="fa fa-arrow-right"></i></button>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
</html>
<?= $inc->script_section(); ?>
<?php 

   if(empty($pval))
   {
		header('Location: error.php');	
   }
   else
   {
		//Get Client Details
		$apiurl = "http://223.30.60.195/api/CholanAPI/GetIPClientBookingDetails/";
		$ClientDetails = $inc->validclientid($apiurl,$pval);
		
		//Get City Details
		$apicityurl = "http://223.30.60.195/api/CholanAPI/LoadCity/";
		$CityDetails = $inc->validclientid($apicityurl,'');
   }
?>

<script>
var CityData = [];
CityData = <?php echo $CityDetails; ?>;
$(document).ready(function (){
loadCity();
$("#txtClientBirthDate").datepicker({format: 'dd/mm/yyyy', autoclose: true, endDate : '-1d'  });
$("#txtTravelDate").datepicker({format: 'dd/mm/yyyy', autoclose: true, todayHighlight: true });
$("#txtTourStartDate").datepicker({ format: 'dd/mm/yyyy',minDate: 0, todayHighlight: true, autoclose: true }).on('changeDate', function (selected) {
            var minDate = new Date(selected.date.valueOf());
            $('#txtTourEndDate').datepicker('setStartDate', minDate);
            $('#txtTourEndDate').datepicker('setDate', minDate);
            $('#frmClientRegistration').bootstrapValidator('revalidateField', 'TourStartDate');
        });

$("#txtTourEndDate").datepicker({ format: 'dd/mm/yyyy', autoclose: true }).on('changeDate', function (selected) {
	var minDate = new Date(selected.date.valueOf());
	$('#frmClientRegistration').bootstrapValidator('revalidateField', 'TourEndDate');
});


var ClientData = <?php echo $ClientDetails; ?>;
 			$.each(ClientData, function (index, value) {
					$("#txtClientEmail").val(value.ClientEmail);
					$("#txtAdultPax").val(value.AdultPax);
					$("#txtChildPax").val(value.ChildPax);
					$("#txtInfant").val(value.Infant);
					pax = parseInt(value.AdultPax) +parseInt(value.ChildPax) + parseInt(value.Infant);
					generateTravellingPassengers(pax);
					loadCountryName();
			})
});
</script>

<script type="text/javascript" src="<?= $inc->base_url('jscript/booking.js'); ?>"></script>