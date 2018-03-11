<template>
    <nav class="col-sm-2 col-md-2 sidebar">
        <div class="sidebar-sticky">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">
                        <i class="far fa-fw fa-btn fa-tachometer" aria-hidden="true"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/calendar">
                        <i class="far fa-fw fa-btn fa-calendar-alt" aria-hidden="true"></i> Calendar
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/leads">
                        <i class="far fa-fw fa-btn fa-address-book" aria-hidden="true"></i> Leads
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/clients">
                        <i class="far fa-fw fa-btn fa-users" aria-hidden="true"></i> Clients
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/sessions">
                        <i class="fas fa-fw fa-btn fa-camera-retro" aria-hidden="true"></i> Sessions
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/photos">
                        <i class="far fa-fw fa-btn fa-images" aria-hidden="true"></i> Photos
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</template>

<script>
    $(function() {
        var current = location.pathname;
        $('.sidebar-sticky .nav li a').each(function() {
            var $this = $(this);
            // if the current path is like this link, make it active
            if ($this.attr('href').indexOf(current) !== -1) {
                $this.addClass('active');
            }
        });
    });
</script>
