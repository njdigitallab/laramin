<aside id="sidebar" class="fixed z-10 h-screen w-64 bg-white overflow-y-auto">
    <div class="overflow-y-auto w-full">
        <ul class="mt-20 px-4">
            {{-- Users --}}
            @include('layouts.app.menu-item', [
                'id' => 'users',
                'icon' => 'fa-solid fa-users',
                'title' => 'Users',
                'policy' => [
                    'ability' => '',
                    'class' => 'App\Models\User',
                ],

                'submenus' => [
                    [
                        'id' => 'all-users',
                        'title' => 'Users',
                        'route' => '',
                        'policy' => [
                            'ability' => '',
                            'class' => 'App\Models\User',
                        ],
                    ],
                    [
                        'id' => 'add-user',
                        'title' => 'Create User',
                        'route' => '',
                        'policy' => [
                            'ability' => '',
                            'class' => 'App\Models\User',
                        ],
                    ],
                ],
            ])
        </ul>
    </div>
</aside>