<table class="table tabel-rezultat table-borderless table-striped 
table-secondary table-hover" id="tabelRezultat">
    <?php
        if(isset($numep)){
            $date = "SELECT * FROM $numep";
            $results = mysqli_query($conn,$date);
            $sql = " SELECT COUNT(id) AS total FROM $numep";
            $result = mysqli_query($conn,$sql);
            $values = mysqli_fetch_assoc($result);
            $num_rows = $values['total'];
            if($num_rows > 0):
    ?>
    <?php
    include 'datePiesa.php';
        if($tratamentTermic == "da"){
    ?>
    <tr class="table-dark">
        <th>Sk</th>
        <th colspan="6" class="text-center">Prelucrări necesare</th>
    </tr>
    <tr>
        <td></td>
        <td>I</td>
        <td>II</td>
        <td>III</td>
        <td>IV</td>
        <td>V</td>
        <td>VI</td>
    </tr>
    <?php }else{
    ?>
    <tr class="table-dark">
        <th>Sk</th>
        <th colspan="4" class="text-center">Prelucrări necesare</th>
    </tr>
    <tr>
        <td></td>
        <td>I</td>
        <td>II</td>
        <td>III</td>
        <td>IV</td>
    </tr>
    <?php
    }endif;
            include 'generareRezultat.php';
        }   
    ?>
</table>