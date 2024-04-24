<?php /* Template Name: Welcome */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-3.4.0.min.js"></script>
</head>
<body>
	<div class="welcome">
		<div class="image-full">
			<img src="<?php echo get_template_directory_uri() ?>/assets/images/anh_nen_18.png" alt="" class="img-fluid banner">
			<div class="content ">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 offset-xl-2 col-md-12 d-flex flex-row justify-content-center">
							<div class="row">
								<div class="col-md-6 offset-md-3">
									<div class="logo">
										<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-welcome.png" class="img-fluid">
									</div>	
								</div>
								<div class="col-md-10 offset-md-1">
									<div class="text">
										Bạn đã đủ 18 tuổi chưa
									</div>
								</div>
								<div class="col-md-6 offset-md-3">
									<form method="POST" action="">
									<div class="row">
										<div class="col-6 px-md-1">
											<button type="submit" name="comfirm" class="submit" id="comfirm">TÔI ĐÃ ĐỦ 18</button>
										</div>
										<div class="col-6 px-md-1">
											<button name="comfirm2" class="submit" id="comfirm2">TÔI CHƯA ĐỦ 18</button>
										</div>
									</div>
									</form>
								</div>
								<div class="col-md-10 offset-md-1">
									<div class="subtext text-center">
										Uống bia có trách nhiệm, đã uống rượu bia thì không lái xe
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
<style type="text/css">
	.welcome .image-full .content .subtext{
		color: #fff;
		font-size: 18px;
		line-height: 23px
	}
	.welcome .image-full{
		position: relative;
		height: 100vh;
	}
	.welcome .image-full img{
		height: 100%;
		width: 100%;
		object-fit: cover;
	}
	.welcome .image-full .content{
		position: absolute;
		width: 100%;
		left: 0;
		top: 50%;
		transform: translateY(-50%)
	}
	.welcome .image-full .content .logo{
		margin: 20px 0;
	}
	.welcome .image-full .content .text{
		font-family: 'ProximaNova-Bold';
		font-size: 24px;
		line-height: 30px;
		color: #FBF4DA;
		text-align: center;
	}
	.welcome .image-full .content .age{
		border-radius: 0;
		background: #FBF4DA;
		border: 0;
		color: #663000;
		font-size: 16px;
		font-family: 'ProximaNova-Regular';
	}
	.welcome .image-full .content .age:focus{
		outline: none;
		box-shadow: none
	}
	.welcome .image-full .content .age::placeholder{
		background: #FBF4DA;
		color: #663000;
		font-size: 16px;
		font-family: 'ProximaNova-Regular';
	}

	.welcome .image-full .content .submit{
		margin: 0 auto;
		margin: 30px 0;
		border: 0;
		background: rgba(183,150,96,1);
	background: -webkit-linear-gradient(left, rgba(183,150,96,1) 0%, rgba(216,177,113,1) 16%, rgba(248,201,129,1) 67%, rgba(158,121,75,1) 100%);
	background: -o-linear-gradient(left, rgba(183,150,96,1) 0%, rgba(216,177,113,1) 16%, rgba(248,201,129,1) 67%, rgba(158,121,75,1) 100%);
	background: linear-gradient(to right, rgba(183,150,96,1) 0%, rgba(216,177,113,1) 16%, rgba(248,201,129,1) 67%, rgba(158,121,75,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b79660', endColorstr='#9e794b', GradientType=1 );
		box-shadow: none;
		padding:10px 30px;
		color: #fff;
		font-family: 'ProximaNova-Bold';
		font-size: 15px;
		line-height: 18px;
		cursor: pointer
	}
	.welcome .image-full .content .submit:focus{
		outline: none
	}
	@media(max-width: 1024px){
		.welcome .image-full{
			height: 100vh;
		}
		.welcome .image-full .banner{
			width: 100%;
			height: 100%;
			position: absolute;
			object-fit: cover
		}
	}
	@media(max-width: 768px){
		.welcome .image-full{
			height: 100vh
		}
		.welcome .image-full .banner{
			width: 100%;
			height: 100%;
			position: absolute;
			object-fit: cover
		}
		.welcome .image-full .content .submit{
			padding: 10px 25px;
		}
	}
	@media(max-width: 480px){
		.welcome .image-full {
    		position: relative;
    		min-height: 100vh;
		}
		.welcome .image-full .banner{
			height: 100%;
		    width: 100%;
		    object-fit: cover;
		    position: absolute;
		}
	}

</style>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<script>
	$('#comfirm2').click(function(){
    	alert('Bạn chưa đủ tuổi để vào website của chúng tôi');
 	});
</script>
</html>
<?php 
	$year = 0;
	if(isset($_POST['comfirm'])) {?>
			<script>
					<?php $year = 18; ?>
					localStorage.old = <?php echo $year ?>;
					window.location.replace('<?php echo home_url(); ?>');
			</script>	
		<?php }
?>


