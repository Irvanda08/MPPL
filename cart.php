<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Keranjang</title>
    <link rel="stylesheet" href="/dist/output.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body class="font-[Inter] flex flex-col h-screen">
    <div class="flex flex-col">
        <div class="flex flex-1">
            <div class="flex flex-col w-64 h-screen gap-4 text-center bg-white p-3">
                <div class="text-[#08c4fc] flex flex-col">
                    <h1 class="flex mt-4 justify-center font-bold text-[15px]">Baku-Link</h1>
                </div>

                <a href="search.php"></a>
                <div
                    class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-[#08c4fc] text-white shadow-lg">
                    <span class="text-[13px] ml-4">Katalog</span>
                </div>

                <a href="status.php">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4">Status Pengiriman</span>
                    </div>
                </a>

                <div class="flex-shrink-0 mt-auto mb-4 flex justify-center rounded-md justify-">
                    <div
                        class="p-1 ml-1 w-full text-[13px]duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg rounded-md"><a href="logout.php">Logout</a>
                        </div>
                </div>

            </div>

            <div class="w-screen m-2 rounded-xl bg-[#08c4fc] ">
                <div class="flex mt-6">
                    <div class="p-2 m-3 h-20 w-full flex rounded-xl pr-4 cursor-pointer text-slate-700 ">
                        <span class="flex text-[33px] ml-4 items-center">
                            <h1>
                                Keranjang
                        </span>
                    </div>

                </div>
                <div class="flex justify-center">
                    <div class="">
                        <div class="flex items-center p-2 bg-gray-200 rounded-xl">
                            <div class=" bg-white m-3 p-4 h-48 w-52 rounded-xl items-center font-semibold shadow-2xl ">
                                <div class="flex justify-center">
                                    <img src="foto/guy.jpg" alt="" class="w-32">
                                </div>
                            </div>
                            <div class="mx-3 h-48 w-full bg-white rounded-xl shadow-2xl overflow-auto">
                                <div class="border border-black bg-gray-300 ml-4 mr-4 mb-5 mt-5 rounded-xl">
                                    <div>
                                        <p class="ml-5 mt-2">Nama Bahan Baku : Sayur</p>
                                    </div>
                                    <div>
                                        <p class="ml-5 mt-3">Harga : Rp. 5.000</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="text-center">Jumlah</div>
                                <div class="bg-gray-300 rounded-xl">
                                    <form action="">
                                        <input type="number" class="rounded-xl w-14">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center mt-3 py-3 rounded-2xl">
                    <button class="bg-green-400 border-2 border-black h-11 p-2.5 px-6 py-2 ml-3 mr-3"><a href="pembayaran.php">Selanjutnya</a></button>
                </div>
            </div>
        </div>
    </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
</body>

</html>