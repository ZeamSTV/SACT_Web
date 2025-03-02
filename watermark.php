<?php
  session_start();
  $session=session_id();

  @define ( '_template' , './templates/');
  @define ( '_source' , './sources/');
  @define ( '_lib' , './admin/lib/');

  include_once _lib."config.php";
  include_once _lib."constant.php";
  include_once _lib."functions.php";  
  include_once _lib."class.database.php"; 
  include_once _lib."file_requick.php";
  $d = new database($config['database']);

  $d->reset();
  $sql1="select * from #_photo  where com='slideshow2' order by stt asc limit 0,1 ";
  $d->query($sql1);
  $dongdau=$d->fetch_array();
  
  $img_watermark = 'upload/hinhanh/wtm.png';

//  $img_watermark = 'upload/hinhanh/'.$dongdau['photo'].'';
/*
 * This script places a watermark on a given jpeg, png or gif image.
 *
 * Use the script as follows in your HTML code:
 * <img src="watermark.php?image=image.jpg&watermark=watermark.png" />
 *
 * Visit http://www.htmlguard.com for more great scripts!
 */
  // loads a png, jpeg or gif image from the given file name
  function imagecreatefromfile($image_path) {
    // retrieve the type of the provided image file
    list($width, $height, $image_type) = getimagesize($image_path);

    // select the appropriate imagecreatefrom* function based on the determined
    // image type
    switch ($image_type)
    {
      case IMAGETYPE_GIF: return imagecreatefromgif($image_path); break;
      case IMAGETYPE_JPEG: return imagecreatefromjpeg($image_path); break;
      case IMAGETYPE_PNG: return imagecreatefrompng($image_path); break;
      default: return ''; break;
    }
  }

 // load source image to memory
  $image = imagecreatefromfile('upload/sanpham/'.$_GET['image']);
  if (!$image) die('Unable to open image');

  // load watermark to memory
  $watermark = imagecreatefromfile($img_watermark);
  if (!$image) die('Unable to open watermark');

  // calculate the position of the watermark in the output image (the
  // watermark shall be placed in the lower right corner)
 
  $watermark_pos_x = 0;
  $watermark_pos_y = 0;
 
 
  //$watermark_pos_x = imagesx($image) - imagesx($watermark) - 8;
  //$watermark_pos_y = imagesy($image) - imagesy($watermark) - 10;

  // merge the source image and the watermark
  imagecopy($image, $watermark,  $watermark_pos_x, $watermark_pos_y, 0, 0,
    imagesx($watermark), imagesy($watermark));

  // output watermarked image to browser
  header('Content-Type: image/jpeg');
  imagejpeg($image);  // use best image quality (100)

  // remove the images from memory
  imagedestroy($image);
  imagedestroy($watermark);

?>