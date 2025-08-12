<?php
$title = "Update STUDENT DATA";
include "./template/header.php";
include "./db/detail-student.php";

?>

<h1>Update Data Siswa</h1>
<a href="/">Back</a>
<form
    style="margin-top: 10px;"
    method="POST">

    <?php foreach ($students as $student) : ?>
        <input type="hidden" value="<?= $student['id'] ?>">
        <input
            value="<?= $student['full_name'] ?>"
            name="full_name"
            placeholder="Full Name" /><br />
        <select
            name="gender">
            <option
                <?= $student['gender'] == 'male' ?  "selected" : null ?>
                value="male">male</option>
            <option
                <?= $student['gender'] == 'female' ?  "selected" : null ?>
                value="female">female</option>
        </select><br />
        <select
            name="classes">
            <option
                <?= $student['classes'] == 'X' ?  "selected" : null ?>
                value="X">X</option>
            <option
                <?= $student['classes'] == 'XI' ?  "selected" : null ?>
                value="XI">XI</option>
            <option
                <?= $student['classes'] == 'XII' ?  "selected" : null ?>
                value="XII">XII</option>
        </select><br />
        <select
            name="major">
            <option
                <?= $student['major'] == 'PPLG' ?  "selected" : null ?>
                value="PPLG">PPLG</option>
            <option
                <?= $student['major'] == 'HR' ?  "selected" : null ?>
                value="HR">HR</option>
            <option
                <?= $student['major'] == 'DKV' ?  "selected" : null ?>
                value="DKV">DKV</option>
            <option
                <?= $student['major'] == 'TJKT' ?  "selected" : null ?>
                value="TJKT">TJKT</option>
            <option
                <?= $student['major'] == 'MP' ?  "selected" : null ?>
                value="MP">MP</option>
            <option
                <?= $student['major'] == 'TKRO' ?  "selected" : null ?>
                value="TKRO">TKRO</option>
            <option
                <?= $student['major'] == 'TM' ?  "selected" : null ?>
                value="TM">TM</option>
            <option
                <?= $student['major'] == 'TSM' ?  "selected" : null ?>
                value="TSM">TSM</option>
        </select><br />
    <?php endforeach ?>
    <button type="submit">Submit</button>
</form>

</body>

</html>