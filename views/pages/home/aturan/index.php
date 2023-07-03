<h1 class="content-header">Aturan</h1>
<hr class="line">
<?php
$data = json_decode($jsonData, true);

$no = 1;
echo "<table class='table'>";
echo "
<thead>
    <tr>
        <th>No.</th>
        <th>Nama Kerusakan</th>
        <th>Nama Gejala</th>
    </tr>
</thead>
<tbody>
";
foreach ($data as $kd_kerusakan => $item) {
    echo "
    <tr>
    <td data-label='No.'>$no</td>
    <td data-label='Nama Kerusakan'>" . $item[0]['nama_kerusakan'] . "</td>
    ";
    $nm_gjl = [];
    foreach ($item as $row) {
        $nm_gjl[] = $row['nama_gejala'];
    }
    echo "<td data-label='Nama Gejala'><ul  style='margin-left: 10px;'>";
    foreach ($nm_gjl as $gejala) {
        echo "<li>$gejala</li>";
    }
    echo "</ul></td>";
    $no++;
}
echo "</tbody></table>";
?>
