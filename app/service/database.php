<?php

$SUPABASE_ANON_KEY = getenv("SUPABASE_ANON_KEY"); 
$SUPABASE_PUBLIC_URL = getenv("SUPABASE_PUBLIC_URL");

$service = new PHPSupabase\Service(
    $SUPABASE_ANON_KEY, 
    $SUPABASE_PUBLIC_URL
);

$auth = $service->createAuth();

try{
    $auth = $service->createAuth();

    return $auth;
}

catch(Exception $e){
    echo $auth->getError();
}
