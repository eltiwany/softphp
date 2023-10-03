<?php 

namespace App\Controllers;

use App\Models\Sample;

class SamplesController extends Controller {
    
    public function viewSampleData()
    {
        $sampleData = Sample::fetchSampleData();
        
        return $this->view('sample.view-sample', [
            'heading' => 'List of Regions and Districts',
            'data' => $sampleData,
        ]);
    }
    
    public function getSampleData()
    {
        $sampleData = Sample::fetchSampleData();
        
        return $this->response(['data' => $sampleData]);
    }

}