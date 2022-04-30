
<style>
    th{
        width: 8rem;
        text-align: left;
        border-bottom: 1px solid black;
    }
    td{
        width: 8rem;
    }
</style>

<h1>Puntuació dels jugadors</h1>
<table>
    <tr>
        <th>Nom</th>
        <th>Puntuació</th>
    </tr>
    <?php foreach ($rowset as $row): ?>

        <tr>
            <td><?php echo $row->nom ?></td>
            <td><?php echo $row->ranking ?></td>
        </tr>

     <?php endforeach; ?>
</table>
