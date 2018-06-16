<?php require(APPPATH .'Views/admin/layout/prefix.php'); ?>
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Locations Voitures | Ajouter</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form role="form" action="#" method="post" id="form">
      <!-- text input -->
      <div class="form-group">
        <label>Libelle</label>
        <input type="text" name="libelle" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Date</label>
        <input type="date" name="date" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Prix</label>
        <input type="number" name="prix" class="form-control" placeholder="Enter ..." min="0">
      </div>
      <div class="form-group">
        <label>Marque</label>
        <input type="text" name="marque" class="form-control" placeholder="Enter ...">
      </div>
    </form>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary float-right" form="form"><i class="fa fa-check"></i> Save</button>
    <a href="<?= site_url($base .'/index')?>" class="btn btn-warning mr-2 float-right" form="form"><i class="fa fa-ban"></i> Cancel</a>
  </div>
</div>
<?php require(APPPATH .'Views/admin/layout/suffix.php'); ?>
