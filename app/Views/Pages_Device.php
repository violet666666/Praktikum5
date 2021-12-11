<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IoT Monitoring App</title>
    <link rel="stylesheet" href="/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">

        <div class="logo-iot">
            <img src="/Img/iot.png" class="gambar">
            <h3 id="nama-judul">IoT Monitoring Aplikasi</h3>
        </div>

        <h1 id="judul">Device Pages</h1>

        <div class="table">
            <table border=2>
                <tr>
                    <td>Id</td>
                    <td>Device Name</td>
                    <td>Device Brand</td>
                    <td>Device Quantity</td>
                    <td>Device Status</td>
                </tr>


                <?php foreach ($devices as $d) : ?>
                    <tr>
                        <td> <?php echo $d['id']; ?> </td>
                        <td> <?php echo $d['device_name'];  ?> </td>
                        <td> <?php echo $d['device_brand']; ?> </td>
                        <td> <?php echo $d['device_quantity']; ?> </td>
                        <td>

                            <?php if ($d['device_status'] == 1) {
                                echo "on";
                            } else {
                                echo "off";
                            }  ?>

                        </td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>

        <div class="navbar">
            <a href="/home">Home</a>
            <a href="/detail">Devices Detail</a>
        </div>

    </div>
</body>

</html>