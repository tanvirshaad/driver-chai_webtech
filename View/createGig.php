<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Gig</title>
</head>
<body>
    <h1>Create your Gig:</h1>
    <form action="../Controller/createGig.php" method="POST">
        <label for="title">Title: </label>
        <input type="text" name="title" id="">
        <br>
        <label for="car_type">Car Type: </label>
        <select name="car_type" id="car_type">
            <option value="Sedan">Sedan</option>
            <option value="SUV">SUV</option>
            <option value="Coupe">Coupe</option>
            <option value="Sport">Sport</option>
            <option value="Crossover">Crossover</option>
            <option value="Hatchback">Hatchback</option>
            <option value="Wagon">Wagon</option>
            <option value="Minivan">Minivan</option>
        </select>
        <br>
        <label for="hourly_rate">Hourly Rate: </label>
        <input type="text" name="hourly_rate" id="">
        <br>
        <input type="submit" value="Submit">
        <?php 
        session_start();
        print_r($_SESSION); ?>
        
    </form>
</body>
</html>