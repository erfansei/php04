<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            direction: rtl;
        }
        form{
            direction: ltr;
        }
    </style>
</head>

<body class="m-auto max-w-3xl">
    <?php
    include_once "./data.php";
    include_once "./function.php";
    foreach ($products as $product) {
        echo renderProducts($product['name'], $product['description'], $product['stock'],implode(' ', $product['colors']));
        echo "<br>";
    }
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        // $form = '<div>';
        // $form .= '<div class="text-center font-sans">';
        // $form .= "<h1 class='font-bold'>{$_POST['p_name']}</h1>";
        // $form .= '</div>';
        // $form .= '<div class="text-center">';
        // $form .= "<p>{$_POST['p_description']}</p>";
        // $form .= '</div>';
        // $form .= '<div class="text-center">';
        // $form .= "<span>{$_POST['p_stock']}</span>";
        // $form .= '</div>';
        // $form .= '</div>';
        // echo $form;
        echo renderProducts($_POST['p_name'],$_POST['p_description'],$_POST['p_stock'],$_POST['p_color']);
    }
    ?>
    <form class="bg-rose-500 max-w-40 text-center" method="POST" action="">
        <input name="p_name" type="text" placeholder="Product Name"/>
        <br>
        <br>
        <input name="p_description" type="text" placeholder="Description"/>
        <br>
        <br>
        <input name="p_stock" type="text" placeholder="Stock"/>
        <br>
        <br>
        <input name="p_color" type="text" placeholder="Color"/>
        <br>
        <br>
        <input type="submit" text="Submit"/>
    </form>
</body>

</html>