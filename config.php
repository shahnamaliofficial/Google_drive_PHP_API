<?php 
// Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '123456'); 
define('DB_NAME', 'drive'); 
 
// Google API configuration 
define('GOOGLE_CLIENT_ID', ''); 
define('GOOGLE_CLIENT_SECRET', ''); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive.file'); 
define('REDIRECT_URI', 'https://localhost/drive/google_drive_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
 
?>