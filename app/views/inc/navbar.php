<nav >
      <a class="navbar-brand" href="<?php echo URLROOT; ?>"><?php echo SITENAME; ?></a>

      <div >
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo URLROOT; ?>">Home</a>
          </li>
          <?php   if(isLoggedIn()) : ?>
            <li>
              <a class="nav-link" href="<?php echo URLROOT; ?>/maps/index"><?= ucfirst($_SESSION['user_name']) ?>'s Map</a>
            </li>
          <?php endif; ?>

        </ul>

        <ul>
          <?php if(isset($_SESSION['user_id'])) : ?>
            <li>
              <a href="<?php echo URLROOT; ?>/users/logout">Logout</a>
            </li>
          <?php else : ?>
            <li>
              <a href="<?php echo URLROOT; ?>/users/register">Register</a>
            </li>
            <li>
              <a href="<?php echo URLROOT; ?>/users/login">Login</a>
            </li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
</nav>
