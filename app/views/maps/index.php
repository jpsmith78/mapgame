<?php require APPROOT . '/views/inc/header.php'; ?>
  <div class="container">
    <h1><?php echo ucfirst($_SESSION['user_name']); ?>'s Map</h1>

    <div class="state_names">
      <h5 class="map-count">Map Count: <?php echo count($data['states']); ?></h5>
      <?php foreach($data['states'] as $state) : ?>
        <?php $states[] = $state->state_abbr; ?>
        <div class="state_name"><?php echo $state->state_name; ?></div>
      <?php endforeach; ?>
    </div>

    <script type="text/javascript">
      findVisitedStates(<?php echo json_encode($states); ?>)
    </script>
  </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>
