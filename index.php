<!DOCTYPE html>
<html>
<head>
	<title>Contoh Form HTML</title>
    <link rel="stylesheet" href="style.css">
    <script src="myScript.js"></script>
</head>
<body>
    <div id="Judul">
        <h2>Biodata Diri</h2>
    </div>

	<form id="myForm" action="form_add_aksi.php" method="POST" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <br>
                </td>
            </tr>
            <tr class="name-table">
                <td>Nama</td>
                <td>:</td>   
                <td><input size="50%" type="text" name="nama" /></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td name="kelahiran">
                <select name="tanggal_lahir">
                                                <option>-Tanggal-</option>            
                                                <option value="01">01</option>
                                                <option value="02">02</option>                                                                                                                                   <option>02</option>                                                        
                                                <option value="03">03</option>
                                                <option value="04">04</option>
                                                <option value="05">05</option>
                                                <option value="06">06</option>
                                                <option value="07">07</option>
                                                <option value="08">08</option>
                                                <option value="09">09</option>
                                                <option value="10">10</option>
                                                <option value="11">11</option>
                                                <option value="12">12</option>                                    
                                                <option value="13">13</option>
                                                <option value="14">14</option>
                                                <option value="15">15</option>
                                                <option value="16">16</option>
                                                <option value="17">17</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                                <option value="21">21</option>
                                                <option value="22">22</option>
                                                <option value="23">23</option>
                                                <option value="24">24</option>
                                                <option value="25">25</option>
                                                <option value="26">26</option>
                                                <option value="27">27</option>
                                                <option value="28">28</option>
                                                <option value="29">29</option>
                                                <option value="30">30</option>
                                                <option value="31">31</option></select>
        
                <select name="bulan_lahir">
                                                <option>-Bulan-</option>
                                                <option value="January">January</option>                                                                                                                            
                                                <option value="February">February</option>                                                        
                                                <option value="March">Maret</option>
                                                <option value="April">April</option>
                                                <option value="May">Mey</option>
                                                <option value="June">Juni</option>
                                                <option value="July">Juli</option>
                                                <option value="August">Agustus</option>
                                                <option value="September">September</option>
                                                <option value="October">Oktober</option>
                                                <option value="November">November</option>
                                                <option value="December">Desember</option></select>
                <select name="tahun_lahir">
                        
                                                <option>-Tahun-</option>
                                                <option value="2011">2011</option>                                                                                                                            
                                                <option value="2010">2010</option>                                                        
                                                <option value="2009">2009</option>
                                                <option value="2008">2008</option>
                                                <option value="2007">2007</option>
                                                <option value="2006">2006</option>
                                                <option value="2005">2005</option>
                                                <option value="2004">2004</option>
                                                <option value="2003">2003</option>
                                                <option value="2002">2002</option>
                                                <option value="2001">2001</option>
                                                <option value="2000">2000</option>
                                                <option value="1999">1999</option>
                                                <option value="1998">1998</option>
                                                <option value="1997">1997</option>
                                                <option value="1996">1996</option>
                                                <option value="1995">1995</option>
                                                <option value="1994">1994</option>
                                                <option value="1993">1993</option>
                                                <option value="1992">1992</option>
                                                <option value="1991">1991</option>
                                                <option value="1990">1990</option></select></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input size="50%" type="text" name="alamat" /></td>
            </tr>
            <tr>
                <td>Perguruan Tinggi</td>
                <td>:</td>
                <td><input size="50%" type="text" name="perguruan_tinggi" /></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><input size="50%" type="text" name="jurusan" /></td>
            </tr>

            <tr>
                <td>NIM</td>
                <td>:</td>
                <td><input size="50%" type="text" name="nim" /></td>
            </tr>
            <tr>
                <td>Kelamin</td>
                <td>:</td>
                <td><input type="radio" name="kelamin" value="Laki-laki" />Laki-laki
                    <input type="radio" name="kelamin" value="Perempuan" />Perempuan</td>
            </tr>
                
            
            <tr>
                <td>Agama</td>
                <td>:</td>
                <td><select name="agama">                    
                    <option>-Agama-</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Buddha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Katolik">Katolik</option></select></td>
            </tr>
        
            <tr>
                <td>Hobby</td>
                <td>:</td>
                <td><input size="50%" type="text" name="hobby" /></td>
            </tr>
            
            <tr>
                <td>Motto</td>
                <td>:</td>
                <td><textarea name="motto" cols="50" rows="10"> Isikan Motto Anda Disini </textarea></td>
            </tr>
            <tr>            
                <td for="foto">Unggah foto diri</td>
                <td>:</td>
                <td><input type="file" id="foto" name="unggah_foto_diri" accept="image/jpeg, image/png"><br></td>
            </tr>  
            <tr>
                <div>
                    <td colspan="2"></td>
                    <td class="reset-submit">
                        <input type="Reset" name="Reset" value="Reset" />
                        <input type="Submit" name="Submit" value="Submit" />
                    </td>
                </div>
            </tr>       
        </table>
        </form>
        <br>
    <footer>
        <div>
        <img src="pp.png" alt="Profile Image">
        </div>
        <div class="noAlign">
        <h4>Make by</h4>
        <h4>Arinugraha Syam</h4>
        <h4>D041201078</h4>
        </div>
    </footer> 
</body>
</html>