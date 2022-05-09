                        <li class="nav-item">
          					<a class="nav-link" aria-current="page" href="#">Home</a>
        				</li>
				        <li class="nav-item">
          					<a class="nav-link" href="#">Link</a>
        				</li>
        				<li class="nav-item dropdown">
          					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            					Dropdown
          					</a>
          					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            					<li><a class="dropdown-item" href="#">Action</a></li>
            					<li><a class="dropdown-item" href="#">Another action</a></li>
            					<li><hr class="dropdown-divider"></li>
            					<li><a class="dropdown-item" href="#">Something else here</a></li>
          					</ul>
        				</li>
        				<li class="nav-item dropdown">
          					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">login</a>
							<ul class="dropdown-menu m-0 p-2 bg-primary " aria-labelledby="navbarDropdown">
								<form id="jardinactivo-login-form" action="#" method="post" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
            						<li class="p-1"><input class="form-control me-2" type="text" placeholder="Usuario" aria-label="Search"></li>
            						<li class="p-1"><input class="form-control me-2" type="password" placeholder="Contraseña" aria-label="Search"></li>
            						<li class="d-flex justify-content-center p-1"><button class="btn  bg-info" type="submit">Acceder</button></li>
									<li class="p-1"><a class="dropdown-item" href="<?php echo wp_lostpassword_url(); ?>">Olvidaste la contraseña?</a></li>
									<li class="p-1"><a class="dropdown-item" href="<?php echo wp_registration_url(); ?>">Registrarse</a></li>
								</form>
							</ul>
 		       			</li>
