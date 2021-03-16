<?php

// customer = for who
function orderPizza($pizzaType, $customer) {

    $price = pizzaCost($pizzaType);
    $address = 'unknown';

        if($customer == 'koen')
        {
            $address = 'a peniche in Liège';
        } elseif ($customer == 'nico')
        {
            $address = 'somewhere in Belgium';
        } elseif ($customer == 'students') {
            $address = 'BeCode office';
        }

    $message = "A $pizzaType pizza should be sent to $customer <br>The address: $address.";
    echo 'Creating new order... <br>';
    echo $message . '<br>';
    echo'The bill is €'. $price . '.<br>';
    echo "Order finished.<br><br>";
}

function pizzaCost($pizza)
{
    switch($pizza){
        case 'marguerita':
            $cost = 5;
            break;
        case 'golden':
            $cost = 100;
            break;
        case 'calzone':
            $cost = 10;
            break;
        case 'hawai':
            throw new Exception('Computer says no');
    }

    return $cost;
}
            
function orderPizza_all($launch)
{
    if($launch){
        orderPizza('calzone', 'nico');
        orderPizza('marguerita', 'nick');
        orderPizza('golden', 'students');
    }
    else
    {
        exit;
    }  
}

make_Allhappy(true);
 
