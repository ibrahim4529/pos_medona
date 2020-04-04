<?php

return [
    'role_structure' => [
        'pemilik' => [
            'users' => 'c,r,u,d',
            'customers' => 'c,r,u,d',
            'suppliers' => 'c,r,u,d',
            'transactions' => 'c,r,u,d',
            'inventories' => 'c,r,u,d',
            'acl' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'manajer' => [
            'transactions' => 'c,r,u,d',
            'inventories' => 'c,r,u,d',
            'customers' => 'c,r,u,d',
            'profile' => 'r,u'
        ],
        'pegawai' => [
            'customers' => 'c,r,u',
            'transactions' => 'c,r,u',
            'profile' => 'r,u'
        ],
    ],
    'permission_structure' => [
        'cru_user' => [
            'profile' => 'c,r,u'
        ],
    ],
    'permissions_map' => [
        'c' => 'create',
        'r' => 'read',
        'u' => 'update',
        'd' => 'delete'
    ]
];
