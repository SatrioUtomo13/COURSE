<?php
// buat class app sebagai core 
class App
{
    // buat default controller, method dan class
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];

    public function __construct()
    {

        // panggil fungsi parseURL
        $url = $this->parseURL();

        // controller
        if (!empty($url) && file_exists('../app/controllers/' . $url[0] . '.php')) {
            $this->controller = $url[0];
            unset($url[0]);
        }

        // // panggil file controller lalu inisialisasi classnya
        require_once('../app/controllers/' . $this->controller . '.php');
        $this->controller = new $this->controller;

        // method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        };

        // // parameter
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // //jalankan controller & method, serta params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    /* 
    buat sebuah fungsi yang digunakan untuk mengambil url dan memecahnya menjadi sebuah array. array ini digunakan untuk menentukan controller dan method mana yang harus dipanggil.
    */
    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
