<nav class="navbar navbar-expand-md navbar-light ">
                        <a class="navbar-brand" href="<?php echo base_url().'/Pocket/index';?>">
                            <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="Logo">
                        </a>
                        <a class="navbar-brand-sticky" href="index.php">
                            <img src="<?php echo base_url().'uploads/logo/'.$siteinf->logoimg;?>" alt="Logo">
                        </a>

                        <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
                            <ul class="navbar-nav m-auto">
                            <?php foreach($menus as $mn){?>
                                <li class="nav-item">
                                    <a href="<?php echo base_url().$mn['url'];?>" class="nav-link active">
                                    <?php echo $mn['menuname'];?>
                                  
                                    </a>
                               
                                </li>
                             
                                <?php } ?>
                                <!--<li class="nav-item dropdown show hidden-xs hidden-md" id="service">
                                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Services <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                                    <ul class="dropdown-menu mega_menuDropdown productMenu-dropdown">
                                        <div class="row">
                                            <div class="col-lg-3 col-md-4 col-sm-4 sm-hidden md-hidden text-center firs-menu-box">
                                                <h3 class="megamenu_title"><span>Services</span></h3>
                                                
                                                <picture>
                                                    <img src="./assets/img/service-img.png" class="img-fluid mRight mTop70" alt="TruckLogics Products" loading="lazy" width="300" height="191" />
                                                </picture>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 menu-Submenu-list secnd-menu-box">
                                                <ul class="megamenu-list">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-3.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Branding & Creative Design </span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-4.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Mobile App Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-5.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Search Engine Optimization – SEO</span>
                                                        </a>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 menu-Submenu-list">
                                                <ul class="megamenu-list">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-6.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Website Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-3.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> eCommerce Web Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-4.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> New Media Solution</span>
                                                        </a>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6 menu-Submenu-list">
                                                <ul class="megamenu-list">
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/submenu-icon-6.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> Website Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/icon/ecommerce-icon.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> eCommerce Web Development</span>
                                                        </a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-post_type menu-item-object-page">
                                                        <a href="#" class="menu-image-title-after menu-image-not-hovered">
                                                            <img width="40" height="40" src="./assets/img/submenu-icon-4.png" class="menu-image menu-image-title-after" alt="" decoding="async" />
                                                            <span class="menu-image-title-after menu-image-title"> New Media Solution</span>
                                                        </a>
                                                    </li>
                                                 
                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                    </li>--->
                            </ul>

                            <div class="menu-btn">
                                <a href="#" class="seo-btn mr-25"><i class='bx bx-search'></i> Search</a>
                            </div>
                            <div class="menu-btn">
                                <a href="tel:+<?php echo $contactus->phoneno;?>" target="_blank" class="seo-btn"><i class='bx bx-phone'></i> +<?php echo $contactus->phoneno;?></a>
                            </div>
                        </div>
                    </nav>