<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新增品項</title>
</head>

<body>
    <h1>新增品項</h1>
    <form action="./api/add_item.php" method="post">
        <label for="name">品項名稱:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="price">價格:</label>
        <input type="text" name="price" id="price" required>
        <br>
        <label for="cost">成本:</label>
        <input type="text" name="cost" id="cost" required>
        <br>
        <label for="stock">庫存:</label>
        <input type="text" name="stock" id="stock" required>
        <button type="submit">新增</button>
    </form>


</body>

</html>