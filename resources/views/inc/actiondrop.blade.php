<div class="dropstart">
    <div class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" type="button">
        <i class="bi bi-mouse3-fill"></i>
    </div>
    <ul class="dropdown-menu">
        <li><a href="{{ $view }}" class=" dropdown-item ">
                <i class="bi bi-window-fullscreen rounded border bg-success ps-1 pe-1 text-white">
                </i> | View</a></li>
        <li><a href="{{ $edit }}" class=" dropdown-item">
                <i class="bi bi-pencil-square rounded border bg-warning ps-1 pe-1">
                </i> | Edit</a></li>
        <li>
            <hr class="dropdown-divider">
        </li>
        <li><a href="{{ $delete }}" class="dropdown-item">
                <i class="bi bi-archive rounded border bg-danger ps-1 pe-1 text-white">
                </i> | Delete</a></li>
    </ul>
</div>