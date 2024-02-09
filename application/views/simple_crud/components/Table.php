<?php 
    defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<div class="card overflow-hidden d-flex flex-column w-100 h-100 border border-primary">
    <div class="overflow-auto w-100 h-100 d-flex">
        <table class="w-100 h-100 overflow-auto table table-hover table-primary table-striped border-primary m-0 p-0 w-100 h-100 overflow-auto">
            <thead>
                <th class="bg-primary text-light">FIRST NAME</th>
                <th class="bg-primary text-light">MIDDLE NAME</th>
                <th class="bg-primary text-light">LAST NAME</th>
                <th class="bg-primary text-light">SUFFIX</th>
                <th class="bg-primary text-light">GENDER</th>
                <th class="bg-primary text-light">BIRTH DATE</th>
                <th class="bg-primary text-light">AGE</th>
                <th class="bg-primary text-light">CONTACT NUMBER</th>
                <th class="bg-primary text-light">EMAIL ADDRESS</th>
            </thead>
            <tbody class="table-group-divider border-light">

                <?php foreach ($usersList as $user) { ?>
                    <tr>
                        <td><?= $user['FIRST_NAME'] ?></td>
                        <td><?= $user['MIDDLE_NAME'] ?></td>
                        <td><?= $user['LAST_NAME'] ?></td>
                        <td><?= $user['SUFFIX'] ?></td>
                        <td><?= $user['GENDER'] ?></td>
                        <td><?= $user['BIRTH_DATE'] ?></td>
                        <td><?= $user['AGE'] ?></td>
                        <td><?= $user['CONTACT_NUMBER'] ?></td>
                        <td><?= $user['EMAIL_ADDRESS'] ?></td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>
</div>