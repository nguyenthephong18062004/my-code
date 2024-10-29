<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BÀI TẬP THỰC HÀNH PHP  </title>
    <style>
        .title{
            color: red;
            font-family: 'Times New Roman', Times, serif;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
<body>
    <div class="title">BÀI TẬP THỰC HÀNH PHP SỐ 2</div>
    <form method="post">
        <label for="number1">Số thứ nhất:</label>
        <input type="text" id="number1" name="number1"><br><br>

        <label for="number2">Số thứ 2:</label>
        <input type="text" id="number2" name="number2"><br><br>

        <label for="result">Kết quả:</label>
        <input type="text" id="result" name="result" readonly><br><br>

        <input type="submit" name="submit" value="Tính toán">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = floatval($_POST['number1']);
        $number2 = floatval($_POST['number2']);

        $min = min($number1, $number2);
        $max = max($number1, $number2);

        $result = [];
        for ($i = ceil($min); $i < $max; $i++) {
            if ($i > $min && $i < $max) {
                $result[] = $i;
            }
        }

        echo "<script>document.getElementById('result').value = '" . implode(", ", $result) . "';</script>";
    }
    ?>
</body>

</html>

