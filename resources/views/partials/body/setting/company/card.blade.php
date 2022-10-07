<x-profile::basic class="col-lg-12">
    <x-profile::head>
        <x-profile::content>
            <x-profile::photo :image="$company->logo"/>
        </x-profile::content>
    </x-profile::head>
    <x-profile::info>
        <x-profile::name class="col-xl-4 col-sm-4 border-right-1 prf-col" :name="$company->name"/>
        <x-profile::email class="col-xl-4 col-sm-4 border-right-1 prf-col" :email="$company->email"/>
    </x-profile::info>
</x-profile::basic>