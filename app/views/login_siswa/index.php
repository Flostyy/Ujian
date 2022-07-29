	<img class="wave" src="<?= BASE; ?>/img/wave.png">
	<div class="container">
		<div class="img">
			<img src="<?= BASE; ?>/img/bg.svg">
		</div>
		<div class="login-content">
			<form action="<?= BASE; ?>/Login/loginSiswa" method="POST" class="login-username">
				<img src="<?= BASE; ?>/img/smea.jpg">
				<h2 class="title"><?= $data['judul']; ?></h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>

           		   <div class="input-group">
           		   		<h5>Email</h5>
           		   		<input type="text" name="email" class="input" value="" required >
           		   </div>

           		</div>
           		<div class="input-div pass">

           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>

           		   <div class="input-group">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input" value="" required>
            	   </div>

            	</div>
			
            	<!-- <a href="register.php">Don't Have an Account?</a> -->
				<a href="https://api.whatsapp.com/send?phone=6283833092724" type="submit" name="btnWa" target="_blank">Help?</a>

					<div class="input-group">
            			<button type="submit" name="submit" class="btn">Login</button>
					</div>
            </form>
        </div>
    </div>