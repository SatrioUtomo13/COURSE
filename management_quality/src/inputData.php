<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TACO</title>
    <link rel="stylesheet" href="../dist/output.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="../src/fontawesome/css/all.css">
    <!-- handsontable -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/handsontable/dist/handsontable.full.min.css">
</head>

<body class="bg-gray-200 h-[2000px]">
    <div class="flex m-10">
        <form class="bg-white w-1/2 p-4">
            <div class="relative z-0 w-full mb-6 group">
                <input type="date" name="tanggal" id="tanggal" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="tanggal" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">TANGGAL</label>
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="item" id="item" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="item" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">ITEM</label>
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="lotTac" id="lotTac" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="lotTac" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">LOT TAC</label>
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="lotPaper" id="lotPaper" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                <label for="lotPaper" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">LOT PAPER</label>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6 ">
                <div class="relative flex z-0 w-full mb-6 group">
                    <select name="tim" class="block  px-0 w-full text-gray-500 text-sm bg-transparent border-0 border-b-2 border-gray-300  dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                        <option selected>TIM</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>

                </div>

                <div class="relative flex z-0 w-full mb-6 group">
                    <select name="shift" class="block  px-0 w-full text-gray-500 text-sm bg-transparent border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                        <option selected>SHIFT</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                    </select>
                </div>
            </div>

            <div class="grid md:grid-cols-2 md:gap-6 ">
                <div class="relative flex z-0 w-full mb-6 group">
                    <select name="mesin" class="block  px-0 w-full text-gray-500 text-sm bg-transparent border-0 border-b-2 border-gray-300 dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                        <option selected>MESIN</option>
                        <option value="T1">T1</option>
                        <option value="T2">T2</option>
                        <option value="T3">T3</option>
                        <option value="T4">T4</option>
                        <option value="T5">T5</option>
                        <option value="T6">T6</option>
                    </select>
                </div>

                <div class="relative z-0 w-full mb-6 group">
                    <input type="text" name="lot" id="lot" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="lot" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">LOT</label>
                </div>
            </div>

            <button type="submit" class="saveButton">SAVE</button>

            <div class="clear-right"></div>
        </form>

        <div class="font-sans w-1/2 pl-5">
            <div>
                <span class="font-bold">LOT WIP</span>
                <div class="flex justify-between w-1/2 h-8 bg-white leading-8 px-3 mt-2">
                    <span>T1-20202002</span>
                    <i class="fas fa-solid fa-copy self-center text-lg cursor-pointer"></i>
                </div>
            </div>
            <div class="mt-10 space-y-3">
                <a href="" class="bg-red-500 text-white font-bold px-2 py-2 w-1/2 flex justify-between hover:bg-red-600">
                    <span>PRINT LABEL</span>
                    <i class="fas fa-solid fa-print text-2xl"></i>
                </a>

                <a href="" class="bg-red-500 text-white font-bold px-2 py-2 w-1/2 flex justify-between hover:bg-red-600">
                    <span>PRINT HASIL</span>
                    <i class="fas fa-solid fa-print text-2xl"></i>
                </a>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto flex flex-col bg-white mx-10 justify-center shadow-md">
        <table class=" bg-white border-collapse">
            <thead class="text-center text-xs bg-gray-100">
                <tr>
                    <td colspan="2" class="border border-slate-300">GSM</td>
                    <td rowspan="2" class="border border-slate-300">Lebar BF</td>
                    <td rowspan="2" class="border border-slate-300">Panjang</td>
                    <td rowspan="2" class="border border-slate-300">Lebar AF</td>
                    <td rowspan="2" class="border border-slate-300">Sub Lot</td>
                    <td rowspan="2" class="border border-slate-300">Jam cek</td>
                    <td rowspan="2" class="border border-slate-300">Qty cek</td>
                    <td colspan="3" class="border border-slate-300">RC GRAM</td>
                    <td colspan="3" class="border border-slate-300 text-red-500 px-8">RC %</td>
                    <td colspan="2" class="border border-slate-300 px-5">VC</td>
                    <td colspan="2" class="border border-slate-300 text-red-500 px-8">VC %</td>
                    <td rowspan="2" class="border border-slate-300">Speed</td>
                    <td rowspan="2" class="border border-slate-300 w-fit">Berat Aktual</td>
                    <td rowspan="2" class="border border-slate-300">Berat Awal</td>
                    <td rowspan="2" class="border border-slate-300">Berat Akhir</td>
                    <td rowspan="2" class="border border-slate-300">Qty Trt</td>
                    <td rowspan="2" class="border border-slate-300 text-red-500">Transisi</td>
                </tr>
                <tr>
                    <td class="border border-slate-300">BF</td>
                    <td class="border border-slate-300">AF</td>
                    <td class="border border-slate-300 text-center">R</td>
                    <td class="border border-slate-300 text-center">C</td>
                    <td class="border border-slate-300 text-center">L</td>
                    <td class="border border-slate-300 text-center text-red-500">R</td>
                    <td class="border border-slate-300 text-center text-red-500">C</td>
                    <td class="border border-slate-300 text-center text-red-500">L</td>
                    <td class="border border-slate-300 text-center">R</td>
                    <td class="border border-slate-300 text-center">L</td>
                    <td class="border border-slate-300 text-center text-red-500">R</td>
                    <td class="border border-slate-300 text-center text-red-500">L</td>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

                <tr>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class="focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="2" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="text" name="" id="" size="2" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="time" name="" id="" size="3" class=" focus:outline-none text-center"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="3" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center w-8"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "></td>
                    <td class="border border-slate-300 text-center "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                    <td class="border border-slate-300 text-right "><input type="number" name="" id="" size="1" class=" focus:outline-none text-center w-12"></td>
                </tr>

            </tbody>
        </table>

        <div class="flex self-end mt-5">
            <button type="button" class="text-white bg-gradient-to-r from-red-400 via-red-500 to-red-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Hapus</button>

            <button type="button" class="text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">Save</button>
        </div>
    </div>

    <div id="table"></div>

    <script>
        const container = document.getElementById('table');

        // const hot = new Handsontable(container, {
        //     startRows: 10,
        //     colWidths: 100,
        //     autoColumnSize: false,
        //     height: 'auto',
        //     width: 'auto',
        //     colHeaders: true,
        // nestedHeaders: [
        //     [{
        //             label: 'Tanggal'
        //         },
        //         {
        //             label: 'Lot wip'
        //         },
        //         {
        //             label: 'Shift'
        //         },
        //         {
        //             label: 'mesin'
        //         },
        //         {
        //             label: 'GSM',
        //             colspan: 2
        //         }
        //     ],

        //     [{
        //             label: ''
        //         },
        //         {
        //             label: ''
        //         },
        //         {
        //             label: ''
        //         },
        //         {
        //             label: ''
        //         },
        //         {
        //             label: 'RC'
        //         },
        //         {
        //             label: 'VC'
        //         }
        //     ],
        // ],

        // minSpareRows: 1,
        //     licenseKey: 'non-commercial-and-evaluation'
        // });

        const hot = new Handsontable(container, {
            data: [
                ['', '', '', '', '', '', '', '', '', '']
            ],
            colHeaders: true,
            rowHeaders: true,
            startRows: 10,
            height: 'auto',
            dropdownMenu: true,
            nestedHeaders: [
                [{
                        label: 'Tanggal'
                    },
                    {
                        label: 'Lot wip'
                    },
                    {
                        label: 'Shift'
                    },
                    {
                        label: 'mesin'
                    },
                    {
                        label: 'GSM',
                        colspan: 2
                    }
                ],

                [{
                        label: ''
                    },
                    {
                        label: ''
                    },
                    {
                        label: ''
                    },
                    {
                        label: ''
                    },
                    {
                        label: 'RC'
                    },
                    {
                        label: 'VC'
                    }
                ],
            ],
            licenseKey: 'non-commercial-and-evaluation'
        });
    </script>
</body>

</html>