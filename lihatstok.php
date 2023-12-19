<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kriptografi</title>
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
                <div
                    class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-800 text-white shadow-lg mb-8">
                    <input type="text" placeholder="Search"
                        class="text-[15px] ml-4 w-full bg-transparent focus:outline-none text-white" />
                </div>

                <a href="index.php">
                    <div
                    class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-[#08c4fc] text-white shadow-lg">
                    <span class="text-[13px] ml-4">Profile</span>
                    </div>
                </a>
                
                <a href="lihatstok.php">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4">Stok Saya</span>
                    </div>
                </a>

                <a href="inputproduk.php">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4">Tambah Item</span>
                    </div>
                </a>

                <a href="status.php">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4 block mb-0 ">Status Pengiriman</span>
                    </div>
                </a>


                <div class="flex-shrink-0 mt-auto mb-4 flex justify-center rounded-md ">
                    <div
                        class="p-1 ml-1 w-full text-[13px]duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg rounded-md">
                        <a href="logout.php">Logout</a></div>
                </div>

            </div>

            <div class="w-screen m-2 rounded-xl bg-[#08c4fc]">
                <div class="flex mt-6">
                    <div class="p-2 m-3 h-20 w-full flex rounded-xl pr-4 cursor-pointer text-slate-700 ">
                        <span class="flex text-[33px] ml-4 items-center">
                            <h1>
                                Stok Saya
                        </span>
                    </div>

                </div>


                <div class="mx-3 p-3 border bg-white max-w-fullxl rounded-xl mb-5">
                    <div class="flex items-center p-2 mx-24 bg-gray-200 rounded-xl">
                        <div class=" bg-white m-3 p-4 h-48 w-52 rounded-xl items-center font-semibold shadow-2xl ">
                            <div class="flex justify-center">
                                <img src="foto/guy.jpg" alt="" class="w-32">
                            </div>
                        </div>
                        <div class="mx-3 h-48 w-full bg-white rounded-xl shadow-2xl overflow-auto">
                            <div class="block border border-black bg-gray-300 ml-4 mr-4 mb-5 mt-5 rounded-xl">
                                <div>
                                    <p class="ml-5 mt-2">Nama Bahan Baku : Sayur</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3">Jumlah Stok : 400</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3">Harga : Rp. 5.000</p>
                                </div>
                                <div >
                                    <p class="ml-5 mt-3 mb-3">Deskripsi : Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam, vel sit aperiam rem dolorem sequi modi quia? Error dignissimos reprehenderit nesciunt deserunt pariatur odit veritatis eum assumenda animi sit, sapiente ab quos porro doloremque? Inventore dicta asperiores distinctio fugit pariatur ex, aut a in, numquam natus mollitia vitae, nam nemo.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-center p-2 mx-24 bg-gray-200 rounded-xl mt-5">
                        <div class=" bg-white m-3 p-4 h-48 w-52 rounded-xl items-center font-semibold shadow-2xl overflow-auto">
                            <div class="flex">
                                <p class="justify-center">gambar nanti di sini</p>
                            </div>
                        </div>
                        <div class="mx-3 h-48 w-full bg-white rounded-xl shadow-2xl ">
                            <div class="block border border-black bg-gray-300 ml-4 mr-4 mb-5 mt-5 rounded-xl">
                                <div>
                                    <p class="ml-5 mt-2">Nama : Muhammad Rizky</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3">No. tlp : 082360105106</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3">Sosial Media : @mhd_rizky_m</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3 mb-3">Alamat : Maguwoharjo, sleman, Yogyakarta</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="flex items-center p-2 mx-24 bg-gray-200 rounded-xl mt-5">
                        <div class=" bg-white m-3 p-4 h-48 w-52 rounded-xl items-center font-semibold shadow-2xl overflow-auto">
                            <div class="flex">
                                <p class="justify-center">gambar nanti di sini</p>
                            </div>
                        </div>
                        <div class="mx-3 h-48 w-full bg-white rounded-xl shadow-2xl ">
                            <div class="block border border-black bg-gray-300 ml-4 mr-4 mb-5 mt-5 rounded-xl">
                                <div>
                                    <p class="ml-5 mt-2">Nama : Muhammad Rizky</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3">No. tlp : 082360105106</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3">Sosial Media : @mhd_rizky_m</p>
                                </div>
                                <div>
                                    <p class="ml-5 mt-3 mb-3">Alamat : Maguwoharjo, sleman, Yogyakarta</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>

</body>

</html>