<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        .tabel table {
            margin-top : 20px;
            width : 100%;
            border : 1px solid black;
            border-collapse: collapse;
            padding : 5px;
        }

        .tabel th {
            background-color: grey;
        }

        .tabel th, .tabel td, .tabel tr  {
            border : 1px solid black;
            padding : 5px;
        }

        .nav-list{
            display:flex;
            flex-wrap:wrap;
            list-style:none;
            width:max-content;
            margin-left:auto;
            margin-right:2rem;
        }
        .nav-list a{
            text-decoration: none;
        }
        .nav-div{
            display:flex;
            flex-wrap:wrap;
            background: grey;
            color: black;
            margin:0;
            padding:0;
            position: sticky;
            top:0;
            font-size: 18px;
            font-weight: bold;
        }
        .logo{
            width:max-content;
            margin: auto 2rem;
            
        }
        .nav-item{
            padding: 0px 1.5rem;
            
        }
    
        .heading{
            text-align: center;
            font-size: 35px;
            font-weight: 600;
            padding-top:60px;
            font-family: 'Satisfy', cursive;

        }

        .dummy-text{
            padding: 0.5rem 1.5rem;
            line-height: 120%;
            font-size: 18px;
            font-weight: 500;
        }
        .nav-list li:hover{
            transform: scale(1.06);
            color: whitesmoke;
        }
     
    </style>
</head>

<body>
    
    <div class="nav-div">
        <div class="logo">
          UTS
        </div>
        <ul class="nav-list">
          
          <a href="formulir.php"><li class="nav-item">Mahasiswa</li></a>

          <a href="formulir1.php"><li class="nav-item">Dosen</li></a>

          <a href="formulir2.php"><li class="nav-item">Keuangan</li></a>

        </ul>
    </div>
    
    <form id = "formulir" action="proses.php" method="POST">
        <fieldset>
            <legend>Form input data mahasiswa</legend>
            <h2>Lengkapi biodata dengan benar</h2>
            <table>
                <tr>
                    <td>NIM (Nomor induk mahasiswa)</td>
                    <td>:</td>
                    <td><input type="number" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Jurusan</td>
                    <td>:</td>
                    <td><select name="jurusan">
                            <option value="001">Sistem Komputer</option>
                            <option value="002">Sistem Informasi</option>
                            <option value="003">Teknologi Informasi</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="gender" value="1"> laki-laki
                        <input type="radio" name="gender" value="2"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td>No. HP</td>
                    <td>:</td>
                    <td><input type="text" name="nohp"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="simpan"></td>
                </tr>
            </table>
        </fieldset>
    </form>

    <div class="tabel">
        <table>
            <tr>
                <th>NIM</th>
                <th>Nama Mhs</th>
                <th>Jurusan</th>
                <th>Gender</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Atc</th>
            </tr>
            <?php
                include "koneksi.php";
                $qry = "SELECT * FROM mahasiswa";
                $exec = mysqli_query($con, $qry);
                while($data = mysqli_fetch_assoc($exec))
                {
            ?>
            <tr>
                <td><?= $data['nim'] ?></td>
                <td><?= $data['nama_mhs'] ?></td>
                <td><?= $data['kode_jurusan'] ?></td>
                <td><?= $data['gender'] ?></td>
                <td><?= $data['alamat'] ?></td>
                <td><?= $data['no_hp'] ?></td>
                <td><?= $data['email'] ?></td>
                <td>
                <a href="edit.php?nim=<?= $data[nim] ?>"><button>edit</button><a>
                <a href="delete.php?nim=<?= $data[nim] ?>"><button>delete</button><a>
                </td>
            </tr>
            <?php } ?>
        </table>
    </div>
</body>

</html>