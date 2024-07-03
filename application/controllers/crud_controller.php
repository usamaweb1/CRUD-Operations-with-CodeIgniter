<?php

class crud_controller extends CI_controller
{
    public function index()
    {
        $data['products_details'] = $this->crud_model->getAllproducts();
        $this->load->view('crud_view', $data); 
    }

    public function addproducts()
    {
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['error'] = validation_errors();
            $this->load->view('crud_view', $data);
        } else {
            $result = $this->crud_model->insertproducts([
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity')
            ]);
            if ($result) {
                $this->session->set_flashdata('inserted', 'Your data has been successfully added');
            }
            redirect('crud_controller');
        }
    }

    public function editproduct($id)
    {
        $data['singleproduct'] = $this->crud_model->getsingleproduct($id);
        // var_dump( $data['singleproduct']); die();
        $this->load->view('edit_view', $data);
    }

    public function update($id)
    {
        $this->form_validation->set_rules('name', 'Product Name', 'trim|required');
        $this->form_validation->set_rules('price', 'Product Price', 'trim|required');
        $this->form_validation->set_rules('quantity', 'Product Quantity', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['error'] = validation_errors();
            $this->load->view('crud_view', $data);
        } else {
            $result = $this->crud_model->updateproducts([
                'name' => $this->input->post('name'),
                'price' => $this->input->post('price'),
                'quantity' => $this->input->post('quantity')
            ],  $id);
            if ($result) {
                $this->session->set_flashdata('updated', 'Your data has been successfully updated!');
            }
            redirect('crud_controller');
        }
        
      
    }
    public function deleteproduct($id){
        $result = $this->crud_model->deleteitem($id); 
        if ($result == true ) {
            $this->session->set_flashdata('deleted', 'Your data has been deleted!');
        }
        redirect('crud_controller');  
    }
}

?>
