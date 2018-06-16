<?php require(APPPATH .'Views/admin/layout/prefix.php'); ?>
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Contacts | Ajouter</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form role="form" action="#" method="post" id="form">
      <!-- text input -->
      <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="quartier" class="form-control" placeholder="Enter ..."></textarea>
      </div>
      <div class="form-group">
        <label>Tel</label>
        <input type="tel" name="tel" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Adresse</label>
        <input type="text" name="adresse" class="form-control" placeholder="Enter ...">
      </div>
    </form>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary float-right" form="form"><i class="fa fa-check"></i> Save</button>
    <a href="<?= site_url($base .'/index')?>" class="btn btn-warning mr-2 float-right" form="form"><i class="fa fa-ban"></i> Cancel</a>
  </div>
</div>
<?php require(APPPATH .'Views/admin/layout/suffix.php'); ?>
