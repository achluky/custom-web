<!-- Navigation -->
    <?php
        @session_start();
        if(!isset($_SESSION['username'])){
            echo "<meta http-equiv='refresh' content='0,../?cmd=login'>";
            exit();
        }

        $custom = "";
        if(!isset($_GET['menu'])){
            $custom = "navbar-custom";
        }
        echo"
            <nav id='mainNav' class='navbar navbar-default $custom navbar-fixed-top'>
        ";
    ?>
    
    <!-- NavBar-->
    <nav class="navbar-default" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#home"><?php echo $web['judul_web']; ?></a>
            </div>

            <div class="collapse navbar-collapse navbar-right navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    
                    <li class="menuItem"><a href="?data=profil&aksi=edit">Profil</a></li>
                    <li class="menuItem"><a href="?data=galeri">Galeri</a></li>
                    <li class="menuItem"><a href="?data=kontak">Kontak</a></li>
                    <li class="menuItem"><a href="?data=client">Client</a></li>
                    <li class="menuItem"><a href="?data=pelayanan">Pelayanan</a></li>
                    <li class="dropdown">
                        <a class="page-scroll dropdown-toggle" data-toggle="dropdown" href="javascript:;">Admin<span class="caret"></span></a>
                            
                            <ul class="dropdown-menu">
                                <li><a href="?data=custom" style="color: #555">Custom Web</a></li>
                                <li><a href="?data=user" style="color: #555">Ganti Password</a></li>
                                <li><a href="../?cmd=logout" style="color: #555">Logout</a></li>
                            </ul>
                        
                    </li>
                </ul>
            </div>
           
        </div>
    </nav> 
        <!-- /.container-fluid -->
    </nav>
<!-- Navigation -->