<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .profile-container {
            text-align: center;
            max-width: 300px;
            margin: 0 auto;
            margin-top: 20px;
        }

        .profile-circle {
            width: 150px;
            height: 150px;
            background-color: #f0f0f0;
            border-radius: 50%;
            margin: 0 auto;
            text-align: center;
            line-height: 150px;
            font-size: 64px;
        }

        .info-box {
            background-color: #ddd;
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
        }

        .info-text {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-circle">
       
        <i class="fas fa-user-circle"> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"></i> <!-- Gunakan ikon profil Font Awesome di sini -->
        </div>
        <div class="info-box">
            <p class="info-text">Nama: <?= $nama ?></p>
            <p class="info-text">Kelas: <?= $kelas ?></p>
            <p class="info-text">NPM: <?= $npm ?></p>
        </div>
    </div>
</body>
</html>