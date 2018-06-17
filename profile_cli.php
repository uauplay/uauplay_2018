<?php include("includes/header2.php");
   
	require("includes/function.php");
	require("language/language.php");
	 
	
	if(isset($_SESSION['id']))
	{
			 
		$qry="select * from tbl_user where id='".$_SESSION['id']."'";
		 
		$result=mysqli_query($mysqli,$qry);
		$row=mysqli_fetch_assoc($result);

	}
	if(isset($_POST['submit']))
	{
		if($_FILES['image']['name']!="")
		 {		


				$img_res=mysqli_query($mysqli,'SELECT * FROM tbl_user WHERE id='.$_SESSION['id'].'');
			    $img_res_row=mysqli_fetch_assoc($img_res);
			

			    if($img_res_row['image']!="")
		        {
					 
					     unlink('images/'.$img_res_row['image']);
			     }

 				   $image="profile.png";
				   $pic1=$_FILES['image']['tmp_name'];
				   $tpath1='images/'.$image;
					
					copy($pic1,$tpath1);
 
					$data = array( 
							    'username'  =>  $_POST['username'],
							    'password'  =>  $_POST['password'],
							    'email'  =>  $_POST['email'],
							    'image'  =>  $image
							    );
					
					$channel_edit=Update('tbl_user', $data, "WHERE id = '".$_SESSION['id']."'"); 

		 }
		 else
		 {
					$data = array( 
							    'username'  =>  $_POST['username'],
							    'password'  =>  $_POST['password'],
							    'email'  =>  $_POST['email'] 
							    );
					
					$channel_edit=Update('tbl_user', $data, "WHERE id = '".$_SESSION['id']."'"); 
		}

		$_SESSION['msg']="11"; 
		header( "Location:profile_cli.php");
		exit;
		 
	}


?>
 
 <div class="container"> 
<section id="main-content">
<td class="align-middle">
  <section class="wrapper site-min-height">
    <div class="row">
      <div class="col-md-12 mt">
        <div class="col-md-12">
          <div class="search-box">
              <div class="page_title">Admin Profile</div>
            </div>
                <?php if(isset($_SESSION['msg'])){?> 
                 <div class="alert alert-success alert-dismissible" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                  <?php echo $client_lang[$_SESSION['msg']] ; ?></a> </div>
                <?php unset($_SESSION['msg']);}?> 
              </div>
            </div>
          </div>
          <div class="card-body mrg_bottom">
          	  
            <form action="" name="editprofile" method="post" class="form form-horizontal" enctype="multipart/form-data">
              <div class="section">
                <div class="section-body">
                  <div class="form-group">
                    <label class="col-md-3 control-label">Profile Image :-</label>
                    <div class="col-md-6">
                      <div class="fileupload_block">
                        <input type="file" name="image" id="fileupload">
                         
                        	<?php if($row['image']!="") {?>
                        	  <div class="fileupload_img"><img type="image" src="images/<?php echo $row['image'];?>" alt="profile image" /></div>
                        	<?php } else {?>
                        	  <div class="fileupload_img"><img type="image" src="assets/images/add-image.png" alt="add image" /></div>
                        	<?php }?>
                        
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Username :-</label>
                    <div class="col-md-6">
                      <input type="text" name="username" id="username" value="<?php echo $row['username'];?>" class="form-control" required autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Password :-</label>
                    <div class="col-md-6">
                      <input type="password" name="password" id="password" value="<?php echo $row['password'];?>" class="form-control" required autocomplete="off">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-3 control-label">Email :-</label>
                    <div class="col-md-6">
                      <input type="text" name="email" id="email" value="<?php echo $row['email'];?>" class="form-control" required autocomplete="off">
                    </div>
                  </div>                 
                   
                  <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                      <button type="submit" name="submit" class="btn btn-primary">Save</button>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

        
<?php include("includes/footer2.php");?>       
