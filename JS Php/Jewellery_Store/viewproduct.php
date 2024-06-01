<?php
include("includes/mysqli_connection.php");
session_start();
$item = $_GET['Items'];
?>

<?php
// User is already logged in. Redirect them somewhere useful.
if (isset($_SESSION['username'])) {
    $User = $_SESSION['username'];
} else {
    $User = "";
}
?>

<!-- Head1 Part Start-->
<?php include("head1.html"); ?>
<!-- Head1 Part End-->

<!-- Top Part Start-->
<?php
if ($User != "") {
    include("top_links2.php");
} else {
    include("top_links.php");
}
?>
<!-- Top Part End-->


<!-- Main Div Tag Start-->
<div id="wrapper">

    <!-- Header Part Start-->
    <?php
    if ($User != "") {
        include("header2.php");
    } else {
        include("header.php");
    }
    ?>
    <!-- Header Part Start-->


    <!-- Middle Part Start-->
    <!-- Section Start-->
    <?php include("section.html"); ?>
    <!--Section End-->
    <!--Middle Part End-->

    <!--View Product Start-->
    <div class="box mb0">
        <div class="box-heading-1"><span>Items</span></div>
        <div class="box-content-1">
            <div class="box-product-1">
                <?php
                // This first query is just to get the total count of rows
                $sql = "SELECT COUNT(*) FROM `main_menu`, sub_menu, jewellery 
                        WHERE main_menu.mmenu_id = sub_menu.mmenu_id 
                        AND jewellery.category = sub_menu.id 
                        AND jewellery.category = $item";
                $query = mysqli_query($db_conx, $sql);
                $row = mysqli_fetch_row($query);
                // Here we have the total row count
                $rows = $row[0];
                // This is the number of results we want displayed per page
                $page_rows = 8;
                // This tells us the page number of our last page
                $last = ceil($rows / $page_rows);

                // Number of pages to display
                $Display_Pages = 10;

                // This makes sure $last cannot be less than 1
                if ($last < 1) {
                    $last = 1;
                }
                // Establish the $pagenum variable
                $pagenum = 1;
                // Get pagenum from URL vars if it is present, else it is = 1
                if (isset($_GET['pn'])) {
                    $pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
                }
                // This makes sure the page number isn't below 1, or more than our $last page
                if ($pagenum < 1) {
                    $pagenum = 1;
                } else if ($pagenum > $last) {
                    $pagenum = $last;
                }
                // This sets the range of rows to query for the chosen $pagenum
                $limit = 'LIMIT ' . ($pagenum - 1) * $page_rows . ',' . $page_rows;
                // This is your query again, it is for grabbing just one page worth of rows by applying $limit
                $sql = "SELECT * FROM `main_menu`, sub_menu, jewellery 
                        WHERE main_menu.mmenu_id = sub_menu.mmenu_id 
                        AND jewellery.category = sub_menu.id 
                        AND jewellery.category = $item 
                        $limit";
                $query = mysqli_query($db_conx, $sql);

                $sql2 = "SELECT * FROM `main_menu`, sub_menu, jewellery 
                         WHERE main_menu.mmenu_id = sub_menu.mmenu_id 
                         AND jewellery.category = sub_menu.id 
                         AND jewellery.category = $item 
                         LIMIT 1";
                $query2 = mysqli_query($db_conx, $sql2);
                $rowtext = mysqli_fetch_row($query2);

                // Check if $rowtext is not null
                if ($rowtext) {
                    // This shows the user what page they are on, and the total number of pages
                    $textline1 = "You Selected: " . $rowtext[1] . " - " . $rowtext[5] . " (<b>$rows</b>)";
                } else {
                    $textline1 = "You Selected: - (<b>$rows</b>)";
                }
                $textline2 = "Page <b>$pagenum</b> of <b>$last</b>";

                // Establish the $paginationCtrls variable
                $paginationCtrls = '';
                // If there is more than 1 page worth of results
                if ($last != 1) {
                    if ($pagenum > 1) {
                        $previous = $pagenum - 1;
                        $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?Items=' . $item . '&pn=1">First</a> &nbsp; &nbsp; ';
                        $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?Items=' . $item . '&pn=' . $previous . '">Previous</a> &nbsp; &nbsp; ';
                        for ($i = $pagenum - $Display_Pages; $i < $pagenum; $i++) {
                            if ($i > 0) {
                                $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?Items=' . $item . '&pn=' . $i . '">' . $i . '</a> &nbsp; ';
                            }
                        }
                    }
                    $paginationCtrls .= '' . $pagenum . ' &nbsp; ';
                    for ($i = $pagenum + 1; $i <= $last; $i++) {
                        $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?Items=' . $item . '&pn=' . $i . '">' . $i . '</a> &nbsp; ';
                        if ($i >= $pagenum + $Display_Pages) {
                            break;
                        }
                    }
                    if ($pagenum != $last) {
                        $next = $pagenum + 1;
                        $paginationCtrls .= ' &nbsp; &nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?Items=' . $item . '&pn=' . $next . '">Next</a> &nbsp; &nbsp; ';
                        $paginationCtrls .= '<a href="' . $_SERVER['PHP_SELF'] . '?Items=' . $item . '&pn=' . $last . '">Last</a>';
                    }
                }
                $list = '';
                $src = "Photos/";

                if (!isset($_SESSION['username'])) {
                    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        $id = $row["id"];
                        $prodname = $row["prodname"];
                        $path = $row["path"];
                        $category = $row["category"];
                        $price = "Rs. " . $row["price"];
                        $desc = $row["descr"];
                        $width = "150px";
                        $height = "150px";

                        $list .= '
                        <div>
                            <div class="image"><a href="' . $src . $path . '"><img width="' . $width . '" height="' . $height . '" src="' . $src . $path . '" alt="' . $prodname . '"></a></div>
                            <div class="proName">
                                <div class="name"><a href="' . $src . $path . '">' . $desc . '</a></div>
                                <div class="price">' . $price . '</div>
                                <div class="cart">
                                    <label class="btn"></label>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                        $id = $row["id"];
                        $prodname = $row["prodname"];
                        $path = $row["path"];
                        $category = $row["category"];
                        $price = "Rs. " . $row["price"];
                        $desc = $row["descr"];
                        $width = "150px";
                        $height = "150px";

                        $list .= '
                        <div>
                            <div class="image"><a href="' . $src . $path . '"><img width="' . $width . '" height="' . $height . '" src="' . $src . $path . '" alt="' . $prodname . '"></a></div>
                            <div class="proName">
                                <div class="name"><a href="' . $src . $path . '">' . $desc . '</a></div>
                                <div class="price">' . $price . '</div>
                                <div class="cart">
                                    <label class="btn">
                                        <form method="post" action="view.php"><input type="hidden" name="txtid" value="' . $id . '"><input type="submit" value="Add to Cart" class="button"/></form>
                                    </label>
                                </div>
                            </div>
                        </div>';
                    }
                }
                // Close your database connection
                mysqli_close($db_conx);
                ?>

                <?php
                if ($rows == 0) {
                    echo "<h2 align='center'>Nothing to display</h2>";
                } else {
                    echo "<h2>" . $textline1 . " Paged</h2>";
                    echo "<p>" . $textline2 . "</p>";
                    echo $list;
                    echo "<p align='center'>" . $paginationCtrls . "</p>";
                }
                ?>
            </div>
        </div>
    </div>
    <!--View Product End-->

    <!--Special Promo Banner Start-->
    <div class="box-promo" id="box-promo">
        <div class="box-heading-1"><span>PROMO ON FEATURED ITEMS</span></div>
        <div id="banner0" class="banner">
            <div style="display:block;"><img src="image/addBanner-940x145.jpg" alt="Special Offers" title="Special Offers"/></div>
        </div>
    </div>
    <!--Special Promo Banner End-->

    <!--Footer Part Start-->
    <?php include("footer.php"); ?>
    <!--Footer Part End-->
</div>
<!-- Main Div Tag End-->

<!--Flexslider Javascript Part Start-->
<?php include("flexslider.php"); ?>
<!--Flexslider Javascript Part End-->
</body>
</html>
