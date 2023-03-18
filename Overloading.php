<?php
  
  // Explain overloading by writing a sample PHP program
  
  /**
   *  overloading in php means using same function name for different functionality
   * 
   */
  
  /**
   * Class to show real name 
   */
    class ShowOverloadingMain {
      
      public function getName() {
        
        return 'Vaibhav Vijay Chavan';
      }
      
    }
  
  /**
   * class to show fake name
   */
    class ShowOverloadingSub {
      
      public function getName() {
        
        return 'Sanji zoro';
      }
    }
    
    $mainObj = new ShowOverloadingMain();
    $subObj= new ShowOverloadingSub();
    
    echo $mainObj->getName() . "\n";
    echo $subObj->getName();
    
  
?>
