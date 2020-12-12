<?php
require("koneksi.php");
?>
<!DOCTYPE html>
<html>

<head>
    <title>Praktikum Web</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <style>
        html,
        body {
            min-height: 100%;
            background-image: url("data:image/jpeg;base64,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");
        }

        body,
        div,
        form,
        input,
        select,
        p {
            padding: 0;
            margin: 0;
            outline: none;
            font-family: Roboto, Arial, sans-serif;
            font-size: 14px;
            color: #666;
            line-height: 22px;
        }

        h1 {
            position: absolute;
            margin: 0;
            line-height: 55px;
            font-size: 30px;
            color: #fff;
            z-index: 2;
        }

        .testbox {
            display: flex;
            justify-content: center;
            align-items: center;
            height: inherit;
            padding: 10px;
        }

        form {
            width: 40%;
            padding: 20px;
            border-radius: 6px;
            background-color: black;
            box-shadow: 0 0 30px 0 white;
        }

        .table {
            width: 43%;
            border-radius: 6px;
            background: rgba(0, 0, 0, 0.0);
            box-shadow: 0 0 30px 0 white;
            border: "1";
        }

        th {
            background-color: rgba(0, 9, 66, 0.5);
            color: white;
        }

        .td-number {
            background-color: rgba(0, 9, 66, 0.5);
            color: white;
            text-align: center;
        }

        .td-data {
            background-color: rgba(1, 4, 28, 0.8);
            color: white;
            text-align: center;
        }

        .td-foto {
            height: 80px;
            width: 80px;
            text-align: center;
            object-fit: cover;
        }

        .banner {
            position: relative;
            height: 80px;
            background-image: url("https://images.unsplash.com/photo-1506318137071-a8e063b4bec0?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
        }

        .banner::after {
            content: "";
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            width: 100%;
            height: 100%;
        }

        input,
        select {
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input {
            width: calc(100% - 20px);
            padding: 5px;
        }

        select {
            width: 100%;
            padding: 7px 0;
            background: transparent;
        }

        .item:hover p,
        .item:hover i,
        input:hover::placeholder {
            color: black;
        }

        .item input:hover,
        .item select:hover {
            border: 1px solid transparent;
            box-shadow: 0 0 6px 0 #a37547;
            color: #a37547;
        }

        .item {
            position: relative;
            margin: 10px 0;

        }

        .btn-block {
            margin-top: 10px;
            text-align: center;
        }

        button {
            width: 150px;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background: red;
            font-size: 16px;
            color: black;
            cursor: pointer;
        }

        button:hover {
            box-shadow: 0 0 18px 0 #3d2914;
        }

        .nama-bet {
            font-size: 25pt;
            padding: 10px 10px 20px 20px;
        }

        @media (min-width: 568px) {

            .name-item,
            .city-item {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between;
            }

            .name-item input,
            .city-item input {
                width: calc(50% - 20px);
            }

            .city-item select {
                width: calc(50% - 8px);
            }
        }
    </style>
    <script type="text/javascript" src="jquery-3.5.1.min.js"></script>
</head>

<body>
    <div class="testbox">
        <form method="POST" id="form_tambah">
            <div class="banner">
                <h1>Minggu 6</h1>
            </div>
            <div class="item">
                <p>NIM</p>
                <input type="text" name="nim" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Nama</p>
                <input type="text" name="nama" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Angkatan</p>
                <input type="text" name="angkatan" required autocomplete="off" />
            </div>
            <div class="item">
                <p>Program Studi</p>
                <select name="prodi" required>
                    <option value="1">Teknik Informatika</option>
                    <option value="2">Teknik Elektro</option>
                    <option value="3">Teknik Geomatika</option>
                    <option value="4">Teknik Geofisika</option>
                </select>
            </div>
            <div class="btn-block">
                <button type="submit" id="tambah_data" name="tambah">Tambah Data</button>
            </div>
        </form>
    </div>
    <div id="show" class="testbox"></div>
    <script>
        $(document).ready(function() {
            $('#show').load("show.php");
            $('#tambah_data').click(function() {
                var data = $('#form_tambah').serialize();
                $.ajax({
                    type: 'POST',
                    url: "add.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $('#show').load("show.php");
                    }
                });
            });
        });
    </script>
</body>

</html>