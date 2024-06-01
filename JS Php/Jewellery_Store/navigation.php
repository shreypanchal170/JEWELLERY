<?php
// Include database configuration (adjust path as needed)
include("includes/config.php");

// Create a database connection
$conn = mysqli_connect("localhost", "root", "", "bbjewels");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch main menu items
$main_menu_query = "SELECT * FROM main_menu";
$main_menu_result = mysqli_query($conn, $main_menu_query);

if (!$main_menu_result) {
    die("Main menu query error: " . mysqli_error($conn));
}

// Generate navigation menu
echo '<nav id="nav">';
echo '<div id="menu">';
echo '<h3 class="menuarrow"><span>Menu</span></h3>';
echo '<ul>';

while ($r = mysqli_fetch_array($main_menu_result)) {
    echo '<li><a href="' . $r['mmenu_link'] . '" id="' . $r['mmenu_id'] . '">' . $r['mmenu_name'] . '</a>';
    echo '<div><ul>';

    // Fetch sub-menu items
    $sub_menu_query = "SELECT * FROM sub_menu WHERE mmenu_id=" . $r['mmenu_id'];
    $sub_menu_result = mysqli_query($conn, $sub_menu_query);

    if (!$sub_menu_result) {
        die("Sub-menu query error: " . mysqli_error($conn));
    }

    while ($r1 = mysqli_fetch_array($sub_menu_result)) {
        echo '<li><a href="' . $r1['smenu_link'] . '?Items=' . $r1['0'] . '&Subname=' . $r1['2'] . '&MenuCat=' . $r1['1'] . '">' . $r1['smenu_name'] . '</a></li>';
    }

    echo '</ul></div></li>';
}

echo '</ul></div></nav>';
mysqli_close($conn);
?>
