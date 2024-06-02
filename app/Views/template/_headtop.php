<!-- variable 1  -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="description" content="Toko online">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css');?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css"> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">   
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
/* width */
::-webkit-scrollbar {
  width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
  background: Black; 
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #00FF00; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: gray; 
}
    .container{
        margin: 5px;
        z-index: 50;
        width: 500px;
        background: black;
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;
        color: black;
        font-weight: bold;
        height: 250px;

    }
    .window{
        background: black;
        border-top: 1px solid #00FF00;
        border-left: 1px solid #00FF00;
        border-right: 1px solid #00FF00;
        border-bottom: 1px solid #00FF00;
        overflow-y: scroll; /* Tetap menggunakan scroll */
        overflow-x: hidden; /* Tetap menggunakan hidden untuk overflow-x */
    }
    .window::-webkit-scrollbar {
        display: none; /* Hapus scrollbar untuk Chrome, Safari, dan Opera */
    }
    .window {
        -ms-overflow-style: none;  /* Hapus scrollbar untuk IE dan Edge */
        scrollbar-width: none;  /* Hapus scrollbar untuk Firefox */
    }
    .border {
        background-color: #00FF00;
        width: 100%;
        color: black;
        font-weight: bold;
    }
    .font{
        font-family: 'Courier New', Courier, monospace;
        color: #00FF00;
        font-weight: bold;
    }
    .fontBar{
        font-family: 'Courier New', Courier, monospace;
        color: black;
        font-size: large;
    }
    #loading{
        background-color: #00FF00;

    }
    #buttonLogin{
        background-color: #00FF00;

    }




</style>
</head>
<body class="overflow-auto bg-black p-0 m-0 text-green-300 body">

