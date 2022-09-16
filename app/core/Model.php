<?php 

namespace app\core;

class Model {

    protected $service;

    protected function __construct()
    {       
        $SUPABASE_ANON_KEY = SUPABASE_API_KEY;
        $SUPABASE_PUBLIC_URL = SUPABASE_API_URL;
    
        $this->service = new \PHPSupabase\Service(
            $SUPABASE_ANON_KEY, 
            $SUPABASE_PUBLIC_URL . "/rest/v1"
        );
    }

}