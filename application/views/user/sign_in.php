<div class="container">
  <h2><b>用戶登入</b></h2>
  <?php if(!empty($this->session->userdata('error_msg'))):?>
        <div class="alert alert-danger"><?= $this->session->userdata('error_msg')?></div>
  <?php endif ?>
  <form action="<?= base_url(); ?>/user/user_sign_in_post" method="post">
    <div class="form-group">
      <label for="usr">UserName:</label>
      <input type="text" class="form-control" id="usr" name="usr" required>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" name="pwd" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>