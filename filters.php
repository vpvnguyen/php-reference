<?php
    // // check for post data
    // if (filter_has_var(INPUT_POST, 'data')) {
    //     echo 'Data Found';
    // } else {
    //     echo 'No Data';
    // }

    // // check for valid email than using regex
    // if (filter_has_var(INPUT_POST, 'data')) {
    //     $email = $_POST['data'];

    //     // remove illegal characters
    //     $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    //     echo $email.'<br>';

    //     if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //         echo 'Email valid';
    //     } else {
    //         echo 'Email is NOT valid';
    //     }
    // }

    # FILTER_VALIDATE_BOOLEAN
    # FILTER_VALIDATE_EMAIL
    # FILTER_VALIDATE_FLOAT
    # FILTER_VALIDATE_INT
    # FILTER_VALIDATE_IP
    # FILTER_VALIDATE_REGEXP
    # FILTER_VALIDATE_URL

    # FILTER_SANITIZE_EMAIL
    # FILTER_SANITIZE_ENCODED
    # FILTER_SANITIZE_NUMBER_FLOAT
    # FILTER_SANITIZE_NUMBER_INT
    # FILTER_SANITIZE_SPECIAL_CHARS
    # FILTER_SANITIZE_STRING
    # FILTER_SANITIZE_URL

    // // integer validation
    // # will take in both string or int
    // $varInt = 100;
    // $varStr = '100';

    // if (filter_var($varInt, FILTER_VALIDATE_INT)) {
    //     echo '$varInt: '.$varInt.' is a number';
    // } else {
    //     echo '$varInt: '.$varInt.' is NOT a number';
    // }

    // echo '<br>';

    // if (filter_var($varStr, FILTER_VALIDATE_INT)) {
    //     echo '$varStr: '.$varStr. ' is a number';
    // } else {
    //     echo '$varStr: '.$varStr. ' is NOT a number';
    // }

    $varScript = '<script>alert(1)</script>';
    echo $varScript; // will execute alert script; <script>alert(1)</script>
    echo filter_var($varScript, FILTER_SANITIZE_SPECIAL_CHARS); // will not execute and renders to harmless string; &#60;script&#62;alert(1)&#60;/script&#62;
    // var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));

    $filters = [
        'data' => FILTER_VALIDATE_EMAIL,
        'data2' => [
            'filter' => FILTER_VALIDATE_INT,
            'options' => [
                'min_range' => 1,
                'max_range' => 100
            ]
        ],
    ];

    print_r(filter_input_array(INPUT_POST, $filters)) // data and data2 will return empty because it failed validation; Array ( [data] => [data2] => )
?>

<!-- $_SERVER['PHP_SELF'] will return current page -->
<form method="POST" 
    action="
    <?php echo $_SERVER['PHP_SELF']; ?>
">
    <input type="text" name="data">
    <input type="text" name="data2">
    <button type="submit">Submit</button>
</form>