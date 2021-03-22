<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Mahasiswa</title>
    <style>
        #outtable{
            padding:20px;
            border: 1px solid #e3e3e3;
            width: 600px;
            border-radius: 5px;
        }
        .short{
            width: 50px;
        }

        .normal{
            width: 150px;
        }

        table{
            border-collapse: collapse;
            font-family: arial;
            color: #5e5b5c;
        }

        thead th{
            text-align: left;
            padding: 10px;
        }

        tbody td{
            border-top: 1px solid #e3e3e3;
            padding: 10px;
        }

        tbody tr:nth-child even{
            background: #a6f5fa;
        }

        tbody tr:hover{
            background: #eaeaea;
        }
    </style>
</head>
<body>
<div id="outtable">
        <table>
            <thead>
                <th>#</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nim</th>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <tr></tr>
                <?php foreach($siswa as $sis): ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $sis->nama; ?></td>
                        <td><?= $sis->alamat; ?></td>
                        <td><?= $sis->nim; ?></td>
                    </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>