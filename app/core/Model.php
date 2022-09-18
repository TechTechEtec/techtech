<?php 

namespace app\Core;

class Model {

    protected function connect() {
        $SUPABASE_ANON_KEY = SUPABASE_API_KEY;
        $SUPABASE_PUBLIC_URL = SUPABASE_API_URL;
    
        $service = new \PHPSupabase\Service(
            $SUPABASE_ANON_KEY, 
            $SUPABASE_PUBLIC_URL . "/rest/v1"
        );

        return $service;
    }

}