<?php    
	if(isset($_POST['Submit'])){ //check if form was submitted
  		$username = strtolower($_POST['username']);
  		$password = hash('sha256',$_POST['password']);
  		echo "<h1>puto</h1>";
  		$stmt = $conn->prepare("SELECT * FROM usuarios WHERE nombreUsuario='?' AND contrasenaUsuario='?')");

		$stmt->bind_param("ss", $username, $password);
		$stmt->execute(); 
		$result = $stmt->fetchAll();
		print_r($result);




		$stmt->close();
		$conn->close();
	}
?>

<div class="container">
        <div class="row justify-content-center align-items-center" style="height:100vh">
            <div class="col-4">
            	<center><img src="img/lumek.png" alt="Lumek Logo"></center>
            	<center><h1>Login Lumek</h1></center>
                <div class="card">
                    <div class="card-body">
                        <form action="" method="post" autocomplete="off">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            <button type="button" name="Submit" id="sendlogin" class="btn btn-primary">login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>