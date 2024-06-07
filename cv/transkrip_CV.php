<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trnskrip Nilai</title>
</head>

<body>
    <?php
    $mahasiswa = array(
        array(
            'No' => 1,
            'Kode' => 'IF221103 ',
            'Mata Kuliah' => 'ETIKA & KOMPETENSI INFORMATIKA',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '01',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 2,
            'Kode' => 'IF221101',
            'Mata Kuliah' => 'ARSITEKTUR KOMPUTER',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '01',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 3,
            'Kode' => 'IF221102',
            'Mata Kuliah' => 'MATEMATIKA KOMPUTASI',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '01',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 4,
            'Kode' => 'IF221104',
            'Mata Kuliah' => 'SISTEM & TEKNOLOGI INFORMASI',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '01',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 5,
            'Kode' => 'UV21007',
            'Mata Kuliah' => 'PANCASILA',
            'SKS' => 2,
            'Nilai' => 'A',
            'Semester' => '01',
            'Kredit' => 4,
            'nxk' => 8
        ),
        array(
            'No' => 6,
            'Kode' => 'UV21009',
            'Mata Kuliah' => 'BAHASA INDONESIA',
            'SKS' => 2,
            'Nilai' => 'B',
            'Semester' => '01',
            'Kredit' => 3,
            'nxk' => 6
        ),
        array(
            'No' => 7,
            'Kode' => 'UV21010',
            'Mata Kuliah' => 'BAHASA INGGRIS',
            'SKS' => 3,
            'Nilai' => 'B+',
            'Semester' => '01',
            'Kredit' => 3.5,
            'nxk' => 10.5
        ),
        array(
            'No' => 8,
            'Kode' => 'UV21001',
            'Mata Kuliah' => 'AGAMA ISLAM',
            'SKS' => 2,
            'Nilai' => 'A',
            'Semester' => '02',
            'Kredit' => 4,
            'nxk' => 8
        ),
        array(
            'No' => 9,
            'Kode' => 'UV21008',
            'Mata Kuliah' => 'KEWARGANEGARAAN',
            'SKS' => 2,
            'Nilai' => 'A',
            'Semester' => '02',
            'Kredit' => 4,
            'nxk' => 8
        ),
        array(
            'No' => 10,
            'Kode' => 'IF221109',
            'Mata Kuliah' => 'ALJABAR LINIER & MATRIK',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '02',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 11,
            'Kode' => 'IF221106',
            'Mata Kuliah' => 'ALGORITMA & PEMROGRAMAN',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '02',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 12,
            'Kode' => 'IF221105',
            'Mata Kuliah' => 'SISTEM DIGITAL',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '02',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 13,
            'Kode' => 'IF221108',
            'Mata Kuliah' => 'BASIS DATA',
            'SKS' => 3,
            'Nilai' => 'A-',
            'Semester' => '02',
            'Kredit' => 3.75,
            'nxk' => 11.25
        ),
        array(
            'No' => 14,
            'Kode' => 'IF221107',
            'Mata Kuliah' => 'MATEMATIKA DISKRIT',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '02',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 15,
            'Kode' => 'UV21013',
            'Mata Kuliah' => 'KEPEMIMPINAN',
            'SKS' => 2,
            'Nilai' => 'A',
            'Semester' => '03',
            'Kredit' => 4,
            'nxk' => 8
        ),
        array(
            'No' => 16,
            'Kode' => 'UV21011',
            'Mata Kuliah' => 'BELA NEGARA',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '03',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 17,
            'Kode' => 'IF221115',
            'Mata Kuliah' => 'METODE NUMERIK',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '03',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 18,
            'Kode' => 'IF221112',
            'Mata Kuliah' => 'STATISTIK KOMPUTASI',
            'SKS' => 3,
            'Nilai' => 'A-',
            'Semester' => '03',
            'Kredit' => 3.75,
            'nxk' => 11.25
        ),
        array(
            'No' => 19,
            'Kode' => 'IF221114',
            'Mata Kuliah' => 'BASIS DATA LANJUT',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '03',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 20,
            'Kode' => 'IF221110',
            'Mata Kuliah' => 'SISTEM OPERASI',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '03',
            'Kredit' => 4,
            'nxk' => 12
        ),
        array(
            'No' => 21,
            'Kode' => 'IF221111',
            'Mata Kuliah' => 'PEMROGRAMAN LANJUT',
            'SKS' => 3,
            'Nilai' => 'A-',
            'Semester' => '03',
            'Kredit' => 3.75,
            'nxk' => 11.25
        ),
        array(
            'No' => 22,
            'Kode' =>     'IF221113',
            'Mata Kuliah' => 'STRUKTUR DATA',
            'SKS' => 3,
            'Nilai' => 'A',
            'Semester' => '03',
            'Kredit' => 4,
            'nxk' => 12
        ),

    );
    ?>
    <div class="transkrip-table">
        <h1>TRANSKRIP NILAI</h1>
        <table class="nama">
            <thead>
                <tr>
                    <th>NAMA </th>
                    <th>: MUHAMMAD FAIZUL ULUM</th>
                </tr>
                <tr>
                    <th>NPM</th>
                    <th>: 22081010132</th>
                </tr>
            </thead>
        </table>
        <table border="1" class="tabel">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>MATA KULIAH</th>
                    <th>SEMESTER</th>
                    <th>SKS</th>
                    <th>NILAI</th>
                    <th>KREDIT</th>
                    <th>NxK</th>
                </tr>
            </thead>
            <tbody>
                <?php $index = 0; ?>
                <?php foreach ($mahasiswa as $mhs => $data) : ?>
                    <?php
                    // Menentukan warna baris selang-seling
                    $bg_color = ($index % 2 == 0) ? 'white' : '#F3F3F9';
                    $index++;
                    ?>
                    <tr style="background-color: <?php echo $bg_color; ?>">
                        <td><?php echo $data['No'] ?></td>
                        <td><?php echo $data['Kode'] ?></td>
                        <td class="mk"><?php echo $data['Mata Kuliah'] ?></td>
                        <td><?php echo $data['Semester'] ?></td>
                        <td><?php echo $data['SKS'] ?></td>
                        <?php switch ($data['Nilai']):
                            case 'A': ?>
                                <td style="background-color: #65e5ff; text-align: center; color: black;"><?php echo $data['Nilai'] ?></td>
                            <?php break;
                            case 'A-': ?>
                                <td style="background-color: #8bff5a; text-align: center; color: black;"><?php echo $data['Nilai'] ?></td>
                            <?php break;
                            case 'B+': ?>
                                <td style="background-color: #fff34b; text-align: center; color: black;"><?php echo $data['Nilai'] ?></td>
                            <?php break;
                            case 'B': ?>
                                <td style="background-color: #ff4b4b; text-align: center; color: black;"><?php echo $data['Nilai'] ?></td>
                            <?php break;
                            default: ?>
                                <td><?php echo $data['Nilai'] ?></td>
                        <?php endswitch; ?>
                        <td><?php echo $data['Kredit'] ?></td>
                        <td><?php echo $data['nxk'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <table class="nama">
            <thead>
                <tr>
                    <th>INDEKS PRESTASI KUMULATIF </th>
                    <th>: 3.906</th>
                </tr>
                <tr>
                    <th>SKS KUMULATIF</th>
                    <th>: 61</th>
                </tr>
            </thead>
        </table>
    </div>
</body>
<style>
    * {
        font-family: sans-serif;
        /* overflow: hidden; */
    }

    body {
        background-color: #F3F3F3;
        color: #373a3c;
    }

    .transkrip-table {
        margin: auto;
    }

    h1 {
        font-size: 23px;
        text-align: center;
        margin: auto;
    }

    table {
        margin: auto;
        background: white;
        cursor: default;
    }

    .tabel th {
        padding: 0 20px;
        background: yellow;
    }

    td {
        text-align: center;
    }

    tr:hover td {
        background-color: yellow;
    }

    .mk {
        text-align: left;
    }

    .nama {
        text-align: left;
        background-color: #F3F3F3;
        margin-left: 20.7%;
    }
</style>

</html>