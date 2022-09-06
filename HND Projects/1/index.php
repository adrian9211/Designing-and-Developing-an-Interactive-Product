<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Calculation</title>
</head>
<body>



<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Task 7 Loops</th>

    </tr>
    </thead>
    <tbody>
    <tr>
        <th scope="row">1</th>
        <td>
            <p>we will now create a php script that will ask the user to enter how many number in the Fibonacci series they wish to view.
                <br>
                The user will then be show the sequence of numbers. The sequence will always start from 0.
                <br>


                For example, if user enters 10, they are shown the first 10 numbers in the Fibonacci series (0, 1, 1, 2, 3, 5, 8, 13, 21, 34)
                <br>

            </p>

            <form action="whileloop.php" method="post">
                <br>
                <button type="submit" name="submit" value="submit" >Submit</button>
            </form>


            <br>
            <br>

            <form action="fibonacci.php" method="post">
                <label>
                    Provide a number of sequence for Fibonacci:
                    <input type="number" name="number1">
                </label>
                <br>
                <br>
                <button type="submit" name="submit" value="submit" >Submit</button>
            </form>
        </td>



    </tr>

    </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>