$(document).ready(function(){
				$("#input_rno").focus();
				
				$("#input_email").blur(function(){
					
					var r=/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/   ;
					
					var uid=$("#input_email").val();//getter   and  .val("sdsd")//setter
					if(uid=="")
					{
						$("#validEmail").html("Please Fill");//.css("color","red");
						
						
					}
					
					else
						if(r.test(uid)==false)
							{
								$("#validEmail").html("Fill Valid Email");//.css("color","red");
						
							
							}
						else
						{
						$("#errSUid").html("Available");
							
						}
					
				});
				//=--=-=-=-=-===-=-=-
				
				
				
				$("#input_pwd").blur(function(){
					var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
					
					var pwd=$("#input_pwd").val();
					
					if(r.test(pwd)==false)
							{
								$("#validPass").html("Enter Strong Password");//.css("color","red");
							}
						else
						{
						$("#validPass").html("Okay");
							
						}
				});
				//--==-===-====-
				$("#input_mobile").blur(function()
								  {
					var r=/^[6-9]{1}[0-9]{9}$/;
					var mob=$("#input_mobile").val();
					
					if(r.test(mob)==false)
							{
								$("#validmob").html("Invalid Mobile number");//.css("color","red");
							}
						else
						{
						$("#validmob").html("Working");
							
						}
					
				});
				//=-=-=-=-=-=-=-=
    
    
    
    //EYE
    
    
    
//				$("#btnPwd").mousedown(function(){
//					$("#txtPwd").prop("type","text");
//				});
//				$("#btnPwd").mouseup(function(){
//					
//					//$("#txtPwd").prop("type","password");
//					$("#txtPwd").attr("type","password");
//				});
//				//-=-=-==-=-=-=-=-=-=-=-==-=-=-
//				$("#txtPwd").keydown(function(){
//					var pwd=$(this).val();
//					if(pwd.length<=4)
//						$("#errPwd").html("weak");	
//					else
//						if(pwd.length>4&& pwd.length<=7)
//						$("#errPwd").html("Average");	
//						else
//							$("#errPwd").html("Strong");	
//						
//				});
				//=-==-=-=-=-=-=
				/*$("#btnPwd").click(function(){
					if($("#txtPwd").prop("type")=="password")
						$("#txtPwd").prop("type","text");
					else
						$("#txtPwd").prop("type","password");
						
				});*/
				
			});

		//for name 
		//var r=/^[a-zA-Z0-9 ]*$/;   