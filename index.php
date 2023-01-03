<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <title>Taxi Patal</title>
</head>
<body>
    <div class="main">
        <form action="controller.php" method="post">
            <h1 class="header">Taxi Patal Form</h1>
            <div class="inputs">
                <input type="text" name="reg" placeholder="Taxi registration">
                <input type="text" name="driver" placeholder="Taxi driver"><br>
                <input type="number" name="noSeats" placeholder="Number of seats">
                <input type="number" name="noPass" placeholder="Number of passengers"><br>
                <input type="text" name="dest" placeholder="Trip destination">
                <input type="number" name="price" placeholder="Price per passenger">

            </div>
            <div class="button">
                <button>CALCULATE</button>
            </div>
        </form>
    </div>
    
</body>
</html>
