<?php 

// deklarasi class WordCount
class Wordcount {

    // deklarasi fungsi countWords dan menerima satu parameter yaitu $sentence
    public function countWords($sentence){

        // pecah kalimat dengan menggunakan spasi(" ") pada fungsi explode. hitung jumlah kata menggunakan fungsi count. kembalikan hasil akhir jumlah kata menggunakan return
        return count(explode(" ", $sentence));
    }
}

?>