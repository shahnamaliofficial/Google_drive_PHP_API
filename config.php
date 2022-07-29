<?php 
// Database configuration    
define('DB_HOST', 'localhost'); 
define('DB_USERNAME', 'root'); 
define('DB_PASSWORD', '123456'); 
define('DB_NAME', 'drive'); 
 
// Google API configuration 
define('GOOGLE_CLIENT_ID', '447895701363-7i69vk9ahsg4kfp0e86cqr2bn5lc1lbj.apps.googleusercontent.com'); 
define('GOOGLE_CLIENT_SECRET', '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'); 
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/drive.file'); 
define('REDIRECT_URI', 'https://localhost/drive/google_drive_sync.php'); 
 
// Start session 
if(!session_id()) session_start(); 
 
// Google OAuth URL 
$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope=' . urlencode(GOOGLE_OAUTH_SCOPE) . '&redirect_uri=' . REDIRECT_URI . '&response_type=code&client_id=' . GOOGLE_CLIENT_ID . '&access_type=online'; 
 
?>