Route::get('/index',[Controllerproudcts::class ,'index'])->name('proudct.index');

Route::get('/prouducts/creat',[Controllerproudcts::class ,'creat'])->name('proudct.creat');
Route::post('/prouducts',[Controllerproudcts::class ,'store'])->name('proudct.store');
Route::get('/prouducts/{prouducts}/edit',[Controllerproudcts::class ,'edit'])->name('proudct.edit');
Route::put('/prouducts/{prouducts}/update',[Controllerproudcts::class ,'update'])->name('proudct.update');
Route::delete('/prouducts/{prouducts}/delet',[Controllerproudcts::class ,'delet'])->name('proudct.delet');
Route::get('/prouducts/{prouducts}/archife',[Controllerproudcts::class ,'archife'])->name('proudct.archife');
Route::get('/products/Archife', [Controllerproudcts::class, 'archiveIndex'])->name('proudct.archive_list');


