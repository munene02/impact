<?php
?>
<header id="header" class="header-container header-type-classic header-navbar-classic ">
    <div class="navbar-container">
        <div class="navbar navbar-default navbar-scroll-fixed">
            <div class="navbar-default-wrap">
                <div class="container">

                    <div class="navbar-wrap">
                        <div class="navbar-header">
                            <button data-target=".primary-navbar-collapse" data-toggle="collapse" type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar-top"></span>
                                <span class="icon-bar bar-middle"></span>
                                <span class="icon-bar bar-bottom"></span>
                            </button>
                            <a class="navbar-brand" title="IMPACT" href="index.php">
                                <img class="logo" alt="IMPACT" src="images/logo-white.png">
                                <img class="logo-fixed" alt="IMPACT" src="images/logo-fixed.png">
                                <img class="logo-mobile" alt="IMPACT" src="images/logo-mobile.png">
                            </a>
                        </div>
                        <nav class="collapse navbar-collapse primary-navbar-collapse">
                            <ul class="nav navbar-nav primary-nav">
                                <li <?php if($page==1){echo 'class="active"';}?> >
                                    <a title="Home" href="index.php" class="hover">
                                        <span class="underline">Home</span> <span class="caret"></span>
                                    </a>
                                </li>
                                <li <?php if($page==2){echo 'class="active"';}?> >
                                    <a title="About Us" href="#" class="hover">
                                        <span class="underline">About Us</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a title="Who We Are" href="who-we-are.php">Who We Are</a></li>
                                        <li><a title="Our History" href="our-history.php">Our History</a></li>
                                        <li><a title="Board of Directors" href="board-of-directors.php">Board of Directors</a></li>
                                        <li><a title="Staff Profiles" href="staff-profiles.php">Staff Profiles</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown <?php if($page==3){echo 'active';}?>" >
                                    <a title="Detergents" href="#" class="dropdown-hover">
                                        <span class="underline">Detergents</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a title="Industrial Detergent" href="industrial-detergents.php">Industrial Detergents</a></li>
                                        <li><a title="" href="domestic-detergents.php">Domestic Detergents</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown <?php if($page==4){echo 'active';}?>">
                                    <a title="Antiseptics" href="#" class="dropdown-hover">
                                        <span class="underline">Antiseptics</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a title="" href="water-disinfection-and-purification.php">Water Disinfection & Purification</a></li>
                                        <li><a title="Skin Disinfectants" href="skin-disinfectants.php">Skin Disinfectants</a></li>
                                        <li><a title="" href="surface-disinfectants.php">Surface/Equipment/Inanimate Objects</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children dropdown <?php if($page==5){echo 'active';}?>">
                                    <a title="Other Products" href="#" class="dropdown-hover">
                                        <span class="underline">Other Products</span> <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a title="Oils" href="oils.php">Oils</a></li>
                                        <li><a title="Diagnostics" href="diagnostics.php">Diagnostics</a></li>
                                        <li><a title="Bases" href="bases.php">Bases</a></li>
                                        <li><a title="Chemicals" href="chemicals.php">Chemicals</a></li>
                                        <li><a title="Sucuents" href="massage-products.php">Massage Products</a></li>
                                    </ul>
                                </li>
                                <li <?php if($page==6){echo 'class="active"';}?>>
                                    <a title="Catalogue" href="catalogue.pdf" target="_blank" class="hover">
                                        <span class="underline">Catalogue</span> <span class="caret"></span>
                                    </a>
                                </li>
                                <li <?php if($page==7){echo 'class="active"';}?>>
                                    <a title="Gallery" href="gallery.php" class="hover">
                                        <span class="underline">Gallery</span> <span class="caret"></span>
                                    </a>
                                </li>

                                <li>
                                    <a title="Contact" href="contact.html" class="hover">
                                        <span class="underline">Contact</span> <span class="caret"></span>
                                    </a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
