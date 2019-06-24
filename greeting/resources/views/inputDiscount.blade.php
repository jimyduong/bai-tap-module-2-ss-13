<?php
?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
</head>
<body>
<div style=" width: 500px;margin: auto; height: auto; border: 1px solid red">
<form action="" method="post" >
    @csrf
    <h1>Product Discount Calculator</h1>
    <p>
        Product Description:
        <input type="text" name="ProductDescription" placeholder="mô tả của sản phẩm">
    </p>
    <p>
        List Price:
        <input type="number" name="ListPrice" placeholder="nhập vào giá">
    </p>
    <p>
        Discount Percent:
        <input type="number" name="DiscountPercent" placeholder="phan tram chiết khấu">
    </p>
    <button type="submit">Calculate Discount</button>

</form>
</div>

</body>
</html>
