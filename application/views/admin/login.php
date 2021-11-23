<nav class="navbar navbar-inverse">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-send"></span>&nbsp;<b>E-PEMILOS</b></a>
        </div>
    </div>
</nav>

<body style="background-image:url('<?php echo base_url(); ?>asset/img/background.png'); background-size: 100%; width: 100%; background-repeat: no-repeat">
    <div class="ch-container">
        <br><br>
        <div class="row col-md-4 center" style="background-color: white; border-radius: 20px; padding:20px;">
            <div class="row-md-5 center login-box">
                <h2 style="color: crimson;"><b>LOGIN <br>E-PEMILOS</b></h2><br>
                <div class="alert alert-danger">
                    <b>PERHATIAN!</b><br>
                    Masukkan <i><b>username</b></i> dan <i><b>password</b></i> dengan benar
                    <br>Perhatikan penulisan <i><b>angka</b></i> dan <i><b>huruf-nya!</b></i>
                </div>
                <?php if ($this->session->flashdata('failed')) { ?>
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <?php echo $this->session->flashdata('failed'); ?>
                    </div>
                <?php } ?>
                <?php
                $form_attribute = array(
                    'method'    => 'post',
                    'class'        => 'form-horizontal'
                );
                echo form_open('admin/loginvalidation', $form_attribute);
                ?>
                <form class="form-horizontal" action="index.html" method="post">
                    <fieldset>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user red"></i></span>
                            <?php
                            $form_attribute     = array(
                                'type'            => 'text',
                                'class'            => 'form-control',
                                'name'            => 'username',
                                'placeholder'    =>    'Username'
                            );
                            echo form_input($form_attribute);
                            ?>

                        </div>
                        <div class="clearfix"></div><br>

                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>
                            <?php
                            $form_attribute     = array(
                                'type'            => 'password',
                                'class'            => 'form-control',
                                'name'            => 'password',
                                'placeholder'    => 'Password'
                            );
                            echo form_input($form_attribute);
                            ?>
                        </div>
                        <div class="clearfix"></div>


                        <div class="clearfix"></div>

                        <p class="center col-md-5" style="width:200px;">
                            <button type="submit" class="btn btn-danger btn-lg"><span class="glyphicon glyphicon-log-in"></span>&nbsp;&nbsp;<b>LOGIN ADMIN</b></button>
                        </p>
                    </fieldset>
                </form>
            </div>
        </div>
        <br>
        <br>
        <footer style="position: fixed; left: 0; bottom: 0; width: 100%; background-color: #275555ff;  color: white;  text-align: center; padding:5px;">
            <p style="padding-top:10px; text-align:center;"><b>2021 &copy; E-PEMILOS</b></p>
        </footer>
    </div>