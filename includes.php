<?php
class includes {
	public function __construct() {
		//$this->con	=	new mysqli("localhost", "indianpa_siter", "efxpF+d6E29F", "indianpa_site");
		$this->base	=	(in_array($_SERVER['SERVER_NAME'], array('www.incredible-kerala.com', 'indianpanorama.travel')) ? '' : 'BookingForm/');
	}
	public function base_url($arg = NULL) {	return (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['HTTP_HOST']."/".$this->base.(!is_null($arg) ? $arg : "");	}
	public function base_dir($arg = NULL) {	return $_SERVER['DOCUMENT_ROOT']."/".$this->base.(!is_null($arg) ? $arg : "");	}
	public function current_url($qs = TRUE) {	return (isset($_SERVER['HTTPS']) ? 'https://' : 'http://').$_SERVER['HTTP_HOST'].($qs ? $_SERVER['REQUEST_URI'] : $_SERVER['PHP_SELF']);	}
	
//Styles
public function styles() { ?>
<link rel="shortcut icon" href="<?= $this->base_url('img/favicon.jpg'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/bootstrap.min.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/bootstrapValidator.css'); ?>"/>
<link rel="stylesheet" href="<?= $this->base_url('font-awesome/css/font-awesome.min.css'); ?>"/>
<link rel="stylesheet" href="<?= $this->base_url('css/bootstrap-datepicker.min.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/adminlte.min.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/custom.css'); ?>" />
<link rel="stylesheet" href="<?= $this->base_url('css/sweetalert.css'); ?>">



<?php }

//Main-Header
public function main_header() { ?>
<header class="main-header">
    <div class="col-md-12">
	<div class="ed-com-t1-right">
        <ul>
          <li class="language"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Choose Language :</a>
            <ul class="dropdown-menu">
              <li><a href="#" onClick="doGTranslate('en|fr');return false;" title="French"><img class="flag" src="img/language/france.gif" alt="France"> &nbsp; France</a></li>
              <li><a href="#" onClick="doGTranslate('en|de');return false;" title="German"><img class="flag" src="img/language/germany.gif" alt="Germany"> &nbsp; Germany</a></li>
              <li><a href="#" onClick="doGTranslate('en|it');return false;" title="Italian"><img class="flag" src="img/language/italy.gif" alt="Italy"> &nbsp;  Italian</a></li>
              <li><a href="#" onClick="doGTranslate('en|es');return false;" title="Spanish"><img class="flag" src="img/language/spain.gif" alt="Spain"> &nbsp;  Spanish</a></li>
              <li><a href="#" onClick="doGTranslate('en|nl');return false;" title="Dutch"><img class="flag" src="img/language/dutch.gif" alt="Dutch"> &nbsp; Dutch</a></li>
              <li><a href="#" onClick="doGTranslate('en|pt');return false;" title="Portuguese"><img class="flag" src="img/language/portugal.gif" alt="Portugal"> &nbsp; Portuguese</a></li>
              <li><a href="#" onClick="doGTranslate('en|en');return false;" title="English"><img class="flag" src="img/language/eng.gif" alt="English"> &nbsp;  English</a></li>
            </ul>
          </li>
        </ul>
		<div id="google_translate_element2"></div>
      </div>
    </div>
    <div><img src="css/ip-logo.jpg" class="img-responsive center-block" alt="Indian Panorama"/></div>
    <p class="text-center">No: 5, Annai Avenue, Vasanth Nagar Extn., Kollidakarai, Srirangam, Trichy, Tamil Nadu, Pincode - 620006 Ph: +91 431 4226122.</p>
</header>
<?php }


//Footer Script 


public function validclientid($apiurl,$param){ 

if($param != NULL){

			$post = ['IPClientID' => $param];
			$payload = json_encode($post);
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$apiurl);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_USERPWD, 'CholanToursUserAuthentication' . ':' . 'CholanSathyaNitha!23');
			$headers = array();
			$headers[] = 'X-ApiKey: Cholan!23';
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$server_output = curl_exec($ch);
      curl_close ($ch);
      return $server_output;
}
else
{

			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL,$apiurl);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_USERPWD, 'CholanToursUserAuthentication' . ':' . 'CholanSathyaNitha!23');
			$headers = array();
			$headers[] = 'X-ApiKey: Cholan!23';
			$headers[] = 'Content-Type: application/json';
			curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
			$server_output = curl_exec($ch);
			curl_close ($ch);
			return $server_output;

}
}


public function get_valueFromStringUrl($url , $parameter_name){
{
    $parts = parse_url($url);
    if(isset($parts['query']))
    {
        parse_str($parts['query'], $query);
        if(isset($query[$parameter_name]))
        {
            return $query[$parameter_name];
			
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
}
}


public function script_section(){?>
<script type="text/javascript" src="<?= $this->base_url('jscript/jquery-1.11.3.min.js'); ?>"></script>
<script type="text/javascript" src="<?= $this->base_url('jscript/jquery.min.js'); ?>"></script>
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
<script type="text/javascript" src="<?= $this->base_url('jscript/bootstrap.min.js'); ?>"></script>
<script type="text/javascript" src="<?= $this->base_url('jscript/bootstrapValidator.min.js'); ?>"></script>
<script type="text/javascript" src="<?= $this->base_url('jscript/adminlte.min.js'); ?>"></script>
<script type="text/javascript" src="<?= $this->base_url('jscript/sweetalert.min.js'); ?>"></script>
<script type="text/javascript" src="<?= $this->base_url('jscript/bootstrap-datepicker.min.js'); ?>"></script>
<script>function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'en',autoDisplay: false}, 'google_translate_element2');}
$('#google_translate_element2').hide();
eval(function(p,a,c,k,e,r){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--)r[e(c)]=k[c]||e(c);k=[function(e){return r[e]}];e=function(){return'\\w+'};c=1};while(c--)if(k[c])p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c]);return p}('6 7(a,b){n{4(2.9){3 c=2.9("o");c.p(b,f,f);a.q(c)}g{3 c=2.r();a.s(\'t\'+b,c)}}u(e){}}6 h(a){4(a.8)a=a.8;4(a==\'\')v;3 b=a.w(\'|\')[1];3 c;3 d=2.x(\'y\');z(3 i=0;i<d.5;i++)4(d[i].A==\'B-C-D\')c=d[i];4(2.j(\'k\')==E||2.j(\'k\').l.5==0||c.5==0||c.l.5==0){F(6(){h(a)},G)}g{c.8=b;7(c,\'m\');7(c,\'m\')}}',43,43,'||document|var|if|length|function|GTranslateFireEvent|value|createEvent||||||true|else|doGTranslate||getElementById|google_translate_element2|innerHTML|change|try|HTMLEvents|initEvent|dispatchEvent|createEventObject|fireEvent|on|catch|return|split|getElementsByTagName|select|for|className|goog|te|combo|null|setTimeout|500'.split('|'),0,{}))
</script>
<?php
}	
}
$inc = new includes();
?>
