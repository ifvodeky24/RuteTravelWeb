<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use app\models\User;

$username = Yii::$app->user->identity->username;
$id_admin = Yii::$app->user->identity->id_admin;
$foto = Yii::$app->user->identity->foto;
$nama_lengkap = Yii::$app->user->identity->nama_lengkap;
User::find()
    ->where(['id_admin' => $id_admin])
    ->one();

AppAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <?php $this->registerCsrfMetaTags() ?>
    <title>SISTEM INFORMASI RUTE ANGKUTAN KOTA PEKANBARU</title>
    <?php $this->head() ?>
</head>

<body class="hold-transition skin-green-light sidebar-mini">
    <?php $this->beginBody() ?>


    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="<?= Yii::$app->request->baseUrl; ?>/site" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>R</b>T</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>RUTE ANGKUTAN</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <!-- Messages: style can be found in dropdown.less-->

                        <!-- Tasks: style can be found in dropdown.less -->

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                <?= empty($user->foto) ?
                                    Html::img('@web/files/images/admin_images/' . $foto, ['class' => 'user-image img-circle', 'alt' => 'User Image']) :

                                    Html::img(\Yii::$app->params['frontendUrl'] . $user->foto, ['class' => 'user-image img-circle', 'alt' => 'User Image']) ?>


                                <span class="hidden-xs"><?php echo $nama_lengkap; ?></span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">

                                    <?= empty($user->foto) ?
                                        Html::img('@web/files/images/admin_images/' . $foto, ['class' => 'img-circle', 'alt' => 'User Image']) :

                                        Html::img(\Yii::$app->params['frontendUrl'] . $user->foto, ['class' => 'img-circle', 'alt' => 'User Image']) ?>


                                    <p>
                                        <?php echo $nama_lengkap ?>
                                        <small>Selamat Datang <?php echo $nama_lengkap ?></small>
                                    </p>
                                </li>
                                <!-- Menu Body -->

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <?php echo Html::a('Profil', ['/user/profil'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']) ?>
                                        <!-- <a href="" class="btn btn-default btn-flat">Profil</a> -->
                                    </div>
                                    <div class="pull-right">
                                        <?php echo Html::a('Logout', ['/site/logout'], ['data-method' => 'post', 'class' => 'btn btn-default btn-flat']) ?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->

                    </ul>
                </div>
            </nav>
        </header>
        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <br>
                <div class="user-panel">
                    <div class="pull-left image">
                        <?= empty($user->foto) ?
                            Html::img('@web/files/images/admin_images/' . $foto, ['class' => 'user-image img-circle', 'alt' => 'User Image', 'style' => 'width:60px;height: 60px']) :

                            Html::img(\Yii::$app->params['frontendUrl'] . $user->foto, ['class' => 'user-image img-circle', 'alt' => 'User Image', 'style' => 'width:60px;height: 60px']) ?>


                    </div>
                    <div class="pull-left info">
                        <p> <?php echo $nama_lengkap ?></p>

                    </div>
                </div>

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <br>
                    <li class="header">MAIN NAVIGATION</li>
                    <br>

                    <!--  Data Beranda Awal-->
                    <li>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/site">
                            <i class="fa fa-home"></i> <span>Beranda</span>
                        </a>
                    </li>
                    <!-- Data Beranda Akhir -->

                    <!--  Data Perusahaan Awal-->
                    <li>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/perusahaan">
                            <i class="fa fa-institution "></i> <span>Perusahaan</span>
                        </a>
                    </li>
                    <!-- Data Perusahaan Akhir -->

                    <!--  Data Trayek Awal-->
                    <li>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/trayek">
                            <i class="fa fa-th-list"></i> <span>Trayek</span>
                        </a>
                    </li>
                    <!-- Data Trayek Akhir -->

                    <!--  Data Kondisi Jalan Awal-->
                    <li>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/kondisi-jalan">
                            <i class="fa fa-road"></i> <span>Kondisi Jalan</span>
                        </a>
                    </li>
                    <!-- Data Kondisi Jalan Akhir -->

                    <!--  Data Jadwal Awal-->
                    <li>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/jadwal">
                            <i class="fa fa-calendar-times-o"></i> <span>Jadwal</span>
                        </a>
                    </li>
                    <!-- Data Jadwal Akhir -->

                    <!--  Data Admin Awal-->
                    <li>
                        <a href="<?php echo Yii::$app->request->baseUrl; ?>/admin">
                            <i class="fa fa-users"></i> <span>Admin</span>
                        </a>
                    </li>
                    <!-- Data Admin Akhir -->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1>
                    Control panel
                    <small>SISTEM INFORMASI RUTE ANGKUTAN KOTA PEKANBARU</small>
                </h1>

                <ol class="breadcrumb">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="right_col" role="main">
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="x_panel">
                                <div class="clearfix"></div>
                                <div class="x_content">
                                    <?php echo $content; ?>
                                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.0
            </div>
            <strong>Copyright &copy; <?php echo date('Y') ?> <a href="https://adminlte.io">PT.Kunango Jantan</a>.</strong>
        </footer>

        <div class="control-sidebar-bg"></div>
    </div>

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->

<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>

<script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2()

        //Datemask dd/mm/yyyy
        $('#datemask').inputmask('dd/mm/yyyy', {
            'placeholder': 'dd/mm/yyyy'
        })
        //Datemask2 mm/dd/yyyy
        $('#datemask2').inputmask('mm/dd/yyyy', {
            'placeholder': 'mm/dd/yyyy'
        })
        //Money Euro
        $('[data-mask]').inputmask()

        //Date range picker
        $('#reservation').daterangepicker()
        //Date range picker with time picker
        $('#reservationtime').daterangepicker({
            timePicker: true,
            timePickerIncrement: 30,
            format: 'MM/DD/YYYY h:mm A'
        })
        //Date range as a button
        $('#daterange-btn').daterangepicker({
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                startDate: moment().subtract(29, 'days'),
                endDate: moment()
            },
            function(start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        )

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        })

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
        })
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
        })
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
        })

        //Colorpicker
        $('.my-colorpicker1').colorpicker()
        //color picker with addon
        $('.my-colorpicker2').colorpicker()

        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>

<script>
    $(function() {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' /* optional */
        });
    });
</script>