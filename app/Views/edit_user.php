<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
<div class="container-box">

<?php if(session()->getFlashdata('errors')):?>
    <?=session()->getFlashdata('errors')?>
    <?php endif; ?>
<form action="<?= base_url('/user/'.$user['id']) ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_method" value="PUT"> <!-- Add this hidden input for the PUT method -->
<?= csrf_field() ?> <!-- Include the csrf_field method here -->
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?= $user['nama'] ?>" id="nama"...>
                </td>
            </tr>

            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" name="npm" id="npm" value="<?= $user['npm'] ?>" ...>
                </td>
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="kelas" id="kelas" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
                    <?php
                    foreach ($kelas as $item){
                        ?>
                        <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : '' ?> >
                            <?= $item['nama_kelas'] ?>
                            </option>
                        <?php
                        }
                    ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <img src="<?= $user['foto'] ?? '<default-foto>' ?>" style="max-width: 100%; max-height: 100px;">
                    <input type="file" name="foto" id="foto" class="form-control">
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Submit" >
                </td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection() ?>
