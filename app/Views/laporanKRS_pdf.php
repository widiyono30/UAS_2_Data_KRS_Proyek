<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title_pdf;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <div style="text-align:center">
            <p> Laporan KRS Mahasiswa
            <br> STMIK TEGAL</>
        </div>
        <table id="table">
                    <thead>
                        <tr>
                            <th style="text-align:center;">No.</th>
                            <!-- <th>ID </th> -->
                            <th style="text-align: center;">NIM </th>
                            <th style="text-align: center;">Mahasiswa</th>
                            <th style="text-align: center;">Program Studi</th>
                            <th style="text-align: center;">Semester</th>
                            <th style="text-align: center;">Mata Kuliah</th>
                        </tr> 
                    </thead>
                    <tbody>
                        <?php $no=1; foreach($getKrs as $isi){?>
                            <tr>
                                <td><?= $no;?></td>
                                <!-- <td><?= $isi['id_krs'];?></td> -->
                                <td><?= $isi['nim'];?></td>
                                <td><?= $isi['mahasiswa'];?></td>
                                <td><?= $isi['program_studi'];?></td>
                                <td><?= $isi['semester'];?></td>
                                <td><?= $isi['mata_kuliah'];?></td>
                            </tr>
                        <?php $no++;}?>
                    </tbody>  

            </table>
    </body>
</html>