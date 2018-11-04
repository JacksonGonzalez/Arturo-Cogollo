    <div style="margin-top: 05%;"></div>
    <section class="mt-4">
        <div class="container">
            <div class="content">
              <!-- Titulo-->
                <h3 class="text-center text-white my-3 h1">Categories</h3>
      

        <div class="container">
            <div class="row text-center text-lg-left">
                
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <a href="all" class="d-block mb-0 h-100">
                        <div class="img-contenedor">
                            <img style="width:400px; height:300px;" class="img-fluid img" src="http://arturocogollo.com/img/img_ini_11.jpg" alt="">
                        </div>
                        <h3 class="mt-2 mb-3 text-light name-project" style="">All</h3>
                    </a>
                </div>

                <?php 
                    $categorias = new GestorCategoria();
                    $categorias -> mostrarCategorias();

                ?>
                
        </div>     
    </section>

    <!-- Footer -->
<!--     <footer class="py-2 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Website under construction</p>
      </div>
    </footer> -->