<div class="container">
  <h2><b>新增文章</b></h2>
  <form action="<?= base_url(); ?>/post/post_input_post" method="post">
    <div class="form-group">
      <label for="title">title:</label>
      <input type="text" class="form-control" id="title" name="title">
    </div>
    <div class="form-group">
        <label for="content">content:</label>
        <textarea class="form-control" rows="5" id="content" name="content"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>