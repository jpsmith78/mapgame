<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6">
      <h1>Maps</h1>
    </div>
  </div>
  <ul>
    <?php foreach($data['maps'] as $map) : ?>
      <li><?php echo $map->name ?></li>
    <?php endforeach; ?>
  </ul>

<?php require APPROOT . '/views/inc/footer.php'; ?>
