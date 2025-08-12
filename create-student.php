<?php
$title = "CREATE STUDENT DATA";
include "./template/header.php";
?>

<h1>Tambah Data Siswa</h1>
<a href="/">Back</a>
<form
    style="margin-top: 10px;"
    method="POST"
    action="./db/create.php">
    <input name="full_name" placeholder="Full Name" /><br />
    <select name="gender">
        <option value="male">male</option>
        <option value="female">female</option>
    </select><br />
    <select name="classes">
        <option value="X">X</option>
        <option value="XI">XI</option>
        <option value="XII">XII</option>
    </select><br />
    <select name="major">
        <option value="PPLG">PPLG</option>
        <option value="HR">HR</option>
        <option value="DKV">DKV</option>
        <option value="TJKT">TJKT</option>
        <option value="MP">MP</option>
        <option value="TKRO">TKRO</option>
        <option value="TM">TM</option>
        <option value="TSM">TSM</option>
    </select><br />
    <button type="submit">Submit</button>
</form>

</body>

</html>