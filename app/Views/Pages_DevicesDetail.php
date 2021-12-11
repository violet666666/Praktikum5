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

        <h1 id="judul">Devices Detail Pages</h1>

        <div class="table">
            <table border=2>
                <tr>
                    <td>Id</td>
                    <td>Device ID</td>
                    <td>Device Defect</td>
                    <td>Device Origin</td>
                </tr>

                <?php foreach ($devices_detail as $q) : ?>

                    <tr>
                        <td> <?php echo $q['id']; ?> </td>
                        <td> <?php echo $q['devices_id']; ?> </td>
                        <td>
                            <?php
                            if ($q['device_defect'] == 0) {
                                echo "Tidak Cacat";
                            } else {
                                echo "Cacat";
                            };
                            ?>
                        </td>
                        <td> <?php echo $q['device_origin']; ?> </td>
                    </tr>

                <?php endforeach; ?>

            </table>
        </div>

        <div class="navbar">
            <a href="/home">Home</a>
            <a href="/devices">Device</a>
        </div>

    </div>
</body>

</html>