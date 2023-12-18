<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Review</title>
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


                <div class="flex-shrink-0 mt-auto mb-4 flex justify-center rounded-md justify-">
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
                                Review Produk
                        </span>
                    </div>
                </div>

                <div>
                    <div class="container mx-auto mt-5 max-w-6xl bg-white rounded-xl py-9">
                        <div class=" flex justify-center">
                            <form action="review_proses.php" method="Post">
                                <textarea name="" id="" cols="100" rows="10" class="border border-black rounded-xl p-3"></textarea>
                                <input type="submit" value=""><button class="bg-green-500 px-3 py-2 rounded-md">Submit</button></input>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>

</body>

</html>