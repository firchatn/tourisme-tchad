<?php require(APPPATH .'Views/admin/layout/prefix.php'); ?>
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Sites Touristiques</h3>
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table">
      <tr>
        <th style="width: 10px">#</th>
        <th>Nom</th>
        <th>Ville</th>
        <th style="width: 140px">&nbsp;</th>
      </tr>
      <?php foreach($objects as $object): ?>
      <tr>
        <td><?= $object['id_sitetouristique'] ?>.</td>
        <td><?= $object['nom'] ?></td>
        <td><?= $object['ville'] ?></td>
        <td>
          <a href="<?= site_url($base .'/detail/'. $object['id_sitetouristique']) ?>" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></a>
          <a href="<?= site_url($base .'/edit/'. $object['id_sitetouristique']) ?>" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
          <a href="<?= site_url($base .'/delete/'. $object['id_sitetouristique']) ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
  <div class="card-footer">
    <a href="<?= site_url($base .'/add') ?>" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Ajouter</a>
  </div>
</div>
<?php require(APPPATH .'Views/admin/layout/suffix.php'); ?>
