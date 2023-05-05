@can('dashboard.templates.show')
    <!--begin:Menu item-->
    <div class="menu-item">
        <!--begin:Menu link-->
        <a class="menu-link" href="{{route('dashboard.templates.index')}}">
            <span class="menu-icon">
                <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
                <span class="svg-icon svg-icon-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 512 512" fill="currentColor"><!--! Font Awesome Pro 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M0 96C0 60.7 28.7 32 64 32H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm64 64V416H224V160H64zm384 0H288V416H448V160z"/></svg>
                </span>
                <!--end::Svg Icon-->
            </span>
            <span class="menu-title">Templates</span>
        </a>
        <!--end:Menu link-->
    </div>
    <!--end:Menu item-->
@endcan
