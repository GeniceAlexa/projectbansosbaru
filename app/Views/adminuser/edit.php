<?= $this->extend('layout/header'); ?>
<?= $this->section('content'); ?>

<div class="container mt-4">
  <h3 class="mb-3">Ubah Data Pengajuan</h3>

  <?php if(session()->getFlashdata('pesan')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('pesan'); ?></div>
  <?php endif; ?>

  <?php // $validation passed from controller
    $validation = \Config\Services::validation(); ?>

  <form action="<?= base_url('/adminuser/update/'.$adminuser['id_user']) ?>" method="post">
    <?= csrf_field() ?>

    <div class="mb-3">
      <label for="nama" class="form-label">Nama</label>
      <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : '' ?>" id="nama" name="nama" value="<?= esc($adminuser['nama'] ?? $adminuser['Nama'] ?? '') ?>">
      <div class="invalid-feedback"><?= $validation->getError('nama') ?></div>
    </div>

    <div class="mb-3">
      <label for="nik" class="form-label">NIK</label>
      <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : '' ?>" id="nik" name="nik" value="<?= esc($adminuser['nik'] ?? $adminuser['NIK'] ?? '') ?>">
      <div class="invalid-feedback"><?= $validation->getError('nik') ?></div>
    </div>

    <div class="mb-3">
      <label for="tanggal" class="form-label">Tanggal</label>
      <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= esc($adminuser['tanggal'] ?? '') ?>">
    </div>

    <div class="mb-3">
      <label for="status" class="form-label">Status</label>
      <select name="status" id="status" class="form-select">
        <?php $cur = $adminuser['status'] ?? $adminuser['Status'] ?? '' ?>
        <option value="" <?= $cur=='' ? 'selected' : '' ?>>-- Pilih Status --</option>
        <option value="pending" <?= $cur=='pending' ? 'selected' : '' ?>>Pending</option>
        <option value="disetujui" <?= $cur=='disetujui' ? 'selected' : '' ?>>Disetujui</option>
        <option value="ditolak" <?= $cur=='ditolak' ? 'selected' : '' ?>>Ditolak</option>
      </select>
    </div>

    <div class="d-flex gap-2">
      <button type="submit" class="btn btn-success">Simpan Perubahan</button>
      <a href="<?= base_url('/adminuser') ?>" class="btn btn-secondary">Kembali</a>
    </div>
  </form>

</div>

<?= $this->endSection(); ?>