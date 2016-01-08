<h1>科目(detail)</h1>

<?php # print_r($details); ?>

<table>
    <tr>
        <th>Id</th>
        <th>Created</th>
        <th>Modified</th>
        <th>科目名</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($details as $detail): ?>
        <tr>
            <td><?php echo $detail['Detail']['id']; ?></td>
            <td><?php echo $detail['Detail']['created']; ?></td>
            <td><?php echo $detail['Detail']['modified']; ?></td>
            <td><?php echo $detail['Detail']['detail_name']; ?></td>
        </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
