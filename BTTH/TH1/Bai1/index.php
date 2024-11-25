<?php include 'header.php'; ?>

<body>
    <?php include 'flowers.php'; ?>

    <div class="container pt-5 pb-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Tên hoa </th>
                    <th scope="col">Mô tả</th>
                    <th scope="col">Hình ảnh</th>
                </tr>
            </thead>
            <tbody id="flower-table">
                <?php foreach ($flowers as $key => $flower): ?>
                    <tr id="row-<?= $key ?>">
                        <td class="name"><?= htmlspecialchars($flower['name']) ?></td>
                        <td class="description"><?= htmlspecialchars($flower['description']) ?> VND</td>
                        <td><img src="<?= htmlspecialchars($flower['image']) ?>" alt="" style="width: 100px; height: auto;"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

<?php include 'footer.php'; ?>
