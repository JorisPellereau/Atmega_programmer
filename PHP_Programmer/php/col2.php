<?php
  include_once("include.php");
?>
<div class="col">
    <div class="manageFile"><p class="addFile button">ADD</p><p class="refreshFile button">REFRESH</p><p class="removeFile button" data-popup="<?php echo $urlConfirmRemove;?>" data-popup-get="">REMOVE</p></div>
    <form id="upload" method="post" action="" enctype="multipart/form-data">
      <input id="fileupload" type="file" name="files[]" multiple>
      <input type="submit" value="Upload">
    </form>
    <div class="FileListing">
      <div id="selectFileOnglet"><p class="selected" data-bind="#atmFileFile">Files</p><p data-bind="#atmReadFile">Read</p></div>
      <div id="atmFileFile" class="selectFile fileView" readatmfile="<?php echo $urlReadAtmFile; ?>"></div>
      <div id="atmReadFile" class="selectFile fileView" readatmfile="<?php echo $urlReadAtmRead; ?>" style="display: none"></div>
    </div>
    <div id="console" class="outputShell">
    </div>
    <div id="author">G.Spaur &copy; 2016</div>
  </div> 
