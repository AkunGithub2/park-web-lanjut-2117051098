<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>
        <?php $title = "title"; ?>
    </title>
    

    <style>
        /* body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        } */


        /* body {
            background-image: url("bg1.jpg");
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: fixed;
        } */
        .container {
            background-color: #f7f7f7;
            padding: 20px;
            border-radius: 10px;
            margin-top: 50px;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        body {
            font-family: Arial, sans-serif;
            /* background-image: url('assets/img/bg1.jpg'); */
            background-image: url(/assets/img/bg1.jpg);
            background-size: cover; /* Menyesuaikan ukuran gambar dengan jendela browser */
            background-position: center; /* Pusatkan gambar di tengah */
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        table {
            width: 100%;
        }

        td {
            padding: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .custom-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 10px;
        }

        .custom-table th, .custom-table td {
            padding: 8px 12px;
            text-align: left;
            border-bottom: 1px solid #ccc;
            
        }

        .custom-button {
            padding: 6px 12px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            cursor: pointer;
            margin-right: 5px;
            border-radius: 5px;
        }

        .custom-button:hover {
            background-color: #0056b3;
        }
        /* .container-box {
            border: 2px solid #007BFF;
            padding: auto;
            width: auto;
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        } */
        .container-box {
            background-color: rgba(255, 255, 255, 0.9); /* Menggunakan warna putih dengan opasitas 90% */
            border: 2px solid #007BFF;
            padding: auto;
            width: auto;
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
        }


        .custom-button.detail-button {
            background-color: green;
            color: white;
        }

        .custom-button.edit-button {
            background-color: yellow;
            color: black;
        }

        .custom-button.delete-button {
            background-color: red;
            color: white;
        }

        .custom-button-tambah{
            background-color: red;
            color: white;
        }




        
    </style>
</head>
<body>
    <?= $this->renderSection('content') ?>
    <script> src="...."></script>
</body>
</html>