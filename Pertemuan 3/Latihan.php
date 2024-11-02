<?php
$nilaimhs = array (
    array (
        "namamhs" => "Ahmad Dani",
        "tugas" => 90,
        "uts" => 95,
        "uas" => 65
    ),
    array (
        "namamhs" => "Raffi Ahmad",
        "tugas" => 95,
        "uts" => 100,
        "uas" => 60
    ),
    array (
        "namamhs" => "Hotman Paris",
        "tugas" => 65,
        "uts" => 75,
        "uas" => 100
    )
    );
?>
<table border=1>
       <tr>
           <th>Nama Mahasiswa</th>
           <th>Tugas</th>
           <th>UTS</th>
           <th>UAS</th>
       </tr>
<?php       
foreach($nilaimhs as $nilaimhs){
?>
    <tr>
        <?php
        foreach($nilaimhs as $key => $value){
        ?>
            <td><?= $value;?></td> 
        <?php     
        }
        ?>
    </tr>
<?php
}
?>
</table>