<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
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
                                Profile
                        </span>
                    </div>

                </div>


                <div class="mx-3 p-3">
                    <div class="flex items-center p-2 mx-24">
                        <div class=" bg-white m-3 p-4 h-48 w-52 rounded-xl items-center font-semibold shadow-2xl ">
                            <div class="flex justify-center">
                                <img src="foto/guy.jpg" alt="" class="w-32">
                            </div>
                        </div>
                        <div class="mx-3 h-48 w-full bg-white rounded-xl shadow-2xl ">
                            <div class="block border border-black bg-gray-300 ml-4 mr-4 mb-5 mt-5">
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

                <div class="mx-3 p-3">
                    <div class="flex items-center p-2 mx-24">
                        <div class="w-full h-60 rounded-xl bg-white shadow-2xl">
                            <div class=" ml-5 mt-4">
                                <p class="mb-4">Deskripsi :</p>
                                <div class="block border border-black bg-gray-300  mr-4 mb-5 mt-5">
                                    <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis ullam obcaecati autem, nihil voluptates id praesentium architecto omnis quis nostrum cupiditate pariatur a non assumenda quo sint voluptatum repellendus dolore alias ea veritatis possimus nesciunt, illo maiores! Maxime illo iure, aspernatur, beatae asperiores laboriosam facere porro tenetur numquam recusandae quisquam!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>

</html>