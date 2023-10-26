<?php

namespace App\Model\Behavior;

use Cake\Event\Event;
use Cake\ORM\Behavior;
use Cake\ORM\Entity;
use Cake\ORM\Query;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

class ImageBehavior extends Behavior {

    protected $_defaultConfig = [
        						'field'=>'image', 
								'uploadPath'=>'/uploads/images',
								'thumbImage' => ['thumbPath'=>'/uploads/images/imgThumbs', 
												'thumbSize'=> [[200,200]]
												]
										];

    public function beforeSave(Event $event, Entity $entity)
    {  
		$this->uploadFile($entity);
    }


	
	public function afterDelete(Event $event, Entity $entity)
    {
       	$config = $this->config();
	    $this->_fileUpdate($entity, $config['field']);

    }

    public function uploadFile(Entity $entity)
    {
        $config = $this->config();
        if (!is_array($config['field'])) {
            $field = $_FILES[$config['field']]; 
			if(file_exists($field['tmp_name']) AND is_uploaded_file($field['tmp_name'])):
				$filePath = $this->_moveFile($field);
				$entity->set($config['field'], $filePath);
				$this->_fileUpdate($entity, $config['field']);
			else:
				$entity->set($config['field'], $entity->getOriginal($config['field']));
			endif;
        } else {
            foreach ($config['field'] AS $value) {
                $field = $_FILES[$value];
				if(file_exists($field['tmp_name']) AND is_uploaded_file($field['tmp_name'])):
                	$filePath = $this->_moveFile($field);
                	$entity->set($value, $filePath);
					$this->_fileUpdate($entity, $value);
				else:
					$entity->set($value, $entity->getOriginal($value));
				endif;
            }
        }
    }

	private function _moveFile($uploadField)
		{
			$uploadPath = $this->config('uploadPath');
			if(!(is_dir(ROOT.DS.'webroot'.$uploadPath))){
				$paths = explode('/', $uploadPath);
				$mainRoot = ROOT.DS.'webroot';
				foreach($paths as $path):
					if(!is_dir($mainRoot.DS.$path)) mkdir($mainRoot.DS.$path, 0755, true);
					$mainRoot.= DS.$path;
				endforeach;
			} 
			$uploadFolder = new Folder(ROOT.DS.'webroot'.$uploadPath, 0755);	
			$upload = array();
			$uniqID = uniqid(time());
			if (isset($uploadField['tmp_name'])) {
				$upload['main'] = $uploadPath.'/'.$uniqID.'-'.$uploadField['name'];
				if(move_uploaded_file($uploadField['tmp_name'], ROOT.DS.'webroot'.$uploadPath.DS.$uniqID.'-'.$uploadField['name']) AND ($this->config('thumbImage')!==null))
				{
					foreach($this->config('thumbImage.thumbSize') as $size):
						$upload[$size[0].'_'.$size[1]] = $this->_imageResize($uploadField, $size[0], $size[1], $this->config('thumbImage.thumbPath') );
					endforeach;
				}
			}
			return json_encode($upload);
	}
	
	private function _imageResize($uploadField, $max_height, $max_width, $uploadPath)
	{		

		if(!(is_dir(ROOT.DS.'webroot'.$uploadPath))){
				$paths = explode('/', $uploadPath);
				$mainRoot = ROOT.DS.'webroot';
				foreach($paths as $path):
					if(!is_dir($mainRoot.DS.$path)) mkdir($mainRoot.DS.$path, 0755, true);
					$mainRoot.= DS.$path;
				endforeach;
		}
		
		// Get new sizes
		list($orig_width, $orig_height) = getimagesize($uploadField['tmp_name']);	
		$width = $orig_width;
		$height = $orig_height;
		
		# taller
		if ($height > $max_height) {
			$width = ($max_height / $height) * $width;
			$height = $max_height;
		}
	
		# wider
		if ($width > $max_width) {
			$height = ($max_width / $width) * $height;
			$width = $max_width;
		}
	
		$image_new = imagecreatetruecolor($width, $height);
		// Find format
        $ext = strtolower(pathinfo($uploadField['name'], PATHINFO_EXTENSION));
		  switch($ext){
			case 'gif': $image = imagecreatefromgif($uploadField['tmp_name']); break;
			case 'jpg': $image = imagecreatefromjpeg($uploadField['tmp_name']); break;
			case 'jpeg': $image = imagecreatefromjpeg($uploadField['tmp_name']); break;
			case 'png': $image = imagecreatefrompng($uploadField['tmp_name']); imagealphablending( $image_new, false ); imagesavealpha( $image_new, true ); break;
			//default : return;
		  }

		imagecopyresampled($image_new, $image, 0, 0, 0, 0, $width, $height, $orig_width, $orig_height);
		$uniqID = uniqid(time());
		$uploadThumb = ROOT.DS.'webroot'.$uploadPath.DS.$uniqID.'-'.basename($uploadField['name'],$ext).$ext;

		switch($ext){
			case 'gif': imagegif($image_new, $uploadThumb); break;
			case 'jpg': imagejpeg($image_new, $uploadThumb); break;
			case 'jpeg': imagejpeg($image_new, $uploadThumb); break;
			case 'png': imagepng($image_new, $uploadThumb, 9); break;
			//default : return;
		  }
		return $uploadPath.DS.$uniqID.'-'.basename($uploadField['name'],$ext).$ext;
		
	}
	
	private function _fileUpdate(Entity $entity, $field = null)
    {

		if (!is_array($field)) { 
            $paths = json_decode($entity->getOriginal($field));
			if($paths)
				foreach($paths as $path):
					if(file_exists(ROOT.DS.'webroot'.DS.$path))
                	unlink(ROOT.DS.'webroot'.DS.$path);
				endforeach;
        } else {
            foreach ($field AS $value) {
			   $paths = json_decode($entity->getOriginal($value));
				if($paths)
				foreach($paths as $path):
					if(file_exists(ROOT.DS.'webroot'.DS.$path))
                	unlink(ROOT.DS.'webroot'.DS.$path);
				endforeach;
            }
        }

    }	


}