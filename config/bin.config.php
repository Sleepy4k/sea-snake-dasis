<?php

return [
  /*
  |--------------------------------------------------------------------------
  | Application Name
  |--------------------------------------------------------------------------
  |
  | This value is the name of your application. This value is used when the
  | framework needs to place the application's name in a notification or
  | any other location as required by the application or its packages.
  |
  */
  'name' => env('BIN_NAME', 'Sea Snake'),

  /*
  |--------------------------------------------------------------------------
  | Application Environment
  |--------------------------------------------------------------------------
  |
  | This value determines the "environment" your application is currently
  | running in. This may determine how you prefer to configure various
  | services your application utilizes. Set this in your ".env" file.
  |
  */
  'env' => env('BIN_ENV', 'production'),

  /*
  |--------------------------------------------------------------------------
  | Application Debug Mode
  |--------------------------------------------------------------------------
  |
  | When your application is in debug mode, detailed error messages with
  | stack traces will be shown on every error that occurs within your
  | application. If disabled, a simple generic error page is shown.
  |
  */
  'debug' => env('BIN_DEBUG', false),

  /*
  |--------------------------------------------------------------------------
  | Application URL
  |--------------------------------------------------------------------------
  |
  | This URL is used by the console to properly generate URLs when using
  | the Snake command line tool. You should set this to the root of
  | your application so that it is used when running Snake tasks.
  |
  */
  'url' => env('BIN_URL', 'http://localhost'),
];
