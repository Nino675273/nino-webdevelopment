<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="bg-light text-center p-5">
<h1 class="display-3">The best product</h1>
<span class="fw-light">Hello</span>
</div>
    <section>
        <div class="container">
            <h2>Miscellaneous</h2>
            <div class="row">
                <?php
                require_once("fakeproducts.php");
                foreach ($products as $product) {
                ?>
                    <div class="col-sm-6 col-md-3 col-xxl-2 mb-3">
                    <div class="card h-100 shadow">
                    <div class="card-body">

                        <img src="<?= $product->image ?>" alt="<?= $product->title ?>" title="?=$product->title?">
                        <p><?= $product->title ?></p>
                        <p><small><?= $product->category ?></small></p>
                    </div>
                    <div class="card-footer">
                        <span class="float-start"><p class="text-muted mb-0"> <?= number_format($product->price, 2, '.') ?></p></span>

                        <button type="button" class="float-end rounded-circle btn btn-secondary"> + </button>
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
<footer>

</footer>
</html>