<?php

class Magebuzz_Productslider_Model_System_Config_Position
{
    public function toOptionArray()
    {
        return array(
            array('value' => 'home', 'label'=>Mage::helper('adminhtml')->__('Home Page')),
            array('value' => 'category_page', 'label'=>Mage::helper('adminhtml')->__('Category Page')),
            array('value' => 'product_page', 'label'=>Mage::helper('adminhtml')->__('Product Page')),
        );
    }
}