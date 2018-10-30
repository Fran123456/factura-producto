<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
	<?php require 'application/views/templates/autoload_bootstrap.php'; ?>
	<!--CARGAN ESTILOS Y BOOTSTRAP-->
</head>

<body  class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="<?php echo base_url()?>assets/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">

                                   <?php if($this->session->flashdata('ErrorLogin')): ?>
                                                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                               <?php echo $this->session->flashdata('ErrorLogin') ?>
                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                     <?php endif; ?>

                            <form action="<?php base_url()?>Login_Controller/login" method="post" >
                                <div class="form-group">
                                    <label>User:</label>
                                    <input class="au-input au-input--full" type="text" name="email">
                                </div>
                                <div class="form-group">
                                    <label>Password:</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password">
                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Iniciar</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


   <!--CARGAN LOS SCRIPTS-->
	<?php require 'application/views/templates/autoload_scripts.php'; ?>
	<!--CARGAN LOS SCRIPTS-->
</body>
</html>