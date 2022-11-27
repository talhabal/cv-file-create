<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Potenza - Job Application Form Wizard with Resume upload and Branch feature">
    <meta name="author" content="Ansonika">
    <title>Profesyonel Olarak CV Oluşturun</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/menu.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="css/vendors.css" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
	
	<!-- MODERNIZR MENU -->
	<script src="js/modernizr.js"></script>

</head>

<body>
	
	<div id="preloader">
		
		<div data-loader="circle-side"></div>
	</div><!-- /Preload -->
	
	<div id="loader_form">
		
		<div data-loader="circle-side-2"></div>
	</div><!-- /loader_form -->
	
	
	<!-- /menu -->
	<div class="heading"></div>
	<div class="container-fluid">
		
	    <div class="row row-height">
	        
	        <!-- /content-left --> 
	        <div class="col-xl-12 col-lg-12 content-right" id="start" >
				
	            <div id="wizard_container" style="height: 740px;">
					<h2></h2>
	                <div id="top-wizard">
	                    <span id="location"></span>
	                    <div id="progressbar"></div>
	                </div>
	                <!-- /top-wizard -->
					
	                <form action="pdf.php" method="post" enctype="multipart/form-data" style="background-color: white; padding: 50px;">
						
	                    <input id="website" name="website" type="text" value="">
						
	                    <!-- Leave for security protection, read docs for details 1111111111111111111111111111111111111111 -->
	                    <div id="middle-wizard">
							
	                        <div class="step">
	                            <h2 class="section_title">Kişisel Bilgiler</h2>
	                            <div class="form-group add_top_30">
	                                <label for="name">İsim</label>
	                                <input type="text" name="adi" id="name" class="form-control" onchange="getVals(this, 'name_field');">
	                            </div>
								<div class="form-group add_top_30">
	                                <label for="name">Soyisim</label>
	                                <input type="text" name="soyadi" id="name" class="form-control" onchange="getVals(this, 'name_field');">
	                            </div>
								<div class="form-group add_top_20">
	                                <label>Profil Fotoğrafı<br><small>(Lütfen 5 MB altında bir fotoğraf yükleyiniz.)</small></label>
	                                <div class="fileupload">
	                                    <input accept="*" type="file" name="foto" class="">
	                                </div>
	                            </div>
	                            <div class="form-group  add_top_30">
	                                <label for="email">E-Posta Adresi</label>
	                                <input type="email" name="email" id="email" class="form-control" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group  add_top_30">
	                                <label for="phone">Telefon Numarası</label>
	                                <input type="text" name="telefon" id="phone" class="form-control">
	                            </div>
								
								
	                        </div>
	                        <!-- /step-->
	                        <!-- /Start Branch ============================== 22222222222222222-->
	                        <div class="step">
	                            <h2 class="section_title">Kişisel Bilgiler</h2>
	                            <div class="form-group  add_top_30">
	                                <label for="email">Adres</label>
	                                <input type="text"  style="height: 100px;" name="adres" class="form-control" onchange="getVals(this, 'email_field');">
	                            </div>
								<div class="form-group add_top_30">
	                                <label for="phone">İl / İlçe</label>
	                                <input type="text" name="il_ilce" id="name" class="form-control">
	                            </div>
	                            <div class="form-group add_top_30">
	                                <label for="phone">Posta Kodu</label>
	                                <input type="text" name="posta" id="name" class="form-control">
	                            </div>
	                            <div class="form-group add_top_30">
									<label>Cinsiyet</label>
									<div class="form-group radio_input">
										<label class="container_radio mr-3">Erkek
											<input type="radio" name="cins" value="Erkek" class="required">
											<span class="checkmark"></span>
										</label>
										<label class="container_radio">Kadın
											<input type="radio" name="cins" value="Kadın" class="required">
											<span class="checkmark"></span>
										</label>
									</div>
								</div>
								<div class="form-group add_top_30">
	                                <label for="phone">Doğum Tarihi</label>
	                                <input type="date" name="dtarih" id="name" class="form-control">
	                            </div>
								<div class="form-group add_top_30">
	                                <label for="phone">Doğum Yeri</label>
	                                <input type="text" name="dyeri" id="name" class="form-control">
	                            </div>
								
								
	                        </div>

	                        <!-- /Work Availability > Full-time ============================== 3333333333333333-->
	                       <div class="step">
	                            <h2 class="section_title">Kişisel Bilgiler</h2>
	                            <div class="form-group add_top_30">
	                                <label for="name">Askerlik Durumu</label>
	                                <input type="text" name="asker"  class="form-control" onchange="getVals(this, 'name_field');">
	                            </div>
								<div class="form-group add_top_30">
	                                <label for="name">Medeni Durumu</label>
	                                <input type="text" name="medeni" class="form-control" onchange="getVals(this, 'name_field');">
	                            </div>

								<div class="form-group add_top_30">
	                                <label for="name">Sürücü Ehliyeti</label>
	                                <input type="text" name="ehliyet"  class="form-control" onchange="getVals(this, 'name_field');">
	                            </div>
								
	                            <div class="form-group  add_top_30">
	                                <label for="email">LinkedIn</label>
	                                <input type="text" name="linkedin"  class="form-control" onchange="getVals(this, 'email_field');">
	                            </div>
	                            <div class="form-group  add_top_30">
	                                <label for="phone">İnternet Sitesi</label>
	                                <input type="text" name="site" id="name" class="form-control">
	                            </div>
								<div class="form-group  add_top_30">
	                                <label for="email">Açıklama </label>
	                                <textarea type="text" name="aciklama" rows="15" class="form-control"></textarea>
	                            </div>
								
								
	                        </div>
	                        <!-- /step-->
							<div class="step">
	                            <h2 class="section_title">Kişisel Bilgiler</h2>
	                            <div class="form-group add_top_30">
	                                <label for="phone">İş Deneyimi</label>
									(<small>Lütfen tarihe göre sondan başa doğru yazınız</small>)
	                                <input type="text" name="is1" id="name" class="form-control">
									<input type="text" name="is2" id="name" class="form-control">
	                                <input type="text" name="is3" id="name" class="form-control">
	                                <input type="text" name="is4" id="name" class="form-control">
									<input type="text" name="is5" id="name" class="form-control">
								</div>

								<div class="form-group add_top_30">
	                                <label for="phone">Eğitimler</label>
									(<small>Lütfen tarihe göre sondan başa doğru yazınız</small>)
	                                <input type="text" name="eg1" id="name" class="form-control">
									<input type="text" name="eg2" id="name" class="form-control">
	                                <input type="text" name="eg3" id="name" class="form-control">
	                                <input type="text" name="eg4" id="name" class="form-control">
									<input type="text" name="eg5" id="name" class="form-control">
								</div>
								
	                        </div>
	                     

	                       
	                        <!-- /step-->
						<!-- /4444444444444444444444444-->
						<div class="submit step" id="end">
							<h2 class="section_title">Kişisel Bilgiler</h2>

							<div class="summary">
								

								<div class="form-group add_top_30">
	                                <label for="phone">Referanslar</label>
	                                <input type="text" name="ref1" id="name" class="form-control">
									<input type="text" name="ref2" id="name" class="form-control">
	                                <input type="text" name="ref3" id="name" class="form-control">
	                                <input type="text" name="ref4" id="name" class="form-control">
									<input type="text" name="ref5" id="name" class="form-control">
								</div>

								<div class="form-group add_top_30">
	                                <label for="phone">Beceriler</label>
	                                <input type="text" name="bec1" id="name" class="form-control">
									<input type="text" name="bec2" id="name" class="form-control">
	                                <input type="text" name="bec3" id="name" class="form-control">
	                                <input type="text" name="bec4" id="name" class="form-control">
									<input type="text" name="bec5" id="name" class="form-control">
								</div>

							</div>
						</div>
							
	                        <!-- /step last-->

	                    <!-- /middle-wizard -->
	                    <div id="bottom-wizard">
	                        <button type="button" name="backward" class="backward">Geri</button>
	                        <button type="button" name="forward" class="forward">İleri</button>
							<button type="submit" name="process" class="submit">CV Oluştur</button>

	                        
	                    </div>
	                    <!-- /bottom-wizard -->
	                </form>
					
	            </div>

				
	            <!-- /Wizard container -->
	        </div>
			
	        <!-- /content-right-->
	    </div>
	    <!-- /row-->
	</div>
	<!-- /container-fluid -->

	<div class="cd-overlay-nav">
		<span></span>
	</div>
	<!-- /cd-overlay-nav -->

	<div class="cd-overlay-content">
		<span></span>
	</div>
	<!-- /cd-overlay-content -->

	<!-- /menu button -->
	
	<!-- Modal terms -->
	<div class="modal fade" id="terms-txt" tabindex="-1" role="dialog" aria-labelledby="termsLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="termsLabel">Terms and conditions</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in <strong>nec quod novum accumsan</strong>, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. Lorem ipsum dolor sit amet, <strong>in porro albucius qui</strong>, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
					<p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn_1" data-dismiss="modal">Close</button>
				</div>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	
	<!-- COMMON SCRIPTS -->
	<script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/common_scripts.min.js"></script>
	<script src="js/velocity.min.js"></script>
	<script src="js/common_functions.js"></script>
	<script src="js/file-validator.js"></script>

	<!-- Wizard script-->
	<script src="js/func_1.js"></script>

</body>
</html>