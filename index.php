<?php
    $product = [
        "name" => "アボカド",
        "price" => 230,
        "image" => "https://dnbz0c2oupsw6.cloudfront.net/bcekt8ctzrsfdj1gsus49v9tnhqu"
    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="./style.css" >
  <title>デイトラ PHP</title>
</head>
<body>
  <div class="container">
    <div class="app-container">
      <h1 class="title">DailyTrial Shopping</h1>
      <div class="cards-container">
        <div class="card">
          <img class="card-image" src="<?php echo $product["image"]; ?>" alt="">
          <p class="card-title"><?php echo $product["name"]; ?></p>
          <div class="flex justify-between">
            <p class="card-price"><?php echo $product["price"]."円"; ?></p>
            <input min="0" class="item-number" type="number" value="0">
          </div>
        </div>
      </div>
      <div class="btn-footer bg-white">
        <input class="cart-btn" type="submit" name="submit" value="カートに追加" />
      </div>
    </div>
  </div>
</body>
</html>