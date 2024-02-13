<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

    <div class="overflow-auto w-100 h-100 table-responsive-sm">
        <table class="table table-hover table-striped border-primary m-0 p-0">
            <thead>

                <?php foreach ($table['tableColumns'] as $columnName) { ?>
                    <th class="bg-primary text-light position-sticky top-0 text-nowrap p-0">
                        <a href="<?= base_url('simple_crud/users?sortBy=' . $columnName["dbColumn"] . '&orderBy=' . ($sortBy == $columnName["dbColumn"] && $orderBy == 'ASC' ? 'DESC' : 'ASC') . ($rowFilter ? '&rowFilter=' . $rowFilter : "") . ($searchFor ? '&searchFor=' . $searchFor : "") . ($page ? '&page=' . $page : "")); ?>" 
                            class="text-light d-flex align-items-center justify-content-between gap-4 p-4 btn btn-primary border-0 rounded-0">
                            <?= $columnName["tableColumn"] ?>

                            <div class="d-flex flex-column gap-1">
                                <i class="fa-solid fa-sort-up d-flex align-items-center justify-content-center <?= $sortBy == $columnName["dbColumn"] ? ($orderBy == "ASC" ? "text-primary-emphasis" : "") : "" ?>"></i>
                                <i class="fa-solid fa-sort-down d-flex align-items-center justify-content-center <?= $sortBy == $columnName["dbColumn"] ? ($orderBy == "DESC" ? "text-primary-emphasis" : "") : "" ?>"></i>
                            </div>
                        </a>
                    </th>
                <?php } ?>

            </thead>
            <tbody class="border-secondary-subtle">

                <?php foreach ($table['tableData'] as $row) { ?>
                    <tr>

                        <?php
                        foreach ($row as $columnName => $columnValue) {
                            if (!in_array($columnName, $table['tableColumnsNotShown'])) {
                                ?>
                                <td class="text-nowrap p-4">
                                    <?= $columnValue ?>
                                </td>
                            <?php
                            }
                        }
                        ?>

                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>