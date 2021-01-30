<!DOCTYPE html>
<html>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>AKUNTIR</title>
  <!-- Favicon -->
  <link href="<?= base_url('asset/images/brand/Logo_akuntir.png') ?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?= base_url('asset/vendor/nucleo/css/nucleo.css') ?>" rel="stylesheet">
  <link href="<?= base_url('asset/vendor/@fortawesome/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
  <!-- Argon CSS -->
  <link type="text/css" href="<?= base_url('asset/css/argon.css?v=1.0.0') ?>" rel="stylesheet">
</head>
<!-- Sidenav -->
<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
     
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
   
      <a class="navbar-brand pt-0" href="">
        <img src="<?= base_url('asset/images/brand/Logo_akuntir.png') ?>" class="navbar-brand-img" alt="...">
      </a>
     
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            
          
            <link type="text/css" href="<?= base_url('asset/css/argon.css?v=1.0.0') ?>" rel="stylesheet">
  <script>
function select_data($id_user,$username,$password,$nama_user,$role){
$("#id_user").val($id_user);
$("#username").val($username);
$("#password").val($password);
$("#nama_user").val($nama_user);
$("#role").val($role); 
}

function refresh(){
    $("#id_user").val("");
$("#username").val("");
$("#password").val("");
$("#nama_user").val("");
$("#role").val(""); 

}
</script>
</head>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?= base_url('asset/images/theme/team-4-800x800.jpg') ?>">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <a href="<?= base_url('logout') ?>" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
       
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="">
                <img src="<?= base_url('asset/images/brand/blue.png') ?>">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
      
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('admin/user') ?>">
            <i class="fas fa-coins text-primary"  ></i> Data User
            </a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>
