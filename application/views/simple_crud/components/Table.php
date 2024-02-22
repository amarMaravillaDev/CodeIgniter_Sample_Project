<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<table
    class="<?= (!$viewsData['totalRows'] && $viewsData['searchFor']) ? "w-100 h-100" : "" ?> table table-hover table-striped border-primary m-0 p-0">
    <thead>

        <?php foreach ($table['tableColumns'] as $columnName) { ?>
            <th class="bg-primary text-light position-sticky top-0 text-nowrap p-0">
                <a href="<?= base_url('simple_crud/users/users_list?sortBy=' . $columnName["dbColumn"] . '&orderBy=' . ($viewsData['sortBy'] == $columnName["dbColumn"] && $viewsData['orderBy'] == 'ASC' ? 'DESC' : 'ASC') . ($viewsData['rowFilter'] ? '&rowFilter=' . $viewsData['rowFilter'] : "") . ($viewsData['searchFor'] ? '&searchFor=' . $viewsData['searchFor'] : "") . ($viewsData['page'] ? '&page=' . $viewsData['page'] : "")); ?>"
                    class="text-light d-flex align-items-center justify-content-between gap-4 p-4 btn btn-primary border-0 rounded-0">
                    <?= $columnName["tableColumn"] ?>

                    <div class="d-flex flex-column gap-1">
                        <!-- <i
                            class="fa-solid fa-sort-up d-flex align-items-center justify-content-center <?= $viewsData['sortBy'] == $columnName["dbColumn"] ? ($viewsData['orderBy'] == "ASC" ? "text-primary-emphasis" : "") : "" ?>"></i> -->
                        <!-- <i
                            class="fa-solid fa-sort-down d-flex align-items-center justify-content-center <?= $viewsData['sortBy'] == $columnName["dbColumn"] ? ($viewsData['orderBy'] == "DESC" ? "text-primary-emphasis" : "") : "" ?>"></i> -->

                        <span
                            class="material-symbols-rounded tableIcon <?= $viewsData['sortBy'] == $columnName["dbColumn"] ? ($viewsData['orderBy'] == "ASC" ? "text-primary-emphasis" : "") : "" ?>">
                            arrow_drop_up
                        </span>
                        <span
                            class="material-symbols-rounded tableIcon <?= $viewsData['sortBy'] == $columnName["dbColumn"] ? ($viewsData['orderBy'] == "DESC" ? "text-primary-emphasis" : "") : "" ?>">
                            arrow_drop_down
                        </span>
                    </div>
                </a>
            </th>
        <?php } ?>

    </thead>
    <tbody class="border-secondary-subtle">

        <?php if (!$viewsData['totalRows'] && $viewsData['searchFor']) { ?>
            <tr colspan="<?= count($table['tableColumns']) ?>" class="w-100 h-100">
                <td colspan="<?= count($table['tableColumns']) ?>" class="w-100 h-100">
                    <div
                        class="text-primary w-100 h-100 d-flex flex-column gap-3 align-items-center justify-content-center fs-5">
                        <!-- <i class="fa-solid fa-clipboard-question tableDataIcon"></i> -->
                        <!-- <i class="fa-solid fa-file-circle-xmark tableDataIcon"></i> -->
                        <span class="material-symbols-rounded tableDataIcon">
                            search_off
                        </span>

                        No Record/s Found for "<?= $viewsData['searchFor'] ?>".
                    </div>
                </td>
            </tr>
        <?php } else { ?>

            <?php foreach ($table['tableData'] as $column) { ?>
                <tr>

                    <?php
                    foreach ($column as $columnName => $columnValue) {
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
            <?php }
        } ?>

    </tbody>
</table>