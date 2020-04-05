<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="row">
    <div class="col-md-6">
      <h1>Maps</h1>
    </div>
  </div>
  <ul>
    <?php foreach($data['maps'] as $map) : ?>
      <li><?php echo $map->user; ?></li>
      <li><?php echo $map->state; ?></li>
      <li><?php echo $_SESSION['user_name']; ?></li>

    <?php endforeach; ?>
  </ul>

<?php require APPROOT . '/views/inc/footer.php'; ?>
