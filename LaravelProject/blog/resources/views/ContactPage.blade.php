<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Form</title>
</head>
<body>

    <h2>Simple Form</h2>

    <form action="/contactPost" method="post">
        <label for="input1">Input 1:</label>
        <input type="text" id="input1" name="input1" required>
        
        <br>
        
        <label for="input2">Input 2:</label>
        <input type="text" id="input2" name="input2" required>
        
        <br>

        <input type="submit" value="Submit">
    </form>

</body>
</html>
