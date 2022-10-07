<div class="quixnav">
    <div class="quixnav-scroll">
        <ul class="metismenu" id="menu">
            @foreach ($ctgrs as $ctg)
                @if (count($mns) > 0)
                    <li class="nav-label first">
                        <span class="nav-text">
                            @if ($ctg->icon != 'none')
                                <x-icon::fontawesome type="solid" :icon="$ctg->icon"/>
                            @endif
                            {{ $ctg->label }}
                        </span>
                    </li>
                @endif
                @foreach ($mns as $mn)
                    @if ($mn->category === $ctg->id)
                        <li>
                            @if ($mn->permission != 'none')
                                @can($mn->permission)
                                    @if ($mn->type == 'parent')
                                        <a class="has-arrow" aria-expanded="false">
                                            @if ($mn->icon != 'none')
                                                <x-icon::fontawesome type="solid" :icon="$mn->icon"/>
                                            @endif
                                            <span class="nav-text">
                                                {{ $mn->label }}
                                            </span>
                                        </a>
                                        <ul aria-expanded="false">
                                            @foreach ($pgs as $pg)
                                                @if ($pg->menu_id === $mn->id)
                                                    @if ($pg->permission != 'none')
                                                        @can($pg->permission)
                                                            <li>
                                                                <a href="{{ route($pg->page_url) }}">
                                                                    @if ($ctg->icon != 'none')
                                                                        <x-icon::fontawesome type="solid" :icon="$ctg->icon"/>
                                                                    @endif
                                                                    <span class="nav-text">
                                                                        {{ $pg->label }}
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        @endcan
                                                    @else
                                                        <li>
                                                            <a href="{{ route($pg->page_url) }}">
                                                                @if ($ctg->icon != 'none')
                                                                    <x-icon::fontawesome type="solid" :icon="$ctg->icon"/>
                                                                @endif
                                                                <span class="nav-text">
                                                                    {{ $pg->label }}
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endif
                                                @endif
                                            @endforeach
                                        </ul>
                                    @else
                                        <a aria-expanded="false" href="{{ route($mn->page_url) }}">
                                            @if ($mn->icon != 'none')
                                                <x-icon::fontawesome type="solid" :icon="$mn->icon"/>
                                            @endif
                                            <span class="nav-text">
                                                {{ $mn->label }}
                                            </span>
                                        </a>
                                    @endif
                                @endcan
                            @else
                                @if ($mn->type == 'parent')
                                    <a class="has-arrow" aria-expanded="false">
                                        @if ($mn->icon != 'none')
                                            <x-icon::fontawesome type="solid" :icon="$mn->icon"/>
                                        @endif
                                        <span class="nav-text">
                                            {{ $mn->label }}
                                        </span>
                                    </a>
                                    <ul aria-expanded="false">
                                        @foreach ($pgs as $pg)
                                            @if ($pg->menu_id === $mn->id)
                                                @if ($pg->permission != 'none')
                                                    @can($pg->permission)
                                                        <li>
                                                            <a href="{{ route($pg->page_url) }}">
                                                                @if ($ctg->icon != 'none')
                                                                    <x-icon::fontawesome type="solid" :icon="$ctg->icon"/>
                                                                @endif
                                                                <span class="nav-text">
                                                                    {{ $pg->label }}
                                                                </span>
                                                            </a>
                                                        </li>
                                                    @endcan
                                                @else
                                                    <li>
                                                        <a href="{{ route($pg->page_url) }}">
                                                            @if ($ctg->icon != 'none')
                                                                <x-icon::fontawesome type="solid" :icon="$ctg->icon"/>
                                                            @endif
                                                            <span class="nav-text">
                                                                {{ $pg->label }}
                                                            </span>
                                                        </a>
                                                    </li>
                                                @endif
                                            @endif
                                        @endforeach
                                    </ul>
                                @else
                                    <a aria-expanded="false" href="{{ route($mn->page_url) }}">
                                        @if ($mn->icon != 'none')
                                            <x-icon::fontawesome type="solid" :icon="$mn->icon"/>
                                        @endif
                                        <span class="nav-text">
                                            {{ $mn->label }}
                                        </span>
                                    </a>
                                @endif
                            @endif
                        </li>
                    @endif
                @endforeach
            @endforeach
        </ul>
    </div>
</div>