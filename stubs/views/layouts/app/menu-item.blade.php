@if(isset($policy) && array_key_exists('ability', $policy) && ! empty($policy['ability'])) 
    @can($policy['ability'], $policy['class'])
        <li class="menu-container" menu-id="{{ $id }}">
            <div class="parent-menu-item" parent-id="{{ $id }}">
                <div class="parent-menu-icon">
                    <i class="{{ $icon }}" title="{{ $title }}"></i>
                </div>
                <div class="parent-menu-title">
                    {{ $title }}
                </div>
            </div>
            <div class="submenu">
                @foreach ($submenus as $submenu)
                    <div class="submenu-item" menu-id="{{ $submenu['id'] }}">
                        <a href="{{ $submenu['route'] }}">
                            {{ $submenu['title'] }}
                        </a>
                    </div>
                @endforeach
            </div>
        </li>
    @endcan
@else
    <li class="menu-container" menu-id="{{ $id }}">
        <div class="parent-menu-item" parent-id="{{ $id }}">
            <div class="parent-menu-icon">
                <i class="{{ $icon }}" title="{{ $title }}"></i>
            </div>
            <div class="parent-menu-title">
                {{ $title }}
            </div>
        </div>
        <div class="submenu">
            @foreach ($submenus as $submenu)
                <div class="submenu-item" menu-id="{{ $submenu['id'] }}">
                    <a href="{{ $submenu['route'] }}">
                        {{ $submenu['title'] }}
                    </a>
                </div>
            @endforeach
        </div>
    </li>
@endif