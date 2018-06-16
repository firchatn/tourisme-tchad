<?php require(APPPATH .'Views/admin/layout/prefix.php'); ?>
<div class="card card-default">
  <div class="card-header">
    <h3 class="card-title">Contacts | Detail</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    </div>
  </div>
  <div class="card-body">
    <form role="form" action="#" method="post" id="form">
      <!-- text input -->
      <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" value="<?= $object['nom'] ?>" class="form-control" placeholder="Enter ..." readonly>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="<?= $object['email'] ?>" class="form-control" placeholder="Enter ..." readonly>
      </div>
      <div class="form-group">
        <label>Message</label>
        <textarea name="message"class="form-control" placeholder="Enter ..." readonly><?= $object['message']?></textarea>
      </div>
      <div class="form-group">
        <label>Tel</label>
        <input type="tel" name="tel" value="<?= $object['tel'] ?>" class="form-control" placeholder="Enter ..." readonly>
      </div>
      <div class="form-group">
        <label>Adresse</label>
        <input type="text" name="adresse" value="<?= $object['adresse'] ?>" class="form-control" placeholder="Enter ..." readonly>
      </div>
    </form>
  </div>
  <div class="card-footer">
    <a href="<?= site_url($base .'/edit/'. $object['id'])?>" class="btn btn-primary float-right" form="form"><i class="fa fa-check"></i> Edit</a>
    <a href="<?= site_url($base .'/delete/'. $object['id'])?>" class="btn btn-danger mr-2 float-right" form="form"><i class="fa fa-trash"></i> Delete</a>
    <a href="<?= site_url($base .'/index')?>" class="btn btn-warning mr-2 float-right" form="form"><i class="fa fa-ban"></i> Cancel</a>
  </div>
</div>
<?php require(APPPATH .'Views/admin/layout/suffix.php'); ?>
