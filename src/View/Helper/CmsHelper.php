<?php

namespace App\View\Helper;

use Cake\View\Helper;
use Cake\View\View;
use Cake\View\Helper\FormHelper;

class CmsHelper extends FormHelper
{
    public function addImage($options){
		$selectFile = $this->input($options['name'], array('id' => $options['id'], 'type' => 'hidden'));
		$selectFile .=  '
							<div class="sm-st sm-image clearfix">
                                <span id="ic_ff_'.$options['id'].'" class="sm-st-icon"><i class="fa fa-file"></i></span>
                                <div class="sm-st-info">
                                    <strong>Header Image</strong>
                                    <br/>Select file from filemanager<br/>
											<div class="">
                                                  <a  data-toggle="modal" href="#ff_'.$options['id'].'" class="btn btn-default btn-xs"><i class="fa fa-upload"></i> Select File</a>
                                                  <a class="btn btn-default btn-xs"><i class="fa fa-times"></i></a>
                                              </div>
                                </div>
                            </div>
							<div class="modal fade" id="ff_'.$options['id'].'" tabindex="-1" role="dialog" aria-labelledby="File Manager" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog filemanager">
                                                <div class="modal-content">
												<div class="modal-header">
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                        <h4 class="modal-title">File Manager</h4>
                                                    </div>
                                                    <div class="modal-body">

                                                        <iframe width="100%" height="550" frameborder="0" src="'.BASE_URL.'/admin/js/filemanager/dialog.php?type=1&field_id='.$options['id'].'"> </iframe>
                                                    </div>
                                                </div>
                                            </div>
                              </div>
		';
		$selectFile .= '  <script>
		 function responsive_filemanager_callback(field_id){
			jQuery("#ic_ff_"+field_id).html(\'<img src="\'+jQuery(\'#\'+field_id).val()+\'" width="100px" >\');
		}
		  </script> ';
		  
		return $selectFile; 
	}
	
	//Editor
	public function editor($options){
		
		$editor = $this->input($options['name'], array('class' => $options['class'], 'id' => $options['id'], 'rows' => $options['rows'], 'type' => 'textarea'));
		$editor .= '  <script>
		  tinymce.init({
			selector: "#'.$options['id'].'",
			menubar: false,
			relative_urls: false,
			min_height: 300,
			image_advtab: true,
			plugins: ["hr", "link", "image", "table", "anchor", "media", "code", "fullscreen"],
			toolbar: "undo redo | styleselect | bold italic alignleft aligncenter alignright alignjustify | bullist numlist outdent indent blockquote | link  unlink image  hr anchor  | table media | code fullscreen",
			external_filemanager_path: baseURL+"admin/js/filemanager/",
			filemanager_title:"Filemanager" ,
			external_plugins: { "filemanager" : "../filemanager/plugin.min.js"}
		
		  });
		  </script> ';
		return $editor;
	}
	
}