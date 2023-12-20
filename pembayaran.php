<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>pembayaran</title>
    <link rel="stylesheet" href="/dist/output.css" />
    <script src="https://cdn.tailwindcss.com"></script>
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
                                Pembayaran
                        </span>
                    </div>
                </div>
                            <form action="" method="post">
                                <div class="container max-w-5xl mx-auto rounded-xl bg-white p-5">
                                    <div class="container mx-auto border border-black rounded-xl bg-gray-300 p-5">
                                        <div class="font-semibold text-center text-xl">Pembelian Anda</div>
                                        <div>Item yang dibeli <span class="ml-1">:</span> .....</div>
                                        <div>Jumlah<span class="ml-16"><span class="ml-1"></span>:</span> .....</div>
                                        <div>Harga<span class="ml-16"><span class="ml-3"></span>:</span> .....</div>
                                        <hr class="bg-black h-1">
                                        <div>Total Harga<span class="ml-10">:</span> .....</div>
                                    </div>
                                    <div class="font-semibold text-center mt-5 mb-5 text-xl">Pilih Metode Pembayaran</div>
                                    <div class="flex flex-wrap gap-x-24 justify-evenly">
                                        <div class="w-52 flex">
                                            <input type="radio" name="pembayaran" value="">
                                            <img src="foto/ovo.jpg" alt="">
                                        </div>
                                        <div class="w-52 flex">
                                            <input type="radio" name="pembayaran" value="">
                                            <img src="foto/atm.jpg" alt="">
                                        </div>
                                        <div class="w-52 flex">
                                            <input type="radio" name="pembayaran" value="">
                                            <img src="foto/gopay.webp" alt="">
                                        </div>
                                        <div class="w-52 flex">
                                            <input type="radio" name="pembayaran" value="">
                                            <img src="foto/cod.png" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center mt-7 mb-7">
                                    <div class="mt-3">
                                        <button class=" bg-green-400 border-2 border-black h-11 p-2.5 px-6 py-2 ml-3 mr-3"
                                            name="simpan">Bayar</button>
                                    </div>
                                </div>
                            </form>
                </div>
            </div>
        </div>
    </div>

</body>

</html>