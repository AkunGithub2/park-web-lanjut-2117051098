<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>

<div  class="container-box">
<form action=<?= base_url('user/store')?> method="POST" enctype="multipart/form-data">
    <?php if(session()->getFlashdata('errors')):?>
    <?=session()->getFlashdata('errors')?>
    <?php endif; ?>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" id="nama" value="<?= old('nama')?>" >
                </td>
            </tr>

            <tr>
                <td>NPM</td>
                <td>:</td>
                <td>
                    <input type="text" name="npm" id="npm" value="<?= old('npm')?>">
                </td>                
            </tr>

            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td>
                    <select name="kelas" id="kelas" style="width: 100%; padding: 8px; border: 1px solid #ccc; border-radius: 4px; margin-bottom: 10px;">
                        <?php foreach ($kelas as $item): ?>
                            <option value="<?= $item['id'] ?>"><?= $item['nama_kelas'] ?></option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            
            <tr>
                <td>Foto</td>
                <td>:</td>
                <td>
                    <input type="file" name="foto" id="foto" class="form-control">
                </td>                
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit">
                </td>
            </tr>
        </table>
    </form>
</div>
<?= $this->endSection() ?>