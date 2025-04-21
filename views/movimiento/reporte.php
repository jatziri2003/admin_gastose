<h1>Carreras</h1>
<table>
    <tr>
        <th>Nombre</th>
        <th>Semestres</th>
        <th>Clave</th>
    </tr>
    <?php foreach ($carreras as $key => $carrera) { ?>
        <tr>
            <td class="rojo"><?= $carrera->car_nombre?> </td>
            <td><?= $carrera->car_semestres?></td>
            <td><?= $carrera->car_clave?></td>
        </tr>
    <?php } ?>

</table>