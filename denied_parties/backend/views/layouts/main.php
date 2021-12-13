<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php $this->beginBody() ?>


<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
          <span class="dropdown-item dropdown-header"><?=Yii::$app->user->identity->first_name.' '.Yii::$app->user->identity->last_name?></span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-lock mr-2"></i> Change Password
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-sign-out-alt mr-2"></i> Logout
          </a>
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?=Yii::getAlias('@web')?>" class="brand-link" >
      <img src="<?=Yii::getAlias('@web/cdn/images/logo.png')?>" alt="Logo" class="brand-image " style="opacity: 1">
    </a>
    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
      	<?=\yii\bootstrap\Nav::widget([
                    'options' => ['class' => 'nav-pills nav-sidebar flex-column', 'data-widget'=>'treeview', 'role'=>'menu', 'data-accordion'=>'false'],
                    'items' => [ 
                            [ 
                                'label' => '<i class="fas fa-paw nav-icon"></i> <p>Dashboard</p>', 
                                'url' => 'https://deniedparties.assentcompliance.com/', 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-cubes nav-icon"></i> <p>Australia</p>', 
                                'url' => ['/australia/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-canadian-maple-leaf nav-icon"></i> <p>Canada</p>', 
                                'url' => ['/canada/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-flag nav-icon"></i> <p>China</p>', 
                                'url' => ['/china/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-flag-checkered nav-icon"></i> <p>European Union</p>', 
                                'url' => ['/eu/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-circle nav-icon"></i> <p>Japan</p>', 
                                'url' => ['/japan/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-chess-king nav-icon"></i> <p>United Kingdom</p>', 
                                'url' => ['/uk/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-flag-usa nav-icon"></i> <p>USA</p>', 
                                'url' => ['/usa/index'], 
                                'linkOptions' => ['class'=>'nav-link'],
                                'options'=>['class'=>'nav-item'],
                            ],
                            [ 
                                'label' => '<i class="fas fa-users nav-icon"></i> <p>Users</p>', 
                                'url' => ['/site/users'],
                                'linkOptions' => ['class'=>'nav-link'], 
                            ],
                            [ 
                                'label' => '<i class="fas fa-lock nav-icon"></i> <p>Logout</p>', 
                                'url' => ['/site/logout'],
                                'linkOptions' => ['class'=>'nav-link'], 
                            ],
                    ],
                    'activateItems'=>true,
                    'encodeLabels' => false,
                ]);?>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	<section class="content">
	    <?=$content?>
	</section>
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; <?=date('Y')?> <a href="https://www.assentcompliance.com/">Assent Compliance Inc.</a>.</strong>
    All rights reserved.
    
  </footer>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
