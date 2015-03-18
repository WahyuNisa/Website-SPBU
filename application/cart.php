<?php

class Cart extends CI_Controller{ // Our Cart class extends the Controller class

	function Cart()
	{
		parent::__construct(); // We define the the Controller class is the parent.	
		$this->load->model('cart_model'); // Load our cart model for our entire class
	}
	
	function index()
	{
		$data['product'] = $this->cart_model->retrieve_products(); // Retrieve an array with all products
		$this->load->view('products_cart', $data); // Display the page
	}
	
	function add_cart_item(){
		
		if($this->cart_model->validate_add_cart_item() == TRUE){
			
			// Check if user has javascript enabled
			if($this->input->post('ajax') != '1'){
				redirect('cart'); // If javascript is not enabled, reload the page with new data
			}else{
				echo 'true'; // If javascript is enabled, return true, so the cart gets updated
			}
		}
		
	}
	
	function update_cart(){
		$this->cart_model->validate_update_cart();
		redirect('cart');
	}
	
	function show_cart(){
		$this->load->view('cart/cart');
	}
	
	function empty_cart(){
		$this->cart->destroy();
		redirect('cart');
	}
}

/* End of file cart.php */
/* Location: ./application/controllers/cart.php */