<x-profile::basic class="col-lg-12">
    <x-profile::head>
        <x-profile::content>
            <x-profile::photo :image="$user->logo"/>
        </x-profile::content>
    </x-profile::head>
    <x-profile::info>
        <x-profile::name class="col-xl-4 col-sm-4 border-right-1 prf-col" :name="$user->username"/>
        <x-profile::email class="col-xl-4 col-sm-4 border-right-1 prf-col" :email="$user->email"/>
    </x-profile::info>
</x-profile::basic>