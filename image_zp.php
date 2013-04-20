<?php
$im = new imagick( "$file.pdf" );;
$im->setCompression(Imagick::COMPRESSION_JPEG);
$im->setCompressionQuality(60);
$im->setImageFormat('jpeg');
header( "Content-Type: image/jpeg" );
$im->writeImage( "$file.jpg" );
$im->clear();
$im->destroy();
if ($option == 'jpg') {
	$file .= ".jpg";
	$mimeType = "image/jpeg";
}
else {
	$files_to_zip = array("$file.jpg", "$file.pdf");
	create_zip($files_to_zip,"$file.zip",true);
	$file .= '.zip';
	$mimeType = 'application/zip';
}
promptToDownload($file,$file,$mimeType);

function promptToDownload($path,$browserFilename, $mimeType)
{

if (!file_exists($path) || !is_readable($path)) {

return null;
}
header("Content-Type: " . $mimeType);
header("Content-Disposition: attachment; filename=\"$browserFilename\"");
header('Expires: ' . gmdate('D, d M Y H:i:s', gmmktime() - 3600) . ' GMT');
header("Content-Length: " . filesize($path));
// If you wish you can add some code here to track or log the download

// Special headers for IE 6
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Pragma: public');
$fp = fopen($path, "r");
fpassthru($fp);

}

function create_zip($files = array(),$destination = '',$overwrite) {
  	if(file_exists($destination) && !$overwrite) { return false; }
  	//vars
  	$valid_files = array();
  	//if files were passed in...
  	if(is_array($files)) {
    	//cycle through each file
    		foreach($files as $file) {
      		//make sure the file exists
      			if(file_exists($file)) {
        		$valid_files[] = $file;
      			}
    		}
  	}
  	//if we have good files...
  	if(count($valid_files)) {
    		//create the archive
    		$zip = new ZipArchive();
    		if($zip->open($destination,$overwrite ? ZIPARCHIVE::OVERWRITE : ZIPARCHIVE::CREATE) !== true) {
      			return false;
    		}
    		//add the files
    		foreach($valid_files as $file) {
      			$zip->addFile($file,$file);
   		}
    		//debug
    		//echo 'The zip archive contains ',$zip->numFiles,' files with a status of ',$zip->status;
    
    		//close the zip -- done!
    		$zip->close();
    
    		//check to make sure the file exists
    		return file_exists($destination);
  	}
  	else
  	{
    		return false;
 	}
}
