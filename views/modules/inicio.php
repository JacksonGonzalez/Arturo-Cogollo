<section>
      <div id="carouselExampleIndicators" class="carousel zoom landscape slide" data-ride="carousel">
        
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <?php 
              $slide = new GestorSlide();
              $slide -> slide();
          ?>
          
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <div class="circle-prev">
          <n class="fa fa-angle-left"></span>
          <span class="sr-only">Previous</span>
            
          </div>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <div class="circle-next">
          <spaspan class="fa fa-angle-right" ></span>
          <span class="sr-only">Next</span>
            
          </div>
        </a>
      </div>
    </section>