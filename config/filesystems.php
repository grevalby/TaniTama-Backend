<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'gcs'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

        'gcs' => [
            'driver' => 'gcs',
            'key_file_path' => env('GOOGLE_CLOUD_KEY_FILE', null), // optional: /path/to/service-account.json
            'key_file' => [
                'type' => "service_account",
                'private_key_id' => "45b1f78b7185dead8a19825e7b872272261f77dd",
                'private_key' => "-----BEGIN PRIVATE KEY-----\nMIIEuwIBADANBgkqhkiG9w0BAQEFAASCBKUwggShAgEAAoIBAQCvwBzkL7yPcUlH\nmc89tk1v1NqSDHafwIRJUMwoPnBPCKWfq5upgxNbK8FPWE1fyp0dF/1L5zX61fkp\nOnhFKarq8PvQujo79GgvRxus/3kVwmMwTGK7rBduTWb1jhzbai2FCjDqA/vOBWDo\n1MyAVxhTRx2MmObp1yFXX0j3rmyvfCPiShJzTU38cc4nrrUSu7v/gtaUGJIEE9Zp\nq6+HWedbtwnWdavwa8ii8wKxkbSKQlpyXQ5qUArsbZ1eUGFBS54o4AHoAGkBVpNs\nI7ESS7LAyLL123bWEBTCaXoyEZcEZ3o2SXOhSd8pBHY1kS7QNJI66VP3koFLaZ1h\n86rVPxZ3AgMBAAECgf8mxjvCgpyw3/ucxiltsYMSM2jmu3LMmMt4BTyzpEYYrtnw\nDlLEWvOYXPA0uifdDusLgCrxYN41/h3wQlJGiaMry+p67z8IipGk+1LiXSjUmeVx\nPVSLHWydT6mQbujQOA1YBRCIKkRZbShGNgjTuHfi3WdVnZl9Wfk0V9Fa/KWhv3hz\nzM2SQZyzg+jWIQWMCDKe1YxJHjQnXoDlfbO4uiPCT4VVr6oLQ5fFDfo7OMYwM73t\na6wnQp+cY2GVTlRCXqqfLfLTIA+mmNT35wroL1tdQIw7fVZp8FdHSlINmXi6bcJD\nRiouzHfFLC/St/q0T2slJlhbif2aR+0+TAmomeECgYEA3zQF9a/3/Hje5eNmOkxr\nNXEq74JG4x19pXP9S3LRk2kHEyDjyilb+DapCDGOqa0dxQ7kAWme0UdrMYNLWvri\nUAe8Se6U4vAAeurh6+chd1uN19MYW+cDnRQbfbezey0YnFUDN1Wn5L/lojh6B83J\nQciQ2UdRAKd73yFvNYq54yMCgYEAyZMdEAU9diX867/B3t9Ft3OMFGV2oG8Mr2Sp\n3X8BtF+akg/TsyLx6dVpOHqThBwpnSQvzgb68HAygKdQ2ATgCF2q7Ih/E/SbtDhO\nxjakr0v84ulNCCdE4GVHdsBZvHDHlSAJjir7flviGuXEpf+oCas8sX/UOuvxsHQU\nxUP/rp0CgYAm/9UGv69p2si/jEMhbpbQ6Kwi2zV9m3qHvUOFulMqGZDV48pJWX6r\nWQmh197ggNIRy29FW+oXEQ6GwTUaeXmvmBprJJe5K0w6Le45pNHxI/sdudGoxS2Z\ndZj0F3Px0shZEHWWZo4GZw09kfaohGlk6CF/BXn+zkTTkOj4hvvB1wKBgEBSqpZ/\nJZK7Io9UHJhzJPsaaxvjGMyvQxwBAleE/NVDIL71P/fM8edNS4tTShmBJyJW9s5G\n2fK5ytPVEG4ueBMTWMSr9ek3SCxlP3Xu3/R0Shlam1M7vLXie8CANuJ0FqwWkhYE\nz0YOKgOtSGg0Qbn8I5z8jovS2MgW8r3UKhXdAoGBANgCdxWzdAc/x3hRcYuu7wbl\nfgXinGvGdkIKHh+xCYcZXyu+74z43b2zoOJwaeU7V+At0kJr+ArhkKDJ9gHf50lf\noWLF2tsLv6j8dCzon2jDQnEZOrN0Qalwk82eOfei8fy+j0RPCnIkrbHf5UE4KmOu\niMOvqpNL3/ceC4iDV6bY\n-----END PRIVATE KEY-----\n",
                'client_email' => "gcs-laravel@tanitama.iam.gserviceaccount.com",
                'client_id' => "116564962318544892622",
                'auth_uri' => "https://accounts.google.com/o/oauth2/auth",
                'token_uri' => "https://oauth2.googleapis.com/token",
                'auth_provider_x509_cert_url' => "https://www.googleapis.com/oauth2/v1/certs",
                'client_x509_cert_url' => "https://www.googleapis.com/robot/v1/metadata/x509/gcs-laravel%40tanitama.iam.gserviceaccount.com",
            ], // optional: Array of data that substitutes the .json file (see below)
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', 'your-project-id'), // optional: is included in key file
            'bucket' => env('GOOGLE_CLOUD_STORAGE_BUCKET', 'your-bucket'),
            'path_prefix' => env('GOOGLE_CLOUD_STORAGE_PATH_PREFIX', ''), // optional: /default/path/to/apply/in/bucket
            'storage_api_uri' => env('GOOGLE_CLOUD_STORAGE_API_URI', null), // see: Public URLs below
            'apiEndpoint' => env('GOOGLE_CLOUD_STORAGE_API_ENDPOINT', null), // set storageClient apiEndpoint
            'visibility' => 'public', // optional: public|private
            'visibility_handler' => null, // optional: set to \League\Flysystem\GoogleCloudStorage\UniformBucketLevelAccessVisibility::class to enable uniform bucket level access
            'metadata' => ['cacheControl'=> 'public,max-age=86400'], // optional: default metadata
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
