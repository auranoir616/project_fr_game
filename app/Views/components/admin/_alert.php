<div>
    <?php if(session()->has('success')): ?>
  <script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '<?= session('success') ?>'
            });
        </script>
  </div>
<?php endif; ?>

<div>
    <?php if(session()->has('error')): ?>
  <script>
            Swal.fire({
                icon: 'error',
                title: 'error',
                text: '<?= session('error') ?>'
            });
        </script>
  </div>
<?php endif; ?>
