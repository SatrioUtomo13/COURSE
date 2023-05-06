//tangkap element
let keyword = document.getElementById('keyword');
let cari = document.getElementById('cari');
let container = document.getElementById('container');

keyword.addEventListener('keyup', function() {
    
    //buat objek ajax
    let xhr = new XMLHttpRequest();

    //cek kesiapan resource
    xhr.onreadystatechange = function () {
        if(xhr.readyState == 4 && xhr.status == 200) {
            container.innerHTML = xhr.responseText;
        }
    }

    //eksekusi ajax
    xhr.open('GET', 'ajax/search.php?keyword=' + keyword.value , true);
    xhr.send();
})