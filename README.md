# clock-ClockProv
this is our package for time
#installation :
please run this command : 
`composer require clock/ClockProv:dev-master`
then go to config directory then open app.php : 
add in providers array this line : 
`Clock\ClockProv\ClockProvider::class`
 add in aliases array this line : 
`Clock' => Clock\ClockProv\ClockFacade::class` 
then run this command :
`php artisan vendor:publish`
##usage : 
call our facade in your controller : `use Clock`
then if you want to get data : 
 `Clock::clock()`
