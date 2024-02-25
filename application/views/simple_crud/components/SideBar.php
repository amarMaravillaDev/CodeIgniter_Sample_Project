<?php
// Amar
defined('BASEPATH') or exit('No direct script access allowed');
?>

<aside class="w-100 h-100 d-flex border-start border-end border-primary bg-light sideBar">
    <nav class="navbar w-100 h-100 p-0">
        <ul class="navbar-nav w-100 h-100 d-flex flex-column p-4 gap-3 overflow-y-auto">

            <?php
                $this->load->view('simple_crud/components/SideBarLink', array("sideBarLink" => $sideBar));
            ?>

        </ul>
    </nav>
</aside>