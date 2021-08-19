
<form method="post" action="tampil.php">

    <label>Masukkan Nama</label><br/>
    <input type="text" name="nama"><br><br>

    <label>Masukkan Jenis Kelamin</label><br>
    <input type="radio" name="kelamin" value="laki- laki"> laki- laki<br/>        
    <input type="radio" name="kelamin" value="perempuan"> perempuan<br/><br><br>        

    <label>Masukkan Agama</label><br/>
	<select name="agama">
        <option value="islam">Islam</option>
        <option value="kristen">Kristen</option>
        <option value="katolik">Katolik</option>
        <option value="hindu" selected>Hindu</option>
        <option value="budha">Buddha</option>
        <option value="konghuchu">KongHuChu</option>
    </select><br><br>

    <label>Masukkan Alamat</label><br/>
    <textarea name="alamat" cols="30" rows="3" placeholder="Tulis Alamat..."></textarea>
    <br><br>

    <label>Tempat Lahir</label>
    <input type="text" name="tempat"><br/><br><br>

    <label>Tanggal Lahir</label>
    <input type="date" name="tempat"><br/><br><br>

    <label>Umur</label>
    <input type="number" name="usia"><br/><br><br>

    <label>Masukkan Hobi & cita-cita</label><br/>
    <textarea name="hobi" cols="30" rows="3" placeholder="Tulis disini..."></textarea>
    <br><br>

    <label>Masukkan Asal Sekolah</label><br/>
    <input type="text" name="skola"><br/><br><br>



    <input type="submit" value="oke">

</form>