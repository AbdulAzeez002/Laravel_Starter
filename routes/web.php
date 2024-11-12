<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => 1,
                'title' => 'Software Engineer 1',
                'salary' => '50000',
            ],
            ['id' => 2,
                'title' => 'Software Engineer 2',
                'salary' => '100000',
            ],
            ['id' => 3,
                'title' => 'Software Engineer 3',
                'salary' => '150000',
            ],

        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Software Engineer 1',
            'salary' => '50000',
        ],
        [
            'id' => 2,
            'title' => 'Software Engineer 2',
            'salary' => '100000',
        ],
        [
            'id' => 3,
            'title' => 'Software Engineer 3',
            'salary' => '150000',
        ],

    ];

    $job= \Illuminate\Support\Arr::first($jobs,fn($job)=>$job['id']==$id);
    // dd($job);
    return view('job',[
      'job'=>$job
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
