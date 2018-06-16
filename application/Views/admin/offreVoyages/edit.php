<?php require(APPPATH .'Views/admin/layout/prefix.php'); ?>
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Offres Voyages | Modifier</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form role="form" action="#" method="post" id="form">
      <!-- text input -->
      <div class="form-group">
        <label>Libelle</label>
        <input type="text" name="libelle" value="<?= $object['libelle'] ?>" class="form-control" placeholder="Enter ...">
      </div>
      <div class="form-group">
        <label>Description</label>
        <input type="text" name="description" value="<?= $object['description'] ?>" class="form-control" placeholder="Enter ...">
      </div>
    </form>
  </div>
  <div class="card-footer">
    <button class="btn btn-primary float-right" form="form"><i class="fa fa-check"></i> Save</button>
    <a href="<?= site_url($base .'/delete/'. $object['id_offrevoyages'])?>" class="btn btn-danger mr-2 float-right" form="form"><i class="fa fa-trash"></i> Delete</a>
    <a href="<?= site_url($base .'/index')?>" class="btn btn-warning mr-2 float-right" form="form"><i class="fa fa-ban"></i> Cancel</a>
  </div>
</div>
<?php require(APPPATH .'Views/admin/layout/suffix.php'); ?>
