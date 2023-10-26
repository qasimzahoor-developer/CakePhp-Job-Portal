<div class="listpgWraper profile">
  <div class="container">
    <div class="row">
      <div class="col-md-9 col-md-offset-1 profile-left">
		<div class="profile-cover">
            <div class="cover-photo"><img src="<?php echo $this->request->webroot; ?>images/app-bg.jpg" alt="" class="img-responsive"></div>
            <div class="candidateinfo">
              <div class="userPic"><img src="<?php echo $this->request->webroot; ?>images/candidates/01.jpg" alt="" class="img-responsive"></div>
              <div class="title"><?php echo $profile['name']; ?></div>
              <div class="desi">Senior Data Analytist - Information Technology</div>
              <!--<div class="loctext"><i class="fa fa-history" aria-hidden="true"></i> Member Since, Aug 14, 2016</div>-->
              <div class="loctext"><i class="fa fa-map-marker" aria-hidden="true"></i> Islamabad, Pakistan</div>
              <div class="clearfix"></div>
            </div>
        </div><!--cover-->
        <hr />
        <div class="profile-about">
            <div class="about">
              <p><?php echo $profile['summary']; ?></p>
              <div class="clearfix"></div>
            </div>
        </div><!--cover-->
        
      </div><!--profile-left-->
      <div class="b-seprator"></div>
      <div class="col-md-9 col-md-offset-1 profile-left">
        <div class="profile-edu">
            <div class="edu">
              <h4>Education</h4>
              <?php if(count($profile['education']) > 0): foreach($profile['education'] as $key=>$education):?>
              <div class="edu-item editble">
                  <h5 class="title"><?php echo $education->degree_title; ?>  (<?php echo $this->Select->degreeType()[$education->degree_type]; ?>)
                  <a href="#" class="btnProfile delThis pull-right" data-action="<?php echo $this->Url->build([ "controller" => "Profile","action" => "edu_delete", "prefix" =>"employee",$key, "?" => ["section" => "education"]]); ?>"  data-id="<?php echo $key; ?>"  data-toggle="modal"><i class="fa fa-trash"></i></a>
                  <a class="loadModel btnProfile pull-right" data-action="<?php echo $this->Url->build([ "controller" => "Profile","action" => "edu_edit", "prefix" =>"employee",$key, "?" => ["section" => "education"]]); ?>"  data-toggle="modal" href="#ActionBox"><i class="fa fa-edit"></i></a></h5>
                  <div class="dname">  <?php echo $this->Select->degreeType()[$education->degree_type]; ?> in <?php echo $education->major_subject; ?>&lrm;</div>
                  <div class="dname">Marks/GPA/Grad: <?php echo $education->grade; ?></div>
                  <div class="from">Completed in <?php echo $this->Select->year()[$education->date_completed]; ?></div>                  
              </div><!--edu-item-->
			<?php endforeach; 
			else: ?>
				<div class="noedu">Add Your Education</div>
			<?php endif; ?>
              
              <div class="clearfix"></div>
              	<a class="loadModel btnProfile2 pull-right" data-action="<?php echo $this->Url->build([ "controller" => "Profile","action" => "edu_add", "prefix" =>"employee", "?" => ["section" => "education"]]); ?>"  data-toggle="modal" href="#ActionBox"><i class="fa fa-plus"></i> Add New</a>
              <div class="clearfix"></div>
            </div>
        </div><!--cover-->
        
      </div><!--profile-left-->
      <div class="b-seprator"></div>
      <div class="col-md-9 col-md-offset-1 profile-left">
        <div class="profile-edu">
            <div class="edu">
              <h4>Education</h4>
              
              <div class="edu-item">
                  <h5 class="title"> Blekinge Institute of Technology (BTH) </h5>
                  <div class="from">2017 -</div>
                  <div class="to">2008</div>
                  <div class="dname">  MSc in Business Administration&lrm;</div>
                  <div class="ctname">Lahore, Pakistan</div>
              </div><!--edu-item-->
              <div class="edu-item">
                  <h5 class="title"> Blekinge Institute of Technology (BTH) </h5>
                  <div class="from">2017 -</div>
                  <div class="to">2008</div>
                  <div class="dname">  MSc in Business Administration&lrm;</div>
                  <div class="ctname">Lahore, Pakistan</div>
              </div><!--edu-item-->
              
              <div class="clearfix"></div>
            </div>
        </div><!--cover-->
        
      </div><!--profile-left-->
      
    </div>
  </div>
</div>

<!-- Editor Pop -- >
<!-- Modal -->
                                        <div class="modal fade" id="ActionBox" role="dialog">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-body">

                                                        Loading...

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- modal -->
<script>
<?php $this->Html->scriptStart(['block' => true]); ?>
// Load toEdit orAdd
$(".loadModel").click(function(){
    $.get($(this).data("action"), function(){})  
	.done(function(data) {
		$("#ActionBox .modal-body").html(data);
	  })
	.fail(function() {
		$('#ActionBox').modal('toggle'); alert('There was an error, please try again.');
	 });
});

//Post
$(document).delegate(".modelPost", 'click', function(){
	var btnOjb = $(this);
	var btntext = btnOjb.val();
	$(this).prop('disabled', true);
	$(this).val('Saving...');
	var jqxhr = $.post( $( "#ActionBox form" ).attr( 'action' ), $( "#ActionBox form" ).serialize(), function() {
	  //$("#ActionBox .modal-body").html(data);
	})
	  .done(function(data) { 
		if(data.status === 'error'){
				alert(data.msg);
				btnOjb.prop('disabled', false);
				btnOjb.val(btntext);
			}
		else if(data.status === 'success'){
			location.reload();
		}
		else{
			$("#ActionBox .modal-body").html(data);
		}
	  })
	  .fail(function() {
		btnOjb.prop('disabled', false);
		btnOjb.val(btntext);
		alert( "There was an error, please try again." );
	  })
	  /*.always(function() {
		
		btnOjb.val(btntext);
	  });*/
});


// Delete Item
$(".delThis").click(function(){
    var btnOjb = $(this);
	var btntext = btnOjb.val();
	if (confirm('Are you sure you want to delete this?')) {
		var jqxhr = $.post( $(this).data("action"), $(this).data("id"), function() {})
		  .done(function(data) { 
			if(data.status === 'error'){
					alert(data.msg);
				}
			else if(data.status === 'success'){
				location.reload();
			}
		  })
		  .fail(function() {
			alert( "There was an error, please try again." );
		  })
	}
});

//Load animated gif
$('#ActionBox').on('show.bs.modal', function () {
  $("#ActionBox .modal-body").html('<img class="loader" src="<?php echo $this->request->webroot; ?>images/loader-1.gif"/>');
})

//Destroy Modal
$("#ActionBox").on('hidden.bs.modal', function () {
    $("#ActionBox .modal-body").html('');
});

<?php $this->Html->scriptEnd(); ?>
</script>
