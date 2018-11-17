    <!--========== HEADER ==========-->
        <header class="navbar-fixed-top s-header js__header-sticky js__header-overlay">
            <!-- Navbar -->
            <div class="s-header__navbar">
                <div class="s-header__container">
                    <div class="s-header__navbar-row">
                        <div class="s-header__navbar-row-col">
                            <!-- Logo -->
                            <div class="s-header__logo">
                                <a href="inicio" class="s-header__logo-link">
                                    <h3 class="g-font-size-19--xs g-font-size-24--sm g-font-size-28--md g-font-size-30--lg g-color--white no-margin" style="text-shadow: 2px 2px 4px rgba(20, 31, 31, 0.2);">Arturo Cogollo</h3>
                                    <p class="g-font-size-16--xs g-font-size-20--md pull-right g-color--white "  style="text-shadow: 2px 2px 4px rgba(20, 31, 31, 0.2);">Arquitecto</p>
                                </a>
                            </div>
                            <!-- End Logo -->
                        </div>
                        <div class="s-header__navbar-row-col">
                            <!-- Trigger -->
                            <a href="javascript:void(0);" class="s-header__trigger js__trigger">
                                <span class="s-header__trigger-icon"></span>
                                <svg x="0rem" y="0rem" width="3.125rem" height="3.125rem" viewbox="0 0 54 54">
                                    <circle fill="transparent" stroke="#fff" stroke-width="1" cx="27" cy="27" r="25" stroke-dasharray="157 157" stroke-dashoffset="157"></circle>
                                </svg>
                            </a>
                            <!-- End Trigger -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Navbar -->

            <!-- Overlay -->
            <div class="s-header-bg-overlay js__bg-overlay">
                <!-- Nav -->
                <nav class="s-header__nav js__scrollbar">
                    <div class="container-fluid">
                        <!-- Menu List -->                                
                        <ul class="list-unstyled s-header__nav-menu">
                            <li class="s-header__nav-menu-item"><a class="s-header__nav-menu-link s-header__nav-menu-link-divider -is-active" href="all">All</a></li>

                            <?php 
                                $menu = new GestorCategoria();
                                $menu -> menu();
                            ?>
                            

                        </ul>
                        <!-- End Menu List -->

                        
                    </div>
                </nav>
                <!-- End Nav -->

                <!-- Action -->
                <ul class="list-inline s-header__action s-header__action--rb">
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="inicio">
                            <span class="s-header__nav-menu-link g-display-inline-block--sm">Home</span><!--g-display-none--xs -->
                        </a>
                    </li>
                    <li class="s-header__action-item">
                        <a class="s-header__action-link" href="contact">
                            <span class="s-header__nav-menu-link g-display-inline-block--sm">Contact Us</span><!--g-display-none--xs -->
                        </a>
                    </li>
                </ul>
                <!-- End Action -->
            </div>
            <!-- End Overlay -->
        </header>
        <!--========== END HEADER ==========-->