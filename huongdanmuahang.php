<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
    	
		<center>
        	<div class="header">
            	<div class="header_left">
                	<ul>
                    	<li><span  style="color:#333;"class="glyphicon glyphicon-earphone"></span> </li>
                        
                    </ul>
                </div>
                <div class="header_center">
                	<?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?>
                </div>
                <div class="header_right">
                	<ul>
                    	
                		<?php
							
							if(isset($_SESSION['username'])){
								echo"<li>";
								echo "Chào ".$_SESSION['username'];?><a href="index.php"><b><i> thoát</i></b></a></li>
							<?Php
								session_destroy();
								}else{
								echo "";?><li> <a href="login_SignUp.php"><span class="glyphicon glyphicon-user"></span></a></li>
							<?Php
							}	
						?>		
                    	
                    </ul>  
                    
                </div>
        	</div>
            <div style=" text-align:center; margin-top:25px; margin-bottom:15px;">
            	<img src="hinh_anh/banner/Capture1.PNG">
            </div>
			<div class="menu">
           				<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?> 
                        
			</div>
            <div class="conten">
            		<div class="conten_left">
                        <div class="nhungdanhmuc">
                        	<div class="tendanhmuc">Danh mục sản phẩm </div>
                            <div class="noidung" style="text-align:left;">
                            	<?php include("chuc_nang/menu_doc/menu_doc.php"); ?>
                             </div>   
                        </div>   
                        
                        <div class="nhungdanhmuc">
                        	<div class="tendanhmuc">Sản Phẩm Nổi Bật </div> 
                            
                        	<?php include("chuc_nang/san_pham/noi_bat.php");?>
                            </div>
						</div>		
                        
                    </div>
                    
                    <div class="conten_right">
                    		<div style="border:1px solid #000; color:#000; text-align:justify; padding:5px;">
                            	<h4>Hướng dẫn mua hàng</h4>

                                       <b><i style="color:#090;">Khuyến khích các bạn qua trực tiếp shop mặc thử và mua hàng.</i></b><br>
                                 Shop mở cửa từ 7h - 22h hàng ngày<br>
                                182 Võ Văn Ngân, Thủ Đức, Việt Nam<Br>
                            </div>
                			<br>
                            <div style=" width:780">
                            	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4857232581953!2d106.76048921394636!3d10.850612892271199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527a270e7ce9f%3A0xb621096212e5b4e3!2zMTgyIFbDtSBWxINuIE5nw6JuLCBCw6xuaCBUaOG7jSwgVGjhu6cgxJDhu6ljLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1497761144880" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            
                	</div>		
            </div>
            <!-- end conten--->
				<?php include('footer.php');?>	
					
                    
				
		</center>
	</body>
</html>