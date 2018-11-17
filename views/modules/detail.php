<?php 
      if(!isset($_GET["idProy"])){
        header("location: categories");
        exit();
      }

      $idProyecto = $_GET["idProy"];

      $proyecto = new GestorProyecto();

    ?>
    <div style="">
            <!-- Testimonials -->
            <div class="g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="container g-text-center--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--500 g-color--white g-letter-spacing--2 g-margin-b-50--xs"><?php $proyecto->tituloProyecto($idProyecto); ?></p>
                    <div class="s-swiper js__swiper-testimonials" style="box-shadow: 0 4px 8px 0 rgba(10, 12, 12, 0.5), 0 6px 20px 0 rgba(10, 12, 12, 0.9);">
                        <!-- Swiper Wrapper -->
                        <div class="swiper-wrapper">
                          <?php 
                              $proyecto -> verGaleria($idProyecto);
                          ?>
                            
                        </div>
                        <!-- End Swipper Wrapper -->

                        <!-- Pagination -->
                        <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination  g-text-center--xs"></div>
                    </div>
                        <!-- Arrows -->
                            <div class="g-font-size-22--xs g-color--heading js__swiper-fraction"></div>
                            <a href="javascript:void(0);" class="g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-right js__swiper-btn--next" style="border-style: none;"></a>
                            <a href="javascript:void(0);" class="g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--white-brd g-radius--circle ti-angle-left js__swiper-btn--prev" style="border-style: none;"></a>
                        <!-- End Arrows -->
                </div>
            </div>
        <!-- End Testimonials -->
      
        </div>
			
