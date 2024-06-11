<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de QR Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 100%;
            max-width: 400px;
        }
        h1 {
            color: #333;
        }
        form {
            margin-bottom: 1.5rem;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            background-color: #5cb85c;
            color: white;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #4cae4c;
        }
        .qrcode {
            margin-top: 1rem;
        }
        .qrcode img {
            max-width: 100%;
            border: 1px solid #ddd;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de QR Code</h1>
        <form action="generate_qrcode.php" method="post">
            <label for="dados">Digite a URL ou texto para o QR Code:</label>
            <input type="text" id="dados" name="dados" required>
            <button type="submit">Gerar QR Code</button>
        </form>

        <?php
        if (isset($_GET['qrcode'])) {
            $qrcode = $_GET['qrcode'];
            echo '<div class="qrcode">';
            echo '<h2>QR Code Gerado:</h2>';
            echo '<img src="' . $qrcode . '" alt="QR Code">';
            echo '</div>';
        }
        ?>
    </div>
</body>
</html>
