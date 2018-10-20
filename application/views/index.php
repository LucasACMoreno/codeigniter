<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Seguradora - ITE</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url();?>/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="<?php echo base_url();?>assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?php echo base_url();?>assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url();?>assets/css/pe-icon-7-stroke.css" rel="stylesheet" />

    

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="blue" data-image="<?php echo base_url();?>assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="<?php echo base_url();?>index.php" class="simple-text">
                    [PROJETO-CODEIGNITER] 
                </a>
            </div>

            <ul class="nav">

                <li class="<?php if($this->uri->segment(1) == 'Parentesco' || $this->uri->segment(1) == 'parentesco') echo "active";?>">
                    <a href="<?php echo base_url();?>index.php/Parentesco">
                        <i class="pe-7s-users"></i>
                        <p>Parentesco</p>
                    </a>
                </li>
				<li class ="<?php if($this->uri->segment(1) == 'Estado' || $this->uri->segment(1) == 'estado') echo "active";?>">
                    <a href="<?php echo base_url();?>index.php/Estado">
                        <i class="pe-7s-map-marker"></i>
                        <p>Estado</p>
                    </a>
                </li>
                <li class ="<?php if($this->uri->segment(1) == 'Beneficios' || $this->uri->segment(1) == 'beneficios') echo "active";?>">
                    <a href="<?php echo base_url();?>index.php/Beneficios">
                        <i class="pe-7s-cart"></i>
                        <p>Benefícios</p>
                    </a>
                </li>
                <li class="<?php if($this->uri->segment(1) == 'Cobertura' || $this->uri->segment(1) == 'cobertura') echo "active";?>">
                    <a href="<?php echo base_url();?>index.php/Cobertura">
                        <i class="pe-7s-note2"></i>
                        <p>Cobertura</p>
                    </a>
                </li>
			
			<!--}else if($url_atual == "127.0.0.1/eng3/index.php/Estado"){
				echo '<li>
                    <a href="Parentesco">
                        <i class="pe-7s-graph"></i>
                        <p>Parentesco</p>
                    </a>
                </li>
				<li class="active">
                    <a href="Estado">
                        <i class="pe-7s-user"></i>
                        <p>Estado</p>
                    </a>
                </li>
                <li>
                    <a href="Beneficios">
                        <i class="pe-7s-note2"></i>
                        <p>Benefícios</p>
                    </a>
                </li>
                <li>
                    <a href="Cobertura">
                        <i class="pe-7s-news-paper"></i>
                        <p>Cobertura</p>
                    </a>
                </li>';
			}else if($url_atual == "127.0.0.1/eng3/index.php/Beneficios"){
				echo '<li>
                    <a href="Parentesco">
                        <i class="pe-7s-graph"></i>
                        <p>Parentesco</p>
                    </a>
                </li>
				<li>
                    <a href="Estado">
                        <i class="pe-7s-user"></i>
                        <p>Estado</p>
                    </a>
                </li>
                <li class="active">
                    <a href="Beneficios">
                        <i class="pe-7s-note2"></i>
                        <p>Benefícios</p>
                    </a>
                </li>
                <li>
                    <a href="Cobertura">
                        <i class="pe-7s-news-paper"></i>
                        <p>Cobertura</p>
                    </a>
                </li>';
			}else{
				echo '<li>
                    <a href="Parentesco">
                        <i class="pe-7s-graph"></i>
                        <p>Parentesco</p>
                    </a>
                </li>
				<li>
                    <a href="Estado">
                        <i class="pe-7s-user"></i>
                        <p>Estado</p>
                    </a>
                </li>
                <li>
                    <a href="Beneficios">
                        <i class="pe-7s-note2"></i>
                        <p>Benefícios</p>
                    </a>
                </li>
                <li class="active">
                    <a href="Cobertura">
                        <i class="pe-7s-news-paper"></i>
                        <p>Cobertura</p>
                    </a>
                </li>';
			}
			?>-->
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://www.facebook.com/lucas.moreno.5680">[SEGURADORA] - LUCAS MORENO - 010617023</a>
                </div>
        
            </div>
        </nav>

        <!--FORMULÁIO-->
        <div class='content'>

            <?php require $pagina; ?>

        </div>
    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?php echo base_url();?>assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url();?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url();?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="<?php echo base_url();?>assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="<?php echo base_url();?>assets/js/demo.js"></script>

</html>
