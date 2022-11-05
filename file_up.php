<!DOCTYPE html>
<html>
<body>
<style>
  .image{
    height: 100px;
    width: 100px;
  }
  .image:hover{
    height: 200px;
    width: 200px;
  }
</style>
<form action="uploader.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">

   <input type="submit" value="delete all" name="delete">
</form>
<div>
  <?php
$dir_name = "files/";
$images = glob($dir_name."*.jpg");
foreach($images as $image) {
   echo '<img class="image" src="'.$image.'" /><br />';
}
  ?>
</div>
</body>
</html>