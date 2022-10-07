<div class="row page-titles mx-0">
    <div class="col-sm-6 p-md-0">
        <div class="welcome-text">
            <h4>
                {{ ucfirst(last(request()->segments())) }}
            </h4>
            <span class="ml-1">
                {{ ucfirst(request()->segment(count(request()->segments()) - 1)) }}
            </span>
        </div>
    </div>

    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
        <ol class="breadcrumb">
            @foreach (request()->segments() as $breadcrumb)
                <li class="breadcrumb-item">
                    <a>
                        {{ ucfirst($breadcrumb) }}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>
</div>