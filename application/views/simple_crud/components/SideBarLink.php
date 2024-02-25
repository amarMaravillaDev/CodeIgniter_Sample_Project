<?php
defined('BASEPATH') or exit('No direct script access allowed');

// echo '<script> console.log(`Side Bar: `, ' . json_encode($sideBarLink) . '); </script>';
?>

<?php
if (isset($sideBarLink['anchor'])) {
    foreach ($sideBarLink['anchor'] as $link) {
        // echo '<script> console.log(`Anchor: `, ' . json_encode($link) . '); </script>';
        ?>

        <li class="nav-item">
            <a href="<?= base_url($link['baseURL']) ?>"
                class="sideBarBtn focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                <span class="material-symbols-rounded">
                    <?= $link['icon'] ?>
                </span>
                <?= $link['linkName'] ?>
            </a>
        </li>

        <?php
    }
}

if (isset($sideBarLink['dropDown'])) {
    foreach ($sideBarLink['dropDown'] as $mainLink) {
        // echo '<script> console.log(`Drop Down: `, ' . json_encode($mainLink) . '); </script>';
        ?>

        <li class="nav-item">
            <div class="accordion border-0" id="settingsBtn">
                <div class="accordion-item border-0 text-primary">
                    <div class="accordion-header">
                        <button
                            class="sideBarBtn collapsed w-100 border-0 focus-ring focus-ring-primary accordionButton btn btn-outline-primary d-flex align-items-center gap-4 p-4"
                            type="button" data-bs-toggle="collapse" data-bs-target="#settingsItems" aria-expanded="true"
                            aria-controls="settingsItems">
                            <span class="material-symbols-rounded">
                                <?= $mainLink['icon'] ?>
                            </span>

                            <?= $mainLink['linkName'] ?>

                            <span class="material-symbols-rounded fs-2 ms-auto accordionIcon">
                                keyboard_arrow_down
                            </span>
                        </button>
                    </div>
                    <div id="settingsItems" class="accordion-collapse collapse bg-primary bg-opacity-25"
                        data-bs-parent="#settingsBtn">
                        <div class="accordion-body p-0">

                            <?php
                            // echo '<script> console.log(`Drop Down Under Links: `, ' . json_encode($mainLink['links']) . '); </script>';
                            foreach ($mainLink['links'] as $underLink) {
                                ?>

                                <a href="<?= base_url($underLink['baseURL']) ?>"
                                    class="w-100 dropDownBtn rounded-0 bg-opacity-50 focus-ring focus-ring-primary border-0 p-4 d-flex align-items-center gap-4 btn btn-outline-primary">
                                    <span class="material-symbols-rounded">
                                        <?= $underLink['icon'] ?>
                                    </span>

                                    <?= $underLink['linkName'] ?>
                                </a>

                            <?php } ?>

                        </div>
                    </div>
                </div>
            </div>
        </li>

        <?php
    }
}
?>