<?
$no1 = rand(0,9);
$no2 = rand(0,9);
$no3 = $no1+$no2;
?>
	<script type="text/javascript" src="contact_files/js/jquery-1.4.2.min.js"></script>
	<script type="text/javascript" src="contact_files/js/jquery.validate.min.js"></script>
    <script type="text/javascript">
	$(document).ready(function(){
		$('#contactme').validate({
			debug: false,
			rules: {
				 
				fname: { required: true, minlength:2 },
				 	
				lname: { required: true, minlength:2 },
				 	
				email: { required: true, email: true },
				 
				phone: { required:true, number:true, rangelength:[4,15] },
				 
				subject: { required: true, minlength:2 },				
				 
				message: { required: true, minlength:2, },				
				 
				captcha: { required: true, number:true, range:[<? echo $no3.','.$no3; ?> ]},			},
			messages: {<? $msj='""'; /*you can insert here a customized error message*/ ?>				
                
                fname: <? echo $msj; ?>,
				
				lname: <? echo $msj; ?>,
				 
				email: <? echo $msj; ?>,
				 
				phone: <? echo $msj; ?>,
				 
				subject: <? echo $msj; ?>,
				 
				message: <? echo $msj; ?>,				
                 
				captcha: <? echo $msj; ?>,				
			},
			submitHandler: function(form) {
				// do other stuff for a valid form
				 
				$.post('contact_files/process.php', $('#contactme').serialize(), function(data) {
					$('#results').html(data);
				});
			}
		});
	});
	</script>
<style type="text/css">
.contactformbutton input[type="submit"] {
	background:url(contact_files/img/submit.png) no-repeat;
	border:1px;
	border-color:#0C0;
	text-indent:25px;
	padding: 10px 8px;
	cursor: pointer;
}
.contactformbutton input[type="reset"] {
	background:url(contact_files/img/cancel.png) no-repeat;
	border:1px;
	border-color:#0C0;
	text-indent:25px;
	padding: 10px 8px;
	cursor: pointer;
}
.contactformbutton input, .contactformbutton textarea, .contactformbutton select { border: 1px solid #9C3; }
.contactformbutton input[type="radio"] { border: none; }
.contactformbutton input:focus, .contactformbutton textarea:focus { border: 1px dashed #9C3; }
.contactformbutton input.error, .contactformbutton textarea.error { border: 1px dashed #F93; }
form.contactme label {
	display: inline-block;
	width:120px;
	line-height: 1.8;
	vertical-align: top;
	cursor: hand;
	color: #666;
}
</style>