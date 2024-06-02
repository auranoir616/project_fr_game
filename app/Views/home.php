<?= view('/template/_headtop') ?>

   <div class="flex flex-row justify-between items-start max-md:flex-col ">
      <div class="flex flex-col justify-start items-start w-1/3 h-screen p-5 max-sm:hidden">
         <?= view('/components/home/_animasiCode1') ?>
         <?= view('/components/home/_displayIP') ?>
         
        </div>
        <div class="flex flex-col justify-start items-center h-screen w-1/3 p-5 max-sm:w-full">
            <?= view('/components/home/_dropdowngame') ?>
            <?//= view('/components/home/_animasiChart') ?>
            <?= view('/components/home/_loginForm') ?>

      </div>
      <div class="flex flex-col justify-start  items-start h-screen w-1/3 p-5 max-sm:hidden">
            <?= view('/components/home/_animasiPing') ?>
      </div>
    </div>
    <!-- running bar -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                <div class="windowForm">
                <div class="flex items-center justify-between p-4 md:p-5 rounded-t">
                    <h3 class="font text-3xl">
                        Running
                    </h3>
                </div>
                <div class="p-4 md:p-5 space-y-4">
                
  <div class="w-full">
    <div id="loading" class="h-5  text-xs font-medium text-center leading-none" style="width:0%"></div>
  </div>
            </div>
            <div class="flex items-center justify-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                <a class="btn-glow w-1/2 fontBar text-center font-bold h-10 justify-center items-center hidden"  href="https://www.youtube.com/" id="buttonLogin" data-modal-hide="static-modal" >Login</a>
            </div>
        </div>
    </div>
</div>


<!-- //code running -->
<!-- data-modal-backdrop="static" -->
<div id="static-modal-runningprogram"  data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center w-full h-[calc(100%-1rem)] max-h-full">
<div class="relative p-4 w-full max-w-2xl max-h-full ">
<div class="w-11/12 h-80">
<div class="border w-full flex flex-row justify-between items-start p-1">
    <div class="w-fit fontBar">Running Program</div>
    <div class="w-fit">
            <button id="minimizeButton" class="p-1">
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
    <div class="w-full min-h-80 window" id="runningProgram">
        <pre id="Running-Programs" class="font" style="white-space: pre-wrap;"></pre> <!-- Pastikan properti ini -->
    </div>
</div>

</div>
    </div>

</div>
       
    <?= view('/template/_headbottom') ?>
