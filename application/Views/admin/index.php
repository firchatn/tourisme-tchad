<?php require(APPPATH .'Views/admin/layout/prefix.php'); ?>
<?php
$links = [
    "agence" => "Agences",
    "compte" => "Comptes",
    "contact" => "Contacts",
    "hotels" => "Hotels",
    "locationVoitures" => "Locations Voitures",
    "offreVoyages" => "Offres Voyages",
    "siteTouristique" => "Sites Touristiques",
];
?>
<div class="row">
  <?php foreach($links as $name => $display): ?>
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-info">
    <a href="<?= site_url($name .'/index') ?>">
      <div class="inner">
      <h3><?= $display ?></h3>

        <p>&nbsp;</p>
      </div>
      <div class="icon">
        <i class="ion ion-bag"></i>
      </div>
      <a href="<?= site_url($name .'/index')?>" class="small-box-footer"><i class="fa fa-list"></i></a>
      </a>
    </div>
  </div>
  <?php endforeach; ?>
</div>
<?php require(APPPATH .'Views/admin/layout/suffix.php'); ?>
