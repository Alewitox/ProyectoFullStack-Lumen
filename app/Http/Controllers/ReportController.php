<?php

namespace App\Http\Controllers;
use JasperPHP\JasperPHP as JasperPHP;
use Illuminate\Http\Request;

//dd(__DIR__ . '/../../vendor/cossou/jasperphp/examples/hello_world.jasper');
class ReportController extends Controller {

    public function generateReport() {
       
        $jasper = new JasperPHP;
        $jasper->compile(base_path('//public/seriesList.jrxml'))->execute();
        
        $filename = 'seriesList';
        $output = base_path('//public/' . $filename);
        $jasper->process(
                base_path('//public/seriesList.jasper'),
                $output,
                array('pdf', 'rtf'),
                array(),
                array(
                  'driver' => 'mysql',
                  
                  'host' => 'localhost',
                  
                  'port' => '3306',
                  'database' => 'tv_show',
                  'username' => 'root',
                  'password' => '1234',
                ),
               
                // $output,
                // array('pdf', 'rtf'),
	            // array('php_version' => phpversion())
        )->execute();

        

    // exec($jasper->output().' 2>&1', $output);
    // print_r($output);

        // $jasper->process(
        //     base_path('/vendor/cossou/jasperphp/examples/hello_world.jasper'),
        //     false,
        //     array('pdf'),
        //     array('php_version' => phpversion())
        // )->execute();
    }

}