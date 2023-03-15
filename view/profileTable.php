<?php 
ob_start(); 
$title="Profile table"; 
?>
<div class="container" style="min-height:400px;">
	<div class="col-sm-12" >
		<!-- раздел информации - данные пользователя, поле пароль - информационно -->
		<div class="row" >
			<div class="col-sm-6">
				<h4>Name: </h4>				
				<h4>Password: </h4>						
			</div>
			<div class="col-sm-6">
				<h4><?php echo $_SESSION['name']; ?></h4>				
				<h4>******</h4>
			</div>
		</div>
		<!-- answer change - комментарий к выполнению изменения пароля -->
			<div class="row" id="answer" >
				<?php
				if(isset($result)){
					echo '<div class="col-sm-3">';
						if($result[0]==true){
							echo '<span style="color:green">'.$result[1].'</span>';
						}elseif($result[0]==false){
							echo '<span style="color:red">'.$result[1].'</span>';
						}
					echo '</div>';					
				}
				?>
			</div>
		<!-- end answer change -->
		<div class="row">
			<div class="col-sm-3" id="myLink">
				<h5><!--Ссылка - вызов формы для изменения пароля   -->
					<a href="#" class="btn btn-link btn-md" id="edit">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Change password
					</a>
				</h5>
			</div>
		</div>
	</div>	
	<!--  форма для ввода нового пароля   -->
	<div class="row" id="editPass" style="display:none">
		<div class="col-sm-6 col-sm-offset-2">
			<form method="POST" action="editProfileResult">
				<div class="modal-header">
					<h3>Change Password <span class="extra-title muted"></span></h3>
				</div>
				<div class="modal-body form-horizontal">
					<div class="control-group">
						<label for="new_password" class="control-label">New Password</label>				
							<input type="password" class="form-control" name="newPassword" required>				
					</div>
					<div class="control-group">
						<label for="confirm_password" class="control-label">Confirm Password</label>				
						   <input type="password" class="form-control" name="confirmPassword" required>				
					</div>      
				</div>
				<div class="modal-footer">
					<a href="profile" class="btn btn-primary btn-sm">Close</a>
					<button name="send" type="submit" class="btn btn-primary btn-sm">Save changes</button>
				</div>
			</form>	
		</div>				
	</div>
	<!-- end form -->
</div>
<!--   скрипт показать/скрыть форму-->
 <script src="public/js/jquery-3.3.1.js"></script>
 <script>
 $('#edit').click(function(){
	 $('#editPass').show();
	 $('#myLink').hide();
	 $('#answer').hide();
 });
 </script>
 
<?php 
	$content = ob_get_clean(); 
	include "view/template/layout.php";
	
	