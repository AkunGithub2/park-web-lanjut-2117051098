<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: #f4f4f4; 
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .profile-container {
            margin-top: 100px; 
        }

        .profile-card {
            background-color: #fff; 
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); 
            border-radius: 10px; 
            padding: 20px;
            text-align: center;
        }

        .profile-picture {
            width: 150px;
            height: 150px;
            background-color: #ddd; 
            border-radius: 50%; 
            margin: 0 auto;
            margin-bottom: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 36px; 
            color: #555; 
            overflow: hidden; 
        }

        .profile-picture img {
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }

        .profile-info {
            font-size: 18px;
            color: #333; 
            margin-bottom: 10px;
        }

        .profile-info span {
            font-weight: bold;
            color: #555; 
        }
    </style>   
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body>
    <div class="profile-card">
        <div class="profile-picture">
            <img src="<?= $user['foto']?? base_url('/assets/img/kucing.png') ?>" alt="Foto Profil">
        </div>
        <div class="profile-info">
            <?= $user['nama']?>
        </div>
        <div class="profile-info">
            <?= $user['npm']?>
        </div>
        <div class="profile-info">
            <?= $user['nama_kelas']?>
        </div>  
    </div>
</body>
</html>