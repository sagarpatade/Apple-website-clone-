<?php
include_once 'Processes/logged.php';
include_once 'includes/db.php';

$getCategory = mysqli_query($conn, "SELECT * FROM categories");
if (isset($_SESSION['data'])) {
    $uid = $_SESSION['data']['id'];
    $getProducts = mysqli_query($conn, "SELECT * FROM bag WHERE user_id = '$uid'");
}
if (!logged()) {
    header("Location: Login/index.php");
    exit();
}
if (!logged()) {
    header("Location: Login/index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once 'includes/head.inc.php'; ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <a class="navbar-brand" href="index.php"><i class="fab fa-apple"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto">
                <?php foreach ($getCategory as $categ) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="Products/index.php?categName=<?php echo $categ['category_name']; ?>"><?php echo $categ['category_name']; ?></a>
                    </li>
                <?php } ?>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" tabindex="-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-shopping-bag"></i>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="Bag/index.php">Bag <span class="text-primary"><?php echo mysqli_num_rows($getProducts); ?></span></a>
                        <?php if (admin()) : ?>
                            <a class="dropdown-item" href="Admin/index.php">Admin</a>
                        <?php endif; ?>
                        <div class="dropdown-divider"></div>
                        <form action="Processes/logout.php" method="POST">
                            <button class="dropdown-item" type="submit">Log Out</button>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- NAVBAR END -->

    <div class="hero__container">
        
        <img src="images/all.png" alt="item">
        
        
    </div>
    <div class="hero__secondContainer">
        <div class="text-light">
            <p class="display-4" style="font-weight: bold;">iPhone 15 Pro</p>
           
            
            <p class="lead">Buy directly from Apple with special carrier offers.</p>
        </div>
    </div>

    <div class="hero__thirdContainer">
        <div class="top">
            <img src="images/logo__dcojfwkzna2q_largetall.png" alt="red-logo">
            <p class="display-4" style="font-weight: bold;">Give something wonderful.</p>
        </div>
        <div class="bottom">
            <img src="images/phone__ulbbo0vgyf6y_largetall.png" alt="item">
            <img src="images/watch__csqqcayzqueu_mediumtall.png" alt="item">
            <img src="images/ipad__bq6djchifrbm_largetall.png" alt="item">
        </div>
    </div>

    <!-- hero containers end -->

    <div class="showcase__gallery" style="display: flex;">
        <div class="row">
            <div class="col">
                <img src="images/iphone_12_us__fo0stbby242m_large.jpg" alt="grid-item">
                <div class="text-dark">
                    <p class="display-4">iPhone 14</p>
                    
                    <p class="lead">From ₹10983.00/mo.Per Month with instant savings and No Cost EMI or MRP ₹69900.00
                    (Incl. of all taxes)</p>
                    <p class="lead">Buy directly from Apple with special carrier offers..</p>
                </div>
            </div>
            <div class="col">
                <img src="images/tile__cauwwcyyn9hy_large.jpg" alt="grid-item">
                <div class="text-dark">
                    <p class="display-4"></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/store-card-50-TAA-202310?wid=960&hei=1000&fmt=p-jpg&qlt=95&.v=1697149577145" alt="grid-item">
                <div class="text-dark">
                    <p class="display-4">Join Free Sessions At Your Apple Store </p>
                    <p1>Learn about the latest features and how to go further with your Apple devices.</p1>
                </div>
            </div>
            <div class="col">
                <img src="https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/store-card-40-macbook-pro-202310?wid=800&hei=1000&fmt=p-jpg&qlt=95&.v=1696964122967" alt="grid-item">
                <div class="text-dark">
                    <p class="display-4">MacBook Pro</p>
                </div>
            </div>
        </div>
    </div>
    <!-- gallery end -->
    <?php include_once 'includes/footer.inc.php'; ?>
</body>

</html>