<!DOCTYPE html>
<html>

<head>
  <title>Management Logistik</title>
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/custome.css">
  <link rel="stylesheet" href="<?= BASEURL; ?>/css/placeholder-loading.min.css">
  <link rel="stylesheet" type="text/css" media="screen" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <!-- <style type="text/css" src="<?= BASEURL; ?>/datatable/datatable-boostrap.css"></style> -->
  <script src="<?= BASEURL; ?>/js/jquery.js"></script>
  <script src="<?= BASEURL; ?>/global/url.js"></script>
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2-bootstrap-theme/0.1.0-beta.10/select2-bootstrap.min.css" integrity="sha512-kq3FES+RuuGoBW3a9R2ELYKRywUEQv0wvPTItv3DSGqjpbNtGWVdvT8qwdKkqvPzT93jp8tSF4+oN4IeTEIlQA==" crossorigin="anonymous" />
</head>
<?php

$menu = array(
  [
    'link' => '/order',
    'menu_name' => 'Order',
  ],
  [
    'link' => '/category',
    'menu_name' => 'Category',
  ]
  );
?>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light" id="nav-top">
    <div class="container">
      <a class="navbar-brand" href="<?= BASEURL; ?>">Logistik</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <?php for($i=0; $i < count($menu); $i++) { ?>
          <a class="nav-item nav-link" href="<?= BASEURL;?>/order"><?= $menu[$i]['menu_name']; ?></a>
          <!-- <a class="nav-item nav-link" href="<?= BASEURL; ?>/category">Category</a> -->
          <?php } ?>
        </div>
      </div>
    </div>
  </nav>