<?php

use App\Http\Controllers\Webhooks\GithubIssueController;

Route::group(['prefix' => 'webhooks'], function(){
    Route::post('github/issue', GithubIssueController::class);
});

