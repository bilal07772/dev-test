<?php
if ($characters->results && count($characters->results) > 0) {
    foreach ($characters->results as $result) { ?>
        <tr>
            <td><img src="<?= $result->image ?>" class="card-img-top image"/>
            </td>
            <td><?= $result->name ?>
            </td>
            <td>
                <span class="status "><?= $result->species ?></span>
            </td>
            <td>
                <span class="status "><?= $result->origin->name ?></span>

            </td>
            <td>
                <?php if (isset($result->episode) && count(($result->episode)) > 0) { ?>
                    <?php foreach($result->episode as $key=>$episode)?>
                        <p class="status "><?= $episode ?></p>
                <?php } ?>
            </td>
        </tr>
    <?php }
}
?>