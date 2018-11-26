<?php
namespace cart {
    // Add an item to the cart
    function add_item($key, $quantity) {
        global $products; //HOW IS THIS SET?
        if ($quantity < 1) return;

        // If item already exists in cart, update quantity
		//create session with ID and then create sub key
		//USE SESSION AND KEY TO IDENTIFY STORING MULITPLE VALUES?
        if (isset($_SESSION['cart13'][$key])) {
            $quantity += $_SESSION['cart13'][$key]['qty'];
            update_item($key, $quantity); //FUNCTION UPDATE_ITEM
            return;
        }
/////////////////////////////////////////////////////////////////////////////////KEY TO ADDING ITEM
        // Add item
        $cost = $products[$key]['cost'];
        $total = $cost * $quantity;  //HERE IS WHERE THE TOTAL IS STORED
		//HERE IS WHERE THE ARRAY IS STORED
        $item = array(
            'name' => $products[$key]['name'],
            'cost' => $cost,
            'qty'  => $quantity,
            'total' => $total
        );
        $_SESSION['cart13'][$key] = $item; //ADD ITEM TO SESSION
    }
///////////////////////////////////////////////////////////////////////////////////////////KEY TO ADDING ITEM
/////////////////////////////////////////////////////////////////////////////////KEY TO UPDATING ITEM   
   // Update an item in the cart
    function update_item($key, $quantity) {
        $quantity = (int) $quantity;
        if (isset($_SESSION['cart13'][$key])) {
            if ($quantity <= 0) {
                unset($_SESSION['cart13'][$key]);
            } else {
                $_SESSION['cart13'][$key]['qty'] = $quantity;
                $total = $_SESSION['cart13'][$key]['cost'] *
                         $_SESSION['cart13'][$key]['qty'];
                $_SESSION['cart13'][$key]['total'] = $total;
            }
        }
    }
/////////////////////////////////////////////////////////////////////////////////KEY TO UPDATING ITEM
	//////////////////////////////////////////////////////////MATH
    // Get cart subtotal
    function get_subtotal() {
        $subtotal = 0;
        foreach ($_SESSION['cart13'] as $item) {
            $subtotal += $item['total'];
        }
        $subtotal_f = number_format($subtotal, 2);
        return $subtotal_f;
    }
	/////////////////////////////////////////////////////////////MATH

	
	//////////////////////////////I DONT KNOW
    // Get a function for sorting the cart on the specified key
    function compare_factory($sort_key) {
        return function($left, $right) use ($sort_key) {
            if ($left[$sort_key] == $right[$sort_key]) {
                return 0;
            } else if ($left[$sort_key] < $right[$sort_key]) {
                return -1;
            } else {
                return 1;
            }
        };
    }
/////////////////////////////////////////////////I DONT KNOW

//////////////////////////////////////////////////////////SORT
    // Sort the cart on the specified key
    function sort($sort_key) {
        $compare_function = compare_factory($sort_key);
        usort($_SESSION['cart13'], $compare_function);
    }
}

//////////////////////////////////////////////////////////SORT
?>