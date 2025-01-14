<style>
        .font {
        font-family: 'Courier New', Courier, monospace;
        color: #00FF00;
    }
    .windowDropdown {
        background: black;
        overflow-y: scroll; /* Tetap menggunakan scroll */
        overflow-x: hidden; /* Tetap menggunakan hidden untuk overflow-x */

    }
    .windowDropdown::-webkit-scrollbar {
        display: none; /* Hapus scrollbar untuk Chrome, Safari, dan Opera */
    }
    .windowDropdown {
        -ms-overflow-style: none;  /* Hapus scrollbar untuk IE dan Edge */
        scrollbar-width: none;  /* Hapus scrollbar untuk Firefox */
    }
    .containerDropdown{
        margin: 5px;
        width: 450px;
        background-color: #00FF00;
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;
        color: black;
        font-weight: bold;
    }
    .borderWindow{
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;

    }

</style>
<div class="w-3/4 max-sm:w-full h-[350px] mb-2 borderWindow " id="dropdownWindow" style="visibility:visible">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Application Engine</div>
    <div class="w-fit">
        
            <button id="minimizeButtonDropdown" class="p-1">
                <i class="fas fa-window-minimize"></i>
            </button>
            <button id="maximizeButton" class="p-1">
                <i class="fas fa-window-maximize"></i>
            </button>
            <button id="closeButton" class="p-1">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>

    <div class="flex flex-col justify-between h-3/4 max-md:h-3/4  items-center p-2 " style="background-image: url('https://c.tenor.com/sFXhY5dsVeYAAAAC/tenor.gif'); background-size: cover;" >
        <div class=" font max-xl:text-xl max-md:text-md  text-3xl text-center"><?php echo $dataurl[0]['link_url_display']; ?></div>
        <div class="flex flex-col justify-between items-center h-3/4 w-full">
            <img id="gameImage" src="/uploads/<?php echo $datagame[0]['gambar_game']; ?>" class="w-1/2 h-11/12 max-lg:h-full max-lg:w-3/4" alt="">
        </div>
        <div class="w-full">
            <select class="w-full bg-black h-10 font border border-green-300 my-8" id="gameSelect">
                <?php foreach($datagame as $game) { ?>
                    <option value="<?php echo $game['gambar_game']; ?>">
                        <?php echo $game['nama_game']; ?>
                    </option>
                <?php } ?>
            </select>
        </div>
</div>

<script>
    document.getElementById('gameSelect').addEventListener('change', function() {
        var selectedImage = this.value;
        document.getElementById('gameImage').src = '/uploads/' + selectedImage;
    });

//fungsi minimize
    document.getElementById('minimizeButtonDropdown').addEventListener('click', function() {
    let dropdownWindow = document.getElementById('dropdownWindow')
    let dropdownButton = document.getElementById('dropdownButton')
    dropdownWindow.style.visibility = 'hidden';
    dropdownButton.style.display = 'block';
    });

</script>

</div>

