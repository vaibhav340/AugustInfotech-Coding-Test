<?php
  
  // Explain overriding by writing a sample PHP program
  
  // overriding functions means we can use same function name 
  // in parent class as well as in child class
  
  /**
   *  Parent class 
   *  to show realname
   */
    class ShowOverloadingMain {
      
      public function getName() {
        
        return 'Vaibhav Vijay Chavan';
      }
      
    }
    
    /**
     *  child class 
     *  to show fake name
     * 
     */
    class ShowOverloadingSub extends ShowOverloadingMain {
      
      public function getName() {
        
        return 'Sanji zoro';
      }
    }
    
    $mainObj = new ShowOverloadingMain();
    $subObj= new ShowOverloadingSub();
    
    echo $mainObj->getName() . "\n";
    echo $subObj->getName();
    
  
?>
