<?php

$products = [
    "men perfume" => [
        0 => ["name" => "Bella Vita Date Women Perfume", "price" => 1000, "description" => "best fragrance", "image" => "https://img.joomcdn.net/45e0b22d2ac7b495a881d17e3dd32ca5aeabbfc6_original.jpeg"],
        1 => ["name" => "Beardo Origin Perfume", "price" => 1500, "description" => "best for men perdume", "image" => "https://beardo.in/cdn/shop/products/OriginPerfumeForMen100ml2160x216007.jpg?v=1708931788&width=1946"],
        2 => ["name" => "Marine Perfume", "price" => 2000, "description" => "Fresh, AquaticCreated for men", "image" => "https://www.libertyshoesonline.com/cdn/shop/files/Marine_NEWIMAGES-12_636267bf-8822-4b75-a28a-6cc4f52c1bf5.png?v=1721809823"],
        3 => ["name" => "Chanel Paris Perfume", "price" => 15000, "description" => "best fragrance", "image" => "https://momperfume.in/cdn/shop/files/Chanel-n-5-1_6d32a2a6-d44c-40c4-8542-ddacd750ad0c.jpg?v=1720104030"],
        4 => ["name" => "Aura Perfume", "price" => 500, "description" => "best fragrance for men", "image" => "https://m.media-amazon.com/images/I/51CWqZVX3BL._AC_UF1000,1000_QL80_.jpg"],
        5 => ["name" => "Gucci Bloom Intense Perfume", "price" => 4000, "description" => "best for women perfume", "image" => "https://i.ebayimg.com/images/g/vokAAOSwu31m9Sd1/s-l1200.png"]
    ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Collection</title>
    <link rel="stylesheet" href="https://bootswatch.com/5/litera/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        h1 {
            text-align: center;
            margin: 30px ;
            font-weight: bold;
            color:rgb(59, 90, 87);
        }
        .product-card {
            margin-bottom: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            transition: transform 0.3s ease;
        }
        .product-card:hover {
            transform: scale(1.05);
            cursor:pointer;
        }
        .product-card img {
            max-width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
        }
        .product-card h3 {
            font-size: 20px;
            font-weight: bold;
        }
        .product-card p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Men & Women Perfume</h1>
        <div class="row">
            <?php foreach($products as $product1 => $value1): ?>
                <?php foreach($value1 as $key => $value): ?>
                    <div class="col-md-4">
                        <div class="card product-card">
                            <img src="<?php echo $value['image'] ?>" alt="Perfume image">
                            <div class="card-body">
                                <h3><?php echo $value['name']; ?></h3>
                                <p><strong>Price:</strong> ₹<?php echo $value['price']; ?></p>
                                <p><?php echo $value['description']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>