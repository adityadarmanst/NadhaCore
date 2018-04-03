$(document).ready(function(){
			$('#btnJoinBawah').click(function(){
				var email = $('#txtInputEmailBawah').val();
				//$('#txtInputEmailBawah').addClass('disabled');
				if(email==""){
					$('#txtInputEmailBawah').focus();
				}else{
					$.post("homepage/sendLinkDaftar",{'emailReq':email});
				$('#txtInputEmailBawah').fadeOut(300);
				$(this).fadeOut(300);
				$('#statTautanEmail').html("Link tautan pendaftaran telah dikirim ke email anda.");
				}
				
			});
		});