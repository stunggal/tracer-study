<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link {{ ($title === 'Dashboard') ? '' : 'collapsed' }}" href="/">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <!-- <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Ayo Masukkan datamu</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="forms-elements.html">
                        <i class="bi bi-circle"></i><span>Form Elements</span>
                    </a>
                </li>
            </ul>
        </li> -->

        <li class="nav-item">
            <a class="nav-link {{ ($title === 'Kuisioner') ? '' : 'collapsed' }}" href="/kuisioner">
                <i class="bi bi-book"></i>
                <span>Kuisioner</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link {{ ($title === 'Master Kuisioner') ? '' : 'collapsed' }}" data-bs-target="#forms-master" data-bs-toggle="collapse" href="#">
                <i class="bi bi-kanban"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-master" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="/master-kuisioner">
                        <i class="bi bi-chevron-right"></i><span>Manage Kuisioner</span>
                    </a>
                </li>
                <li>
                    <a href="/">
                        <i class="bi bi-chevron-right"></i><span>Manage Dashboard</span>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</aside>
<!-- End Sidebar-->