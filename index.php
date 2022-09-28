<?php


$routes = [];

route('/', function () {
    header("location:view/log-in-page.php");
    
});
route('/login', function () {
    
    header("location:view/log-in-page.php");
});
route('/profile', function () {
    header("location:view/profile.php");
});
route('/register', function () {
    header("location:view/register-page.php");
});
route('/home', function () {
    header("location:view/home.php");
});
route('/resume', function () {
    header("location:view/form.php");
});
route('/contactus', function () {
    header("location:view/contact-us.php");
});
route('/aboutus', function () {
    header("location:view/about-us.php");
});
function route(string $path, callable $callback){
    global $routes;
    $routes[$path] = $callback;
}
run();
function run() {
    global $routes;
    $uri = $_SERVER['REQUEST_URI'];
    foreach ($routes as $path => $callback) {
        if ($path != $uri) continue;
           $callback();
           
        } 
        
    }


?>