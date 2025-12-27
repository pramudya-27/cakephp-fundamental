<div class="d-flex justify-content-center">
    <div class="card card-login">
        <div class="card-header">
            <h4 class="fw-bold text-dark">Portal Login</h4>
            <p class="text-muted small">Silakan login untuk melanjutkan</p>
        </div>
        <div class="card-body p-4">
            <?= $this->Form->create() ?>
                <div class="mb-3">
                    <label class="form-label text-muted">Username</label>
                    <?= $this->Form->control('username', [
                        'label' => false, 
                        'class' => 'form-control', 
                        'placeholder' => 'Masukkan username',
                        'required' => true
                    ]) ?>
                </div>
                <div class="mb-4">
                    <label class="form-label text-muted">Password</label>
                    <?= $this->Form->control('password', [
                        'label' => false, 
                        'class' => 'form-control', 
                        'placeholder' => 'Masukkan password',
                        'required' => true
                    ]) ?>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-custom">MASUK SEKARANG</button>
                </div>
            <?= $this->Form->end() ?>
        </div>
        <div class="card-footer bg-white text-center py-3">
            <small class="text-muted">&copy; 2024 Tugas Pemrograman Web</small>
        </div>
    </div>
</div>