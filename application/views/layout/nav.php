<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="<?= base_url(); ?>/home">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="<?= base_url(); ?>/home">Home</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <?php if(empty($this->session->userdata('user'))): ?>
        <li><a href="<?= base_url(); ?>/admin/admin_sign_in"><span class="glyphicon glyphicon-log-in"></span> Sign in</a></li>
        <li><a href="<?= base_url(); ?>/admin/admin_sign_up"><span class="glyphicon glyphicon-user"></span> Sign up</a></li>
      <?php else: ?>  
        <li><a href="<?= base_url(); ?>/admin/admin_sign_out"><span class="glyphicon glyphicon-log-out"></span> Sign out</a></li>
      <?php endif ?>  
    </ul>
  </div>
</nav>