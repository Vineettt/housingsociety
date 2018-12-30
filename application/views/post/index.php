<h2 class="text-center"><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('post'); ?>
  <div class="form-group">
    <label>Title</label>
    <input type="text" class="form-control" name="title" placeholder="Add Title">
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="editor1" class="form-control ckeditor" name="body" placeholder="Add Body"></textarea>
  </div>
  <div class="form-group">
	  <label>Category</label>
	  <select name="category" class="form-control">
              <option value="suggestion">Suggestion</option>
              <option value="complaint">Complaint</option>
	  </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
  <?php echo form_close(); ?>
