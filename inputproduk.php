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

                <a href="home.php"></a>
                <div
                    class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-[#08c4fc] text-white shadow-lg">
                    <span class="text-[13px] ml-4">Home</span>
                </div>

                <a href="">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4">Menu</span>
                    </div>
                </a>

                <a href="">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4">Menu</span>
                    </div>
                </a>

                <a href="">
                    <div
                        class="p-2 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg">
                        <span class="text-[13px] ml-4 block mb-0 ">Menu</span>
                    </div>
                </a>


                <div class="flex-shrink-0 mt-auto mb-4 flex justify-center rounded-md ">
                    <div
                        class="p-1 mr-1 w-full text-[13px]duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg rounded-md">
                        Bottom</div>
                    <div
                        class="p-1 ml-1 w-full text-[13px]duration-300 cursor-pointer hover:bg-[#08c4fc] hover:text-white text-slate-700 shadow-lg rounded-md">
                        Bottom</div>
                </div>

            </div>

            <div class="w-screen m-2 rounded-xl bg-[#08c4fc] ">
                <div class="flex mt-6">
                    <div class="p-2 m-3 h-20 w-full flex rounded-xl pr-4 cursor-pointer text-slate-700 ">
                        <span class="flex text-[33px] ml-4 items-center">
                            <h1>
                                Inputan Produk
                        </span>
                    </div>

                </div>
                <div>
                    <div class="border bg-white container mx-auto rounded-xl border-black max-w-6xl">
                        <!-- <div class="flex container mx-auto border shadow-md bg-cyan-100 justify-center"> -->
                        <div class="flex container mx-auto">
                            <label class="text-xl mb-3 ml-5 mt-2">Input Foto Produk</label>
                        </div>
                        <div class="flex justify-center ">
                            <input class="flex shadow-md border bg-blue-200 border-black p-3 rounded-xl mb-3"
                                type="file" name="foto" value="<?= $edit['foto']; ?>" required>
                        </div>

                        <!-- </div> -->
                    </div>
                    <div class="block container mx-auto gap-4 mt-5 sm:grid max-w-2xl">
                        <div class="border shadow-md bg-white rounded-xl">
                            <p class="ml-4 mt-2 mb-2">Data Pribadi </p>
                            <div class="block border border-black bg-gray-300 ml-4 mr-4 mb-4">
                                <div class="mb-3 mt-3 md:flex">
                                    <label for="text" class="ml-10 mr-2">Nama Produk</label>
                                    <input type="text" class="block border border-black ml-4 w-80 md:flex lg:mx-14"
                                        name="nama_ibu" />
                                </div>
                                <div class="mb-3 mt-3 md:flex">
                                    <label for="text" class="ml-10 mr-1">Banyak Produk</label>
                                    <input type="number" class="block border border-black ml-4 w-80 md:flex lg:mx-12"
                                        name="nama_ibu" />
                                </div>
                                <div class="mb-3 md:flex">
                                    <label for="text" class="ml-10 mr-4">Detail Produk</label>
                                    <textarea type="text"
                                        class="block border border-black ml-4 w-80 md:flex md:mx-6 lg:mx-12"
                                        name="no_hp"></textarea>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- <div class="container mx-auto border shadow-md bg-white mt-24 max-w-fit pb-3"> -->

                    <div class="flex justify-center mt-20 ">

                        <div class="mt-3 border bg-white py-3 rounded-2xl">
                            <button class=" bg-green-400 border-2 border-black h-11 p-2.5 px-6 py-2 ml-3 mr-3"
                                name="simpan">Simpan</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</body>

</html>