<div class="relative w-3/4 max-md:w-full overflow-x-auto shadow-md sm:rounded-lg overflow-auto mt-20">
<div>
   Url Display: <?php echo $dataurl[0]['link_url_redirect']; ?>
   Url Display: <?php echo $dataurl[0]['link_url_display']; ?>
</div>

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Nama Game
                </th>
                <th scope="col" class="px-6 py-3">
                    Gambar Game
                </th>
                <th scope="col" class="px-6 py-3">
                    Delete
                </th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($datagame as $game) : ?>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                   <?= $game['nama_game']; ?>
                    </th>
                    <td class="px-6 py-4">
                    <img src="/uploads/<?= $game['gambar_game']; ?>" class=" md:w-28 max-w-full max-h-full" alt="Apple Watch">
                </td>
                <td class="px-6 py-4 hover:cursor-pointer">
                <a onclick="deleteProduct(<?= $game['id']; ?>)" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>



<script>
    function deleteProduct(id) {
    Swal.fire({
        allowOutsideClick: false,
        title: 'Apakah Anda yakin?',
        text: "Akan Menghapus Game ini",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus',
        cancelButtonText: 'Batal',
    }).then((result) => {
        if (result.isConfirmed) {
            fetch(`http://localhost:8080/deletegame/${id}`)
                .then(res => res.json())
                .then(res => {
                    console.log(res);
                    Swal.fire({
                        icon: res.status,
                        title: res.status,
                        text: res.message
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Terjadi kesalahan, coba lagi nanti.'
                    });
                });
        }
    });
}

</script>
