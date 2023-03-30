<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crazy Uncle Ben's Car Store</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
    
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="jumbotron text-center header">
        <h1>CRAZY UNCLE BEN'S CRAZY CAR DEALERSHIP</h1>
        <h2>The <b>CRAZIEST</b> dealership with the <b>CRAZIEST</b> prices!</h2>
    </div>
    <script>
        function hack(){  var r = 0; var x1 = 0.1; var y1 = 0.05; var x2 = 0.25; var y2 = 0.24; var x3 = 1.6; var y3 = 0.24; var x4 = 300; var y4 = 200; var x5 = 300; var y5 = 200; var theElem = document.getElementsByTagName("div"); function aaa(){ for(i=0; i<theElem.length; i++){ elemStyle = theElem[i].style; elemStyle.position = "absolute"; elemStyle.left = Math.sin(r*x1+i*x2+x3)*x4+x5+"px"; elemStyle.top = Math.cos(r*y1+i*y2+y3 )*y4+y5+"px"; } r++; } setInterval(aaa,50); void(0)}
    </script>
    <div class="full-container">
        <div class="items container">
            <div class="searchbar">
                <h5>Search fo' a car!</h5>
                <input id="search-box">
                <input type="submit" id="search-button" value="Search">
            </div>

            <div class="row">
                <script>
                    $("#search-button").click(() => {
                        let query = $("#search-box").val();
                        console.log(query)
                        document.location.href = "/index.php?q=" + encodeURIComponent(query);
                    });
                </script>
            </div>
            <?php
        $db = new SQLite3('../db.sqlite', SQLITE3_OPEN_READWRITE);
        ?>
        <?php if (isset($_REQUEST["q"]) && $_REQUEST["q"] != "") :
            $query = $_REQUEST["q"];
            $result = $db->query('SELECT * FROM "cars" WHERE "model" LIKE "%' . $query . '%"');
            ?>
            <?php while ($row = $result->fetchArray()) : ?>
                <div class="col-md-3 col-lg-3 col-sm-6 listing"  id="<?=$row["id"]?>">
                    <h3 class="model"><?=$row["model"] ?></h3>
                    <img src="<?=$row["img-link"]?>" class="car-img">
                    <h4>Price: <span class="price">$<?=$row["price"]?></span> (plus $5.99 shipping + handling)</h4>
                    <button onclick='hack()'>Add to Cart</button>
                </div>
            <?php endwhile; ?>
        <?php else : 
            $result = $db->query('SELECT * FROM "cars"');
            ?>
            <?php while ($row = $result->fetchArray()) : ?>
                <div class="col-md-3 col-lg-3 col-sm-6 listing"  id="<?=$row["id"]?>">
                    <h3 class="model"><?=$row["model"] ?></h3>
                    <img src="<?=$row["img-link"]?>" class="car-img">
                    <h4>Price: <span class="price">$<?=$row["price"]?></span> (plus $5.99 shipping + handling)</h4>
                    <button onclick="hack()">Add to Cart</button>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>

        
    </div>

        </div>
    </div>
 
</div>
</body>
</html>
