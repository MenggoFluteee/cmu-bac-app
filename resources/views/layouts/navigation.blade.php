<ul class="sidebar-nav">
    <li class="sidebar-header">
        App
    </li>
    <li class="sidebar-item">
        <a class='sidebar-link' href='{{ route('dashboard') }}'>
            <i class="align-middle" data-lucide="home"></i> <span class="align-middle">Dashboard</span>
        </a>
    </li>
    <li class="sidebar-item">
        <a class='sidebar-link' href=''>
            <i class="align-middle" data-lucide="layout"></i> <span class="align-middle">Projects</span>
        </a>
    </li>

    <li class="sidebar-item">
        <a data-bs-target="#masterlist" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
            <i class="align-middle" data-lucide="clipboard"></i> <span class="align-middle">Master List</span>
        </a>
        <ul id="masterlist" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
            <li class="sidebar-item"><a class="sidebar-link" href=""><i class="align-middle"
                        data-lucide="menu"></i> List of Items</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href=""><i class="align-middle"
                        data-lucide="menu"></i> List of Materials</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href=""><i class="align-middle"
                        data-lucide="menu"></i> List of Labor Rates</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href=""><i class="align-middle"
                        data-lucide="menu"></i> List of Equipments</a></li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a data-bs-target="#reporting" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
            <i class="align-middle" data-lucide="file-text"></i> <span class="align-middle">Generate Report</span>
        </a>
        <ul id="reporting" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> POW</a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> DUPA</a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> DUPA
                    SUMMARY</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> SUMMARY
                    OF COST</a></li>
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> ABC</a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> BOQ</a>
            </li>
            <li class="sidebar-item"><a class="sidebar-link" href="#"><i class="fal fa-file-export"></i> PPMP</a>
            </li>
        </ul>
    </li>
    <li class="sidebar-item">
        <a class='sidebar-link' href=''>
            <i class="align-middle" data-lucide="settings"></i> <span class="align-middle">User Management</span>
        </a>
    </li>

</ul>
