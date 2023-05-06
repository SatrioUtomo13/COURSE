<?php
// header
include('header.php');
?>

<div class="ml-64">
    <div class="bg-white mx-28 my-10 px-16 py-5">
        <h1 class="text-black font-bold text-2xl mb-2">Lihat Petugas</h1>

        <!-- search fitur -->
        <form class="flex items-center mb-5">
            <span>Cari Petugas : </span>
            <div class="relative ml-3">
                <div class=" absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-full focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search">
            </div>
        </form>

        <span class="block w-full bg-black h-2 mb-5"></span>

        <table class="w-full mb-3">
            <thead class="bg-gray-200">
                <th>NO</th>
                <th>NAMA</th>
                <th>NIP</th>
                <th>TIM</th>
                <th>PASSWORD</th>
                <th>AKSI</th>
            </thead>

            <tbody class="text-center">
                <tr>
                    <td>1</td>
                    <td>satrio</td>
                    <td>E20170801</td>
                    <td>c</td>
                    <td>12345</td>
                    <td>
                        <i class="fas fa-solid fa-pen-to-square text-yellow-300"></i>
                        <i class="fas fa-solid fa-trash text-red-500"></i>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- pagination -->
        <div class="flex">
            <a href="#" class="inline-flex items-center px-4 py-2 mr-3 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                </svg>
                Previous
            </a>
            <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                Next
                <svg aria-hidden="true" class="w-5 h-5 ml-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
            </a>
        </div>

    </div>
</div>

<?php
// footer
include('footer.php');
?>