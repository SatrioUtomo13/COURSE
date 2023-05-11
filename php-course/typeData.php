<?php 

    // 1. type data number : int

    //decimal
    echo 'decimal :';
    var_dump(1234);

    echo '<br>';

    //octal: begin with 0
    echo 'octal : ';
    var_dump(0123);

    echo '<br>';

    //hexadecimal : begin with 0x
    echo 'hexadecimal : ';
    var_dump(0x1A);

    echo '<br>';

    //binary: begin with 0b
    echo 'binary: ';
    var_dump(0b1111);

    echo '<br>';
    echo '<br>';

    // 2. type data float

    //floating point
    echo 'floating point : ';
    var_dump(1.234);

    echo '<br>';

    //floating point with E notation
    echo 'floating point with e notation : ';
    var_dump(1.7e3);

    echo '<br>';

    //floating point with e notation minus 
    echo 'floating point with minus e notation : ';
    var_dump(1.7e-3);

    echo '<br>';
    echo '<br>';

    //3. type data boolean
    // true
    echo 'this is true : ';
    var_dump(true);

    echo '<br>';

    //false
    echo 'this is false : ';
    var_dump(false);

    echo '<br>';
    echo '<br>';

    //4. type data string
    //single quote
    echo 'name : ';
    echo 'satrio utomo';

    echo '<br>';

    //double quote : support enter and tab
    echo "\n";
    echo "name : \n";
    echo "satrio\t\t utomo";

    echo '<br>';

    //multiline string : heredoc
    echo <<<SATRIO
    this is multiline string
    using heredoc
    SATRIO;

    echo '<br>';

    //multiline string : nowdoc
    echo <<<'SATRIO'
    this is multiline string
    using heredoc
    SATRIO;
?> 
