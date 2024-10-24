<?php 
$host = '127.0.0.1';
$user = 'root';
$password = '';
$database = 'sekolah';

$koneksi = mysqli_connect($host, $user, $password, $database);

if (isset($_GET['menu'])) {
    $menu = $_GET['menu'];
    $id = $_GET['id'];
    // echo $menu;
    // echo $id;
    if ($menu == 'edit') {
        $sql="SELECT * FROM siswa WHERE id=$id";
        echo $sql;
    }
}
?>

<form action="" method="post">
    nama:
    <input type="text" name="nama" placeholder="Masukkan Nama">
    alamat:
    <input type="text" name="alamat" placeholder="Masukkan Alamat">
    <input type="submit" value="Simpan" name="simpan">
</form>

<?php 
if (isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    echo $nama;
    $sql = "INSERT INTO siswa VALUES ('', '$nama', '$alamat')";
    echo $sql;
    mysqli_query($koneksi, $sql);
}

if (isset($_GET["menu"])) {
    $menu = $_GET ['menu'];
    $id = $_GET ['id'];
    // echo $menu;
    // echo $id;
    if ($menu == 'hapus') {
        $sql = "DELETE FROM siswa WHERE id =$id";
        echo $sql;
        mysqli_query($koneksi, $sql);
    }
   
}

$query = "SELECT * FROM siswa";
// echo $query;

$result = mysqli_query($koneksi, $query);
// var_dump($result);

$nama = mysqli_fetch_assoc($result);
// var_dump($nama);

echo '<h1> Data Siswa</h1>';
echo '<table border=5>';
echo '<thead>
    <tr>
        <th>Id</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Hapus</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>';

while ($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td><a href="?id='.$row [0].'&menu=hapus">Hapus</a></td>';
    echo '<td><a href="?id='.$row [0].'&menu=edit">Edit</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';

echo '<h1>Data Siswa</h1>';
$query = "SELECT * FROM kelas";
$result = mysqli_query($koneksi, $query);
echo '<table border=5>';
echo '<thead>
    <tr>
        <th>Id</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Hapus</th>
        <th>Edit</th>
    </tr>
    </thead>
    <tbody>';

while ($row = mysqli_fetch_array($result)){
    echo '<tr>';
    echo '<td>'.$row[0].'</td>';
    echo '<td>'.$row[1].'</td>';
    echo '<td>'.$row[2].'</td>';
    echo '<td>Hapus</td>';
    echo '<td>Edit</td>';
    echo '</tr>';
}

echo '</tbody>';
echo '</table>';
?>