<nav>
  <div class="nav-object">
    <h1><?php echo SITENAME; ?></h1>
  </div>
  <div class="nav-object">
    <div class="nav-left">
      <a class="nav-button" href="<?php echo URLROOT; ?>">Home</a>
    </div>

    <div class="nav-right">
      <?php if(isset($_SESSION['user_id'])) : ?>
        <a class="nav-button"href="<?php echo URLROOT; ?>/users/logout">Logout</a>
      <?php else : ?>
        <a class="nav-button"href="<?php echo URLROOT; ?>/users/register">Register</a>
        <a class="nav-button"href="<?php echo URLROOT; ?>/users/login">Login</a>
      <?php endif; ?>
    </div>
  </div>

  <?php   if(isLoggedIn()) : ?>
    <div class="nav-object">
      <a class="nav-tab" href="<?php echo URLROOT; ?>/maps/index"><?= ucfirst($_SESSION['user_name']) ?>'s Stats</a>
      <a class="nav-tab" href="<?php echo URLROOT; ?>/maps/states"><?= ucfirst($_SESSION['user_name']) ?>'s State Map</a>
      <a class="nav-tab" href="<?php echo URLROOT; ?>/maps/countries"><?= ucfirst($_SESSION['user_name']) ?>'s World Map</a>
    </div>
  <?php endif; ?>
</nav>
