<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- CSS only -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Halaman Target</title>
</head>
<body>
        <?php
          include("connection.php");
            $name="";
            $email="";
            $message="";
                    
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];
            }
            if ($name!="" || $email!="" || $message!=""){
                 $sql = "INSERT INTO user (nama,email,pesan)
                values ('$name', '$email', '$message')";
                if($conn->query($sql)===TRUE){
                    echo "success";
                }else{
                    echo "error".$sql."<br>".$conn->error;
                }
            }
        ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Nama</th>
                            <th scope="col">Email</th>
                            <th scope="col">Kritik dan Saran</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            <?php echo"
                            <td>$name</td>
                            <td>$email</td>
                            <td>$message</td>"
                            ?>
                        </tr>
                        <!--<td></td>-->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>