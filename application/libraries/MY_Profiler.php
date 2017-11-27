
<?php if(!defined('BASEPATH')) exit('No direct script access allowed'); 



class MY_Profiler extends CI_Profiler 
{
    function run() 
    { 

         $output = "<div id='codeigniter_profiler' style='clear:both;background-color:#fff;padding:10px;'>";  

        $output .= $this->_compile_uri_string(); 

        $output .= $this->_compile_get(); 

        $output .= $this->_compile_post();

        $output .= $this->_compile_controller_info(); 

        $output .= $this->_compile_benchmarks(); 

        $output .= $this->_compile_queries();

        $output .= $this->_compile_memory_usage(); 

       $output .= '</div>';    return $output;
       
             }

 }




 ?>
