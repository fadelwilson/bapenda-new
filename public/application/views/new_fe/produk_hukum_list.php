<?php
// $folder = base_url('loginwebsite/uploads/tentangkami/profiltim/');
$folder = 'https://www.bapenda.purwakartakab.go.id/loginwebsite/uploads/tentangkami/produkhukum/';
?>

<table id="produk-hukum-table" class="border-collapse w-full bg-stone-200 orbitron text-xs tracking-widest rounded-xl overflow-hidden border border-stone-50">
    <thead class="text-sm">
        <tr>
            <th class="border-stone-300 border p-2">NO</th>
            <th class="border-stone-300 border p-2">NAMA BERKAS</th>
            <th class="border-stone-300 border p-2">UNDUH</th>
        </tr>
    </thead>
    <tbody class="text-center" id="produk-hukum-body">
        <?php foreach ($produk as $ph): ?>
            <tr>
                <td class="border-stone-300 border p-2"><?= $ph['nomor'] ?></td>
                <td class="border-stone-300 border p-2 md:w-[1150px]">
                    <div class="line-clamp-2 break-words break-all">
                        <?= htmlspecialchars($ph['ket']) ?>
                    </div>
                </td>
                <td class="border-stone-300 border p-2">
                    <a href="<?= $folder . $ph['file_uu'] ?>" target="_blank" download
                        class="inline-block group px-3 py-1 border border-stone-700 rounded hover:bg-stone-700 hover:text-stone-200 duration-100">
                        <span class="material-symbols-outlined align-middle !text-xl">download</span>
                        <span class="align-middle"> Unduh </span>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- pagination -->
<div class="flex gap-2 justify-end mt-4">
    <?php
    $total_pages = ceil($count / $limit);
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    ?>

    <a
        href="javascript:void(0)"
        id="prevPage"
        class="bg-stone-200 inline-block p-1 aspect-square text-center rounded overflow-hidden <?= ($current_page == 1) ? 'opacity-50 cursor-not-allowed' : '' ?>"
        data-page="<?= $current_page - 1 ?>">
        <span class="material-symbols-outlined align-middle">
            chevron_left
        </span>
    </a>

    <a
        href="javascript:void(0)"
        id="nextPage"
        class="bg-stone-200 inline-block p-1 aspect-square text-center rounded overflow-hidden <?= ($current_page == $total_pages) ? 'opacity-50 cursor-not-allowed' : '' ?>"
        data-page="<?= $current_page + 1 ?>">
        <span class="material-symbols-outlined align-middle">
            chevron_right
        </span>
    </a>
</div>