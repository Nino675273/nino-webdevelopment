<?php include __DIR__ . "/../header.php"; 

$json_string = file_get_contents("https://nino-webdevelopment.herokuapp.com/api/article");
$parsed_json = json_decode($json_string, true);

?>

<div class="bg-light text-center p-5">
<h1 class="display-3">SecondLap</h1>
<span class="fw-light">Tweede Hands Laptop webshop</span>
</div>
    <section>
        <div class="container">
            <h2>Laptops</h2>
            <div class="row">
                <?php
                foreach ($parsed_json as $product) {
                ?>
                    <div class="col-sm-6 col-md-3 col-xxl-4 mb-3">
                    <div class="card h-100 shadow">
                    <div class="card-body">
                      <img src="<?= $product['imageurl'] ?>" alt="<?= $product['name'] ?>" class="img-thumbnail" title="?=$product['name']?">
                        <p><?= $product['name'] ?></p>
                        <p><small><?= $product['company'] ?></small></p>
                        <p><small><?= $product['description'] ?></small></p>
                    </div>
                    <div class="card-footer">
                        <span class="float-start"><p class="text-muted mb-0"> € <?= number_format($product['price'], 2, '.') ?></p></span>

                        <button type="button" class="float-end rounded-circle btn btn-secondary text-uppercase">  Add to Cart  </button>
                    </div>
                    </div>
                    </div>
                <?php
                }
                ?>
            </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

<?php include __DIR__ . "/../footer.php"; ?>