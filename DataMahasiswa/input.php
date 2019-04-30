<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan</title>
</head>

<body>
    <h2>Input Mahasiswa</h2>
    <form name="form1" method="post" action="simpan.php">
        <table width="200" border="0">
            <tr>
                <td>NIM</td>
                <td>:</td>
                <td>
                    <input name="nim" id="nim" type="text" maxlength="5" size="30">
                </td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input name="nama" id="nama" type="text" maxlength="255" size="30">
                </td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>
                    <input name="alamat" id="alamat" type="text" size="30">
                </td>
            </tr>
        </table>
        <table width="200" border="0">
    			<tr>
	    	  		<td>
        				<input type="submit" name="Submit" value="Submit">
        				<input type="reset" name="reset" value="Reset">
      			</td>
    			</tr>
  			</table>
    </form>
    <a href="index.php">&laquo; home</a>
</body>

</html>