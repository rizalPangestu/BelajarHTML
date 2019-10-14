<?php include("template/head.php") ?>

    <div class="container-fluid">
        <section class="container mt-5">
            <h1>Test</h1>
            <div class="row">

          <?php $i = 0; while ($i < 4) { ?>
                <div class="col-md-3 my-2">
                    <div class="card costum_card-item">
                        <div class="thumb-wrap">
                            <img src="https://vignette.wikia.nocookie.net/futurediary/images/0/0e/Volume_1.png/revision/latest?cb=20151019201802" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body custom_card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
              <?php $i++; }?>

              <?php $i = 0; while ($i < 4) { ?>
                <div class="col-md-3 my-2">
                    <div class="card costum_card-item">
                        <div class="thumb-wrap">
                            <img src="https://99designs-blog.imgix.net/blog/wp-content/uploads/2017/12/80449dc9-aba8-4b53-94e3-d5ff90f53adf-e1513564434664.jpg?auto=format&q=60&fit=max&w=930" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body custom_card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </div>
              <?php $i++; }?>

              
            </div>
        </section>
    </div>