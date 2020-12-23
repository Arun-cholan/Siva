<?php 
ob_start();
require_once("includes.php"); 
error_reporting(E_ALL);
ini_set("display_errors", 1);
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
<!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests"> -->
<title>Cholan Tours : Online Booking Form</title>
<noscript>
<meta http-equiv="refresh" content="0;url=noscript.html">
</noscript>
<?php $inc->styles(); ?>
</head>
<body>
<div class="wrapper">
  <?= $inc->main_header(); ?>
  <div class="content">
    <div class="form-title">
      <div class="row">
        <div class="col-md-12">
          <h4><i class="fa fa-handshake-o"></i> Booking Terms & Conditions for provision of Travel Services by Indian Panorama – (a unit of Cholan Tours Private Limited)</h4>
          <p><strong>Please note all travel services will be provided by Indian Panorama which is a unit of Cholan Tours Private Limited. Please read the following conditions 
            carefully, as these form the basis of your relationship with Indian Panorama.</strong></p>
          <h5>1. Your Contract:</h5>
          <ul>
            <li> If you book only one type of arrangement with Indian Panorama (for example a hotel only), Indian Panorama acts only as a booking agent for the 
              supplier of that arrangement (for example the hotel or houseboat cruise provider). Your contract for that arrangement will be with that supplier 
              (in these conditions referred to as the "Third Party Supplier") and not Indian Panorama. The Third Party Supplier’s own terms and conditions will apply 
              to that contract in addition to the applicable parts of these conditions.</li>
            <li>In all other cases your contract will be with Indian Panorama.</li>
            <li>When you make a booking you guarantee that you have the authority to accept the terms of these booking conditions.</li>
          </ul>
          <p>On receipt of your service confirmation mail, a binding contract comes into existence between you and Indian Panorama.</p>
          <h5>2. Payment Method:</h5>
          <p>The preferred method of payment is by international bank transfer. The fees charged for this are only those levied by your bank. We also offer a secure 
            online payment gateway- payments through this option incur a 3.5% levy as charged by our bank. The only cards accepted are Visa and MasterCard. Once we have 
            received your booking details, and your tour arrangements are confirmed, your invoice will be prepared and sent by a member of our operations team, whose 
            details will be supplied to you by your tour planner.</p>
          <h5>3. Payment Schedule:</h5>
          <p><u>For tour arrangements:</u> We require you to pay 40% of your tour cost when your bookings are confirmed followed by a further payment of 60% of your payment 
            30 days prior to arrival. All major currencies are accepted. Based on your Tour Planner’s advise, Operation / accounts from the corporate office will 
            forward you a detailed invoice along with the payment procedures. He / She will also be in touch with you for the subsequent payments. On receipt of full 
            payment, travel documents will be sent immediately. If your booking is made within 6 weeks of departure, final documents will be sent as soon as possible 
            or made available for collection at the time of arrival or sent by courier upon the payment of a fee.</p>
          <p>If the booking was made at the last minute, internal flight/train/hotel vouchers will be handed over by the Tour Executive of Indian Panorama on your 
            arrival at the Airport </p>
          <h5 class="text-maroon">Exceptions to the above:</h5>
          <p>A) For travel during the months of October to March you may be required to make the payment based on Hotel Policy as some hotels require full payment 
            at the time of booking. This will be advised by your Tour Planner if it is applicable to you.</p>
          <p>B) For tours commencing less than 30 days from the time of booking or for a tour of 3 nights or less, we would require you to pay 70% of the tour 
            cost at the time of booking.</p>
          <h5>4. Internal Flights:</h5>
          <p>To book your domestic flight ticket we charge a service fee of (USD) $ 10 per seat. Flight charges shall be clearly identified as it is not included 
            in the tour cost. <span class="text-maroon"><strong>If we book your ticket, full flight ticket charges are to be paid at the time of booking confirmation</strong>.</span> Refund amount for the flight cancellation depends upon each airline’s cancellation policy for that particular fare</p>
          <h5>5. Amendments to your Booking:</h5>
          <p>If you wish to make any amendments after your original booking, you should notify us by email in order that we might incorporate the changes where possible.</p>
          <h5 class="text-maroon">Amendments made during the tour:</h5>
          <ul>
            <li>For any tour amendments that arise from a change in International or Internal flight schedule, Indian Panorama will not be responsible for any costs incurred.</li>
            <li>There will be no refund for amendments to hotel bookings made less than 7 days before scheduled check in (due to hotel cancellation policies).</li>
            <li>If you wish to make any amendments to your holiday after the service confirmation has been issued, you must inform us in writing and we will do our best to help you.</li>
          </ul>
          <p><u>Please note however that if you –</u></p>
          <ul>
            <li>Change to a different departure date or destination or</li>
            <li> Change / Cancel the booking less than 8 weeks before departure & if it is during the peak season, that is, from October to March, based on the Hotel policy,
              this change will be handled. You will be liable if there is any amendment / retention charges if any, as per the Hotel policy. </li>
            <li>In the event a change can be made, you must pay all costs and charges incurred or imposed by any of our suppliers.</li>
            <li> If you wish to change any aspect of your holiday after it has commenced, Indian Panorama will do their best to assist, subject to you being responsible
              for any cancellation charges that may be levied for the arrangements originally booked, for the cost of your new arrangements and for any costs incurred by
              Indian Panorama in attempting to secure any revised arrangements. All such charges and costs are payable locally. </li>
          </ul>
          <h5>6. Cancellation & Refund:</h5>
          <p>If you want to cancel your travel arrangements the following cancellation fee is applicable.</p>
          <ul>
            <li><u>Up to 45 days before arrival:</u> 10% of tour cost.</li>
            <li><u>44 - 30 days before arrival:</u> up to 30% of tour cost.</li>
            <li><u>29 - 15 days before arrival:</u> up to 50% of tour cost.</li>
            <li><u>14 - 7 days before arrival:</u> up to 70% of tour cost.</li>
            <li><u>Less than 7 days before arrival:</u> No refund.</li>
          </ul>
          <p>If your travel dates falls during the peak season time from October to March, cancellation and refund procedure will wholly depend upon the hotel policy. 
            If the hotels retain the payment made by us at the time of cancellation, we will not be able to refund any money to you.</p>
          <p>Indian Panorama staff members do not have any authority to waive off the cancellation fee & no refund can be made for any unused services like meals, 
            any wildlife safaris, cultural shows etc as many of these services which make up your holiday are provided by independent suppliers. Those suppliers do not 
            refund money for services neither used nor cancelled as per their terms & conditions.</p>
          <h5>7. Passport, Visa & Vaccinations:</h5>
          <p><span class="text-maroon"><strong>Visa is compulsory to visit India</strong></span> and you should allow sufficient time for this to be processed at your 
            nearest Indian Embassy. Indian Panorama does not hold any responsibility for any loss or expense incurred due to your failure to comply with passport or 
            visa procedures. It is mandatory that you make arrangements to conform to your passport, visa & health requirements that are applicable in India. You are 
            solely responsible for all entry, exit, health related issues and any other documents required by law regulations.</p>
          <h5>8. Insurance</h5>
          <p>Ensure that you are adequately insured for the entire duration of your travel arrangements with regard to illness, injury, theft, loss of baggage and 
            personal belongings. Indian Panorama will not be responsible for any of the above said insurance. All our Indian Panorama vehicles are insured and licensed 
            as per the rules and norms of Government of India, Department of Tourism.</p>
          <h5>9. Unexpected Schedule Changes:</h5>
          <p>Indian Panorama shall not be held responsible for loss or damage resulting from change in flight timings or other reasons like change in weather conditions, 
            strike, civil disturbances / theft / riots / any epidemics which may cause delay or changes to the itinerary. All such losses or extra expenses will have to 
            be borne by you. </p>
          <h5>10. Changes to Taxes and Government Levies:</h5>
          <p>Taxation in India is complex and taxes are levied at several different levels. Occasionally tax rates levied by Indian state governments (for example luxury 
            taxes on hotels, charges for National Park entrances) are increased with little or no notice. In this event we reserve the right to pass on these increases. 
            If this happens it will be communicated to you in a timely manner with proof of any increase provided.</p>
          <h5>11. Check-In / Check-Out Times:</h5>
          <p>Hotels in India generally observe 12.00 noon as check-in & Check-out time. If your arrival or departure is before or after noon, Indian Panorama is not 
            responsible for any additional charges levied by the hotel and such charges are to be settled directly by you with the hotel. Early check in and late checkout 
            grace periods will be requested by Indian Panorama but cannot be guaranteed.</p>
          <h5>12. Emergency Contact:</h5>
          <p>If you face any discomfort with the hotel / driver/ transport during the tour, you shall please call our Customer Service Manager or other key people 
            by using the Indian Panorama emergency contact telephone numbers, supplied to you on or before your arrival.</p>
        </div>
      </div>
    </div>
    <div class="clearfix"> </div>
  </div>
  <div>
    <div class="row" style="margin:1em;">
      <div class="col-md-12">
        <form id="bookingtermsconditons" method="post" class="form-horizontal" action="booking.php">
          <input type="hidden" name="dvalid" id="dvalid" />
          <div class="row text-center">
            <div class="col-md-6">
              <div class="btn btn-info" id="checkbox">
                <input type="checkbox" name="acceptTerms" id="terms" class="minimal" />
                	I have read and accept the <strong>"Terms & Conditions"</strong> for Provision of Travel Services by Indian Panorama. </div>
            </div>
            <div class="col-md-2"></div>
            <div class="col-md-4">
              <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-check"></i> &nbsp; Ok and Continue &nbsp; <i class="fa fa-arrow-right"></i></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>
<?php $inc->script_section(); ?>
<?php 
$url = $_SERVER["REQUEST_URI"];
if($url == "/bookingform/")
{
 exit(header("Location: error.php"));
}
if(empty($_REQUEST['do']))
   {
		 exit(header("Location: error.php"));
   }
   else
   {
		$param = $inc->get_valueFromStringUrl($url , "do");
		$apiurl = "http://localhost:61165/api/CholanAPI/GetIPClientID/";

    $ValidateClientID =$inc->validclientid($apiurl,$param);
    var_dump($ValidateClientID);
		if($ValidateClientID != 0)
		{
		echo "<script>$('#dvalid').val('".$param."');</script>";
		}
		else{
		//header('Location: error.php');	
		}
   }
ob_end_flush();
?>
<script>
$('#bookingtermsconditons').bootstrapValidator({
fields: {
		acceptTerms: {
			validators: {
				notEmpty: {
					message: 'You have to accept the terms and policies'
					   }
					}
     		  }
        }
});

</script>
