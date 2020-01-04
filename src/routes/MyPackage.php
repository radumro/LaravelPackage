<?php
Route::namespace(':uc:vendor\:uc:package\app\Http\Controllers')->
    prefix(':uc:package')->
    name(':uc:package.')->
    middleware(['web', 'admin'])->
    group(function(){
    Route::resource('/app',':uc:packageController');
});
