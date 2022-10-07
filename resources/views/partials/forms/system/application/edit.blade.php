<form action="{{ route('application.update', $application->id) }}" method="post" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    
    <div class="form-group">
        <label class="text-label">
            @lang('form.application.application_name')
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input type="text" name="application_name" id="application_name" class="form-control" value="{{ old('application_name', $application->application_name) }}" required autofocus>
        </div>
        @error('application_name')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="text-label">
            @lang('form.application.application_icon')
        </label>
        <div class="input-group">
            @if (!empty(file_exists(public_path('storage/images/app/'.$application->application_icon))))
                <img src="{{ asset('storage/images/app/'.$application->application_icon) }}" class="show-image-application img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
            @else
                <img class="show-image-application img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
            @endif

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-file-image-o"></i>
                    </span>
                </div>
                <input type="file" name="application_icon" id="application_icon" onchange="ShowImageApplication()" class="logo-application form-control">
            </div>
        </div>
        @error('application_icon')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <input type="hidden" name="old_app_icon" value="{{ $application->application_icon }}">

    <div class="form-group">
        <label class="text-label">
            @lang('form.application.application_author')
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input type="text" name="application_author" id="application_author" class="form-control" value="{{ old('application_author', $application->application_author) }}" required autofocus>
        </div>
        @error('application_author')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="text-label">
            @lang('form.application.application_keywords')
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input type="text" name="application_keywords" id="application_keywords" class="form-control" value="{{ old('application_keywords', $application->application_keywords) }}" required autofocus>
        </div>
        @error('application_keywords')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="text-label">
            @lang('form.application.application_description')
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input type="text" name="application_description" id="application_description" class="form-control" value="{{ old('application_description', $application->application_description) }}" required autofocus>
        </div>
        @error('application_description')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="text-label">
            @lang('form.application.sidebar_name')
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <span class="input-group-text">
                    <i class="fa fa-user"></i>
                </span>
            </div>
            <input type="text" name="sidebar_name" id="sidebar_name" class="form-control" value="{{ old('sidebar_name', $application->sidebar_name) }}" required autofocus>
        </div>
        @error('sidebar_name')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <div class="form-group">
        <label class="text-label">
            @lang('form.application.sidebar_icon')
        </label>
        <div class="input-group">
            @if (!empty(file_exists(public_path('storage/images/app/'.$application->sidebar_icon))))
                <img src="{{ asset('storage/images/app/'.$application->sidebar_icon) }}" class="show-image-application-sidebar img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
            @else
                <img class="show-image-application-sidebar img-fluid mb-3 col-sm-5" style="max-width: 15em; max-height: 15em;">
            @endif

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">
                        <i class="fa fa-file-image-o"></i>
                    </span>
                </div>
                <input type="file" name="sidebar_icon" id="sidebar_icon" onchange="ShowImageApplicationSidebar()" class="logo-application-sidebar form-control">
            </div>
        </div>
        @error('sidebar_icon')
            <span class="error-display">
                {{ $message }}
            </span>
        @enderror
    </div>

    <input type="hidden" name="old_side_icon" value="{{ $application->sidebar_icon }}">

    <button class="btn btn-primary mt-2" type="submit">
        @lang('form.application.submit.edit')
    </button>
</form>