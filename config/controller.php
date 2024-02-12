<?php

// function menampilkan fungsi data
function select($query)
{
    // panggil koneksi data base
    global $db;

    $result = mysqli_query( $db,$query);
    $rows=[]; 

    while ($row = mysqli_fetch_assoc($result)) {
        $rows[]=$row;
}
    return $rows;
}
// fungsi menambahkan data mahasiswa
function create_mahasiswa($post)
{
    global $db;

    
    $nim=$post['nim'];
    $nama=$post['nama'];
    $jurusan=$post['jurusan'];
    $jk=$post['jk'];
    $alamat=$post['alamat'];
    $nohp=$post['nohp'];

    $query = "INSERT INTO mahasiswa VALUES(null,'$nim', '$nama', '$jurusan', '$jk', '$alamat', '$nohp')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// fungsi merubah data mahasiswa
function update_mahasiswa($post)
{
    global $db;

    $Id_mahasiswa=strip_tags($post["Id_mahasiswa"]);
    $nim=strip_tags($post['nim']);
    $nama=strip_tags($post['nama']);
    $jurusan=strip_tags($post['jurusan']);
    $jk=strip_tags($post['jk']);
    $alamat=strip_tags($post['alamat']);
    $nohp=strip_tags($post['nohp']);

    $query = "UPDATE mahasiswa SET nim='$nim', nama ='$nama', jurusan = '$jurusan', jk = '$jk', alamat = '$alamat', nohp =  '$nohp' WHERE Id_mahasiswa =$Id_mahasiswa";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}
// menghapus data mahasiswa
    function delete_mahasiswa($id_mahasiswa)
    {
    global $db;

    $query = "DELETE FROM mahasiswa WHERE Id_mahasiswa = $id_mahasiswa";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
    }

// fungsi menambahkan data dosen
function create_dosen($post)
{
    global $db;

    
    $nidn=$post['nidn'];
    $nama=$post['nama'];
    $mk=$post['mk'];
    $jn=$post['jn'];
    $email=$post['email'];
    $alamat=$post['alamat'];
    $tlepon=$post['tlepon'];

    $query = "INSERT INTO dosen VALUES(null,'$nidn', '$nama', '$mk', '$jn','$email', '$alamat', '$tlepon')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
function update_dosen($post)
{
    global $db;
    
    $id_dosen=strip_tags($post["id_dosen"]);
    $nidn=strip_tags($post['nidn']);
    $nama=strip_tags($post['nama']);
    $mk=strip_tags($post['mk']);
    $jn=strip_tags($post['jn']);
    $email=strip_tags($post['email']);
    $alamat=strip_tags($post['alamat']);
    $tlepon=strip_tags($post['tlepon']);

    
    $query = "UPDATE dosen SET nidn='$nidn', nama ='$nama', mk = '$mk', jn = '$jn', email = '$email', alamat = '$alamat', tlepon =  '$tlepon' WHERE id_dosen =$id_dosen";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}


// menghapus data dosen

function delete_dosen($id_dosen)
{
global $db;

$query = "DELETE FROM dosen WHERE Id_dosen = $id_dosen";

mysqli_query($db, $query);
return mysqli_affected_rows($db);
}

//manambahkan data Ta
function create_taa($post)
{
    global $db;

    
    $nota=$post['nota'];
    $judul=$post['judul'];
    $mahasiswa=$post['mahasiswa'];
    $pembimbing=$post['pembimbing'];

    $query = "INSERT INTO taa VALUES( null, '$nota', '$judul', '$mahasiswa', '$pembimbing')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// manghapus data TA
function delete_taa($nota)
{
global $db;

$query = "DELETE FROM taa WHERE id_nota = $nota";

mysqli_query($db, $query);
return mysqli_affected_rows($db);
}

function update_taa($post)
{
    global $db;
    
    $nota=strip_tags($post["nota"]);
    $judul=strip_tags($post['judul']);
    $mahasiswa=strip_tags($post['mahasiswa']);
    $pembimbing=strip_tags($post['pembimbing']);

    
    $query = "UPDATE taa SET judul='$judul', mahasiswa ='$mahasiswa', pembimbing = '$pembimbing' WHERE nota =$nota";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// fungsi tambah Akun
function create_akun($post)
{
    global $db;

    $nama       =strip_tags($post['nama']);
    $Username   =strip_tags($post['Username']);
    $email      =strip_tags($post['email']);
    $password   =strip_tags($post['password']);
    $level      =strip_tags($post['level']);

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //query tambah data
    $query = "INSERT INTO akun VALUES(null, '$nama', '$Username', '$email', '$password', '$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// manghapus data akun
function delete_akun($nama)
{
global $db;

$query = "DELETE FROM akun WHERE id_akun = $nama";

mysqli_query($db, $query);
return mysqli_affected_rows($db);
}
function update_akun($post)
{
    global $db;
    
    $nama       =strip_tags($post['nama']);
    $Username   =strip_tags($post['Username']);
    $email      =strip_tags($post['email']);
    $password   =strip_tags($post['password']);
    $level      =strip_tags($post['level']);

    //enskripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    //query tambah data
    $query = "INSERT INTO akun VALUES(null, '$nama', '$Username', '$email', '$password', '$level')";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}

function create_buah($post)
{
    global $db;

    
    $kode=$post['kode'];
    $nama=$post['nama'];
    $jenis=$post['jenis'];
    $harga=$post['harga'];

    $query = "INSERT INTO buah VALUES(null,'$kode', '$nama', '$jenis','$harga', CURRENT_TIMESTAMP())";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);
}
// fungsi merubah data BUAH
function update_buah($post)
{
    global $db;

    $Id_buah=strip_tags($post["Id_buah"]);
    $kode=strip_tags($post['kode']);
    $nama=strip_tags($post['nama']);
    $jenis=strip_tags($post['jenis']);
    $harga=strip_tags($post['harga']);

    $query = "UPDATE buah SET kode='$kode', nama ='$nama', jenis = '$jenis', harga = '$harga'WHERE Id_buah =$Id_buah";
    mysqli_query($db, $query);

    return mysqli_affected_rows($db);

}
// menghapus data buah
    function delete_buah($Id_buah)
    {
    global $db;

    $query = "DELETE FROM buah WHERE Id_buah = $Id_buah";

    mysqli_query($db, $query);
    return mysqli_affected_rows($db);
    }
?> 